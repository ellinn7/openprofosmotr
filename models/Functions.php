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
        if(preg_match('/м/ui',$str)) {
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
        $str=preg_replace('/;/u',',',$factors_str);
        $str=preg_replace('/ /u','',$str);
        $str=preg_replace('/([0-9]),/','$1.,',$str);        
        if($str&&!preg_match('/\.$/',$str)) {
            $str.='.';
        }
        return $str;        
    }
    
    
    public static function checkFactors1($factors_str)
    {
        $factors_arr=explode(',',$factors_str);
        foreach($factors_arr as $code) {
            $factor=Factors1::find()->where(['code'=>$code])->one();
            return self::checkFactor($factor,$code,1);
        }
    }
    
    
    public static function checkFactors2($factors_str)
    {
        $factors_arr=explode(',',$factors_str);
        foreach($factors_arr as $code) {
            $factor=Factors2::find()->where(['code'=>$code])->one();
            return self::checkFactor($factor,$code,2);
        }
    }
    
    protected static function checkFactor($factor,$code,$pril)
    {
        if(!$factor) {
            return "Код $code Приложения $pril отсутствует в приказе!";
        }
        if(!$factor->specialists&&!$factor->procedures) {
            return "Код $code Приложения $pril не является подпунктом!";
        }
        return 1;
    }

    protected static function validateData($filename)
    {
        $data=self::loadFromXls($filename);
        if(!$data) {
            return 'Нет данных';
        }
        foreach ($data as $i=>$row) {
            if($i==0) {
                if(!isset($row[4])) {
                    return 'Не задано предприятие';
                }
                continue;
            }
            foreach([2,3,4,5,6,8] as $column) {
                if(!isset($row[$column])) {
                    return 'Не заданы основные атрибуты: Фамилия, Имя, Отчество, Пол, Специальность, Дата Рождения';
                }
            }
            if(!isset($row[9]) && !isset($row[10])) {
                return 'Не заданы пункты Приложений';
            }
            $new_row9=self::prepareFactors($row[9]);
            $data[$i][9]=$new_row9;
            if($new_row9) {
                $check_factors1=self::checkFactors1($new_row9);
                if($check_factors1!=1) {
                    return $check_factors1;
                }
            }
            $new_row10=self::prepareFactors($row[10]);
            $data[$i][10]=$new_row10;
            if($new_row10) {
                $check_factors2=self::checkFactors2($new_row10);
                if($check_factors2!=1) {
                    return $check_factors2;
                }
            }
            foreach([1,7,11,12,13,14,15,16,17,18,19,20,21,22,23,24] as $column) {
                if(!array_key_exists($column, $row)) {
                    $data[$i][$column]='';
                }
            }
        }
        return $data;
    }
    
    protected static function saveData($data,$filename,$talon)
    {
        foreach ($data as $i=>$row) {
            if($i==0) {
                $firm=$row[4].'';
                $firm_id=Firms::add(['firm'=>$firm,'file'=>$filename]);
                continue;
            }
            $data_arr=[
                'firm'=>$firm,
                'snils'=>$row[1].'',
                'surname'=>$row[2].'',
                'name'=>$row[3].'',
                'patron'=>$row[4].'',
                'sex'=> self::defineSex($row[5]),
                'spec'=>$row[6].'',
                'phone'=>$row[7].'',
                'birthday'=> self::formatDate($row[8]),
                'factors1'=> $row[9].'',
                'factors2'=> $row[10].'',
                'seniority'=>$row[11].'',
                'dep'=>$row[12].'',
                'prof'=>$row[13].'',
                'addresse_reg'=>$row[14].'',
                'addresse_fact'=>$row[15].'',
                'disability'=>$row[16].'',
                'passport_series'=> self::toInt($row[17]).'',
                'passport_number'=> self::toInt($row[18]).'',
                'passport_given_date'=> self::formatDate($row[19]),
                'passport_given_who'=>$row[20].'',
                'insurance_number'=>$row[21].'',
                'insurance_company'=>$row[22].'',
                'living_lpu'=>$row[23].'',
                'descr'=>$row[24].'',
                'file'=>$filename,
                'talon'=>$talon,
                'firm_id'=>$firm_id,
            ];
            Patients::add($data_arr);
        }
        return $firm_id;
    }

    /**
     * @param string $filename
     */
    public static function loadData($filename,$talon)
    {
        $data=self::validateData($filename);
        if(is_string($data)) {
            return $data;
        }
        return self::saveData($data,$filename,$talon);
    }
    
}
