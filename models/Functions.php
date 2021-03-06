<?php

namespace app\models;

use Yii;
use app\models\Patients;
use app\models\Firms;

/**
 * common functions
 *
 * @author zev46676
 */
class Functions
{
   /**
     * formatted date from string
     * @param type $str
     * @return type
     */
    public static function formatDate($str)
    {
        $str=  preg_replace('/[^0-9.]/ui','',$str);
        if(!preg_match('/./',$str)) {
            if(strlen($str)==6) {
                $str=substr($str,0,2).'.'.substr($str,2,2).'.20'.substr($str,4,2);
            } elseif(strlen($str)==8) {
                $str=substr($str,0,2).'.'.substr($str,2,2).'.'.substr($str,4,4);
            }
            else {
                return false;
            }
        }
        $date=new \DateTime($str);
        return $date->format('d.m.Y');
    }
    /**
     * from string to int
     * @param string $str
     * @return integer
     */
    public static function toInt($str)
    {
        $val=preg_replace('/[^0-9]/ui','',$str);
        if($val) {
            return $val*1;
        }
        return null;
    }
    /**
     * load data from specially prepared .xls
     * @return array
     */
    public static function loadFromXls($filename)
    {
        $data=\PHPExcel_IOFactory::load($filename);
        if(!$data) {return false;}
        if($data->getSheetCount()==2) {
            $sheetIndex=1;
        } elseif($data->getSheetCount()==4) {
            $sheetIndex=3;
        } else {
            return false;
        }
        $data->setActiveSheetIndex($sheetIndex);
        $aSheet = $data->getActiveSheet();

        //этот массив будет содержать массивы содержащие в себе значения ячеек каждой строки
        $list = [];
        //получим итератор строки и пройдемся по нему циклом
        foreach($aSheet->getRowIterator() as $i => $row){
            
            $list_row = [];
            
            if($sheetIndex==1) {
                if($i<2||$i>2&&$i<9) {
                    continue;
                }
            } elseif($sheetIndex==3) {
                if($i<6) {
                    continue;
                }elseif($i==6) {
                    $list[]=self::arrFirmRowFromTemplate3($filename);
                }
            }
            //получим итератор ячеек текущей строки
            $cellIterator = $row->getCellIterator();
            //пройдемся циклом по ячейкам строки
            //этот массив будет содержать значения каждой отдельной строки
            foreach($cellIterator as $cell){
                
                if(\PHPExcel_Shared_Date::isDateTime($cell)) {
                    $value=$cell->getValue();
                    $value=date('d.m.Y',\PHPExcel_Shared_Date::ExcelToPHP($value));
                    $cell->setValue($value);
                }
                //заносим значения ячеек одной строки в отдельный массив
                $list_row[]=$cell->getCalculatedValue();
            }
            $list[]=$list_row; //заносим массив со значениями ячеек отдельной строки в "общий массив строк"
        }
        return $list;
    }
    /**
     * firm name from template 3
     * @param string $filename
     * @return array
     */
    protected static function arrFirmRowFromTemplate3($filename)
    {
        $arr=[];
        $firm_data=\PHPExcel_IOFactory::load($filename);
        $firm_data->setActiveSheetIndex(1);
        $firm_aSheet = $firm_data->getActiveSheet();
        foreach($firm_aSheet->getRowIterator() as $i => $row){
            if($i==3) {
                $firm_cellIterator = $row->getCellIterator();
                foreach($firm_cellIterator as $firm_cell){
                    $arr[]=$firm_cell->getCalculatedValue();
                }
                return $arr;
            }
        }
    }
    /**
     * formatting sex field
     * @param type $str
     * @return string
     */
    public static function defineSex($str)
    {
        if(preg_match('/м/ui',$str)) { //потому что М в слове "женский" нет, а Ж в слове "мужской" есть
            return 'м';
        }
        return 'ж';
    }
    
    /**
     * prepare factors to save in parsable format
     * @param type $factors_str
     * @return type
     */
    public static function prepareFactors($factors_str)
    {
        $factors_str=preg_replace('/ /u','',$factors_str);
        if($factors_str) {
            if(!preg_match('/\.$/',$factors_str)) {
                $factors_str=$factors_str.'.';
            }
            $factors_str=preg_replace('/;/u',',',$factors_str);
            $factors_str=preg_replace('/([0-9]),/','$1.,',$factors_str);
            $factors_str=preg_replace('/[^0-9.,]/u','',$factors_str);
        }
        return $factors_str;        
    }
    /**
     * check factors in file
     * @param type $factors_str
     * @return type
     */
    public static function checkFactors($factors_str,$pril)
    {
        $factors_arr=explode(',',$factors_str);
        foreach($factors_arr as $code) {
            if($pril==1) {
                $factor=Factors1::find()->where(['code'=>$code])->one();
            } else {
                $factor=Factors2::find()->where(['code'=>$code])->one();
            }
            return self::checkFactor($factor,$code,$pril);
        }
    }
    /**
     * check factors in loaded file
     * @param object $factor
     * @param string $code
     * @param int $pril
     * @return int
     */
    protected static function checkFactor($factor,$code,$pril)
    {
        if(!$factor) {
            return "Код '{$code}' Приложения $pril отсутствует в приказе!";
        }
        if(!$factor->specialists&&!$factor->procedures) {
            return "Код '{$code}' Приложения $pril не является подпунктом!";
        }
        return 1;
    }
    /**
     * preparing loaded data to save
     * @param string $filename
     * @param iont $talon
     * @return array
     */
    protected static function prepareData($filename,$talon)
    {
        $data=self::loadFromXls($filename);
        if(!$data) {
            return 'Нет данных';
        }
        $data_to_save=[]; $firm=''; $firm_id=false;
        foreach ($data as $i=>$row) {
            if($i==0) {
                if(!isset($row[4])) {
                    return 'Не задано предприятие';
                }
                $firm=$row[4];
                $firm_id=Firms::add(['firm'=>$firm,'file'=>$filename]);
                if(!$firm_id) {
                    return 'Не удалось сохранить! Попробуйте еще раз.';
                }
                continue;
            }
            foreach([2,3,4,5,6,8] as $column) {
                if(!isset($row[$column])) {
                    return 'Не заданы основные атрибуты: Фамилия, Имя, Отчество, Пол, Специальность, Дата Рождения у пациента '.$row[2].' '.$row[3].' '.$row[4];
                }
            }
            if(!isset($row[9]) && !isset($row[10])) {
                return 'Не заданы пункты Приложений у пациента '.$row[2].' '.$row[3].' '.$row[4];
            }
            $new_row9=self::prepareFactors($row[9]);
            if($new_row9) {
                $check_factors1=self::checkFactors($new_row9,1);
                if($check_factors1!=1) {
                    return $check_factors1.' у пациента '.$row[2].' '.$row[3].' '.$row[4];
                }
            }
            $new_row10=self::prepareFactors($row[10]);
            if($new_row10) {
                $check_factors2=self::checkFactors($new_row10,2);
                if($check_factors2!=1) {
                    return $check_factors2.' у пациента '.$row[2].' '.$row[3].' '.$row[4];
                }
            }
            foreach([1,7,11,12,13,14,15,16,17,18,19,20,21,22,23,24] as $column) {
                if(!array_key_exists($column, $row)) {
                    $data[$i][$column]='';
                } else {
                    $data[$i][$column].='';
                }
            }
            $birthday=self::formatDate($row[8]);
            if(!$birthday) {
                return 'Неправильно указана дата рождения у пациента '.$row[2].' '.$row[3].' '.$row[4];
            }
            $data_to_save[]=[
                'firm'=>$firm.'',
                'snils'=>$row[1].'',
                'surname'=>$row[2].'',
                'name'=>$row[3].'',
                'patron'=>$row[4].'',
                'sex'=> self::defineSex($row[5]),
                'spec'=>$row[6].'',
                'phone'=>$row[7].'',
                'birthday'=> self::formatDate($row[8]),
                'factors1'=> $new_row9,
                'factors2'=> $new_row10,
                'seniority'=>$row[11].'',
                'dep'=>$row[12].'',
                'prof'=>$row[13].'',
                'addresse_reg'=>$row[14].'',
                'addresse_fact'=>$row[15].'',
                'disability'=>$row[16].'',
                'passport_series'=> self::toInt($row[17]),
                'passport_number'=> self::toInt($row[18]),
                'passport_given_date'=> self::formatDate($row[19]).'',
                'passport_given_who'=>$row[20].'',
                'insurance_number'=>$row[21].'',
                'insurance_company'=>$row[22].'',
                'living_lpu'=>$row[23].'',
                'descr'=>$row[24].'',
                'file'=>$filename,
                'talon'=>$talon,
                'firm_id'=>$firm_id,
            ];
        }
        usort($data_to_save,function($row1,$row2) {
            return $row1['surname'].$row1['name'].$row1['patron'].$row1['birthday']>$row2['surname'].$row2['name'].$row2['patron'].$row2['birthday'] ? 1 : 0;                
        });
        return $data_to_save;
    }
    /**
     * save data
     * @param array objects $data
     * @return type
     */
    protected static function saveData($data)
    {
        foreach ($data as $i=>$row) {
            $result=Patients::add($row);
            if($result) {
                return $result;
            }
        }
        return $data[0]['firm_id'];
    }

    /**
     * load patients per firm data
     * @param string $filename
     */
    public static function loadData($filename,$talon)
    {
        $data=self::prepareData($filename,$talon);
        if(is_string($data)) {
            return $data;
        }
        return self::saveData($data);
    }
    /**
     * form statreport in excel
     * @param string $title
     * @param string $filename
     * @param array objects $rows
     */
    public static function statreportExcel($title,$filename,$rows)
    {
        $phpExcelObject=new \PHPExcel;
        $phpExcelObject->getActiveSheet()->setTitle($title);
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('A1','№')->setCellValue('B1','Процедура')->setCellValue('C1','Кол-во');
        $cellnum=$num=1;
        foreach($rows as $row) {
            $cellnum++;
            $phpExcelObject->setActiveSheetIndex(0)->
                setCellValue('A'.$cellnum,$num)->
                setCellValue('B'.$cellnum,$row[0])->
                setCellValue('C'.$cellnum,$row[1]);
            $num++;
        }
        $objWriter = \PHPExcel_IOFactory::createWriter($phpExcelObject,'OpenDocument');
        $objWriter->save($filename);
    }
    
}
