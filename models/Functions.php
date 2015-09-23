<?php

namespace app\models;

use Yii;
use app\models\Patients;

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
        return $val*1;
    }
    
    /**
     * load data from specially prepared .xls
     * @return array
     */
    public static function loadFromXls($filename)
    {
        $data=\PHPExcel_IOFactory::load($filename);
        if(!$data) {return false;}
        $data->setActiveSheetIndex(1);
        $aSheet = $data->getActiveSheet();

        //этот массив будет содержать массивы содержащие в себе значения ячеек каждой строки
        $list = [];
        //получим итератор строки и пройдемся по нему циклом
        foreach($aSheet->getRowIterator() as $i => $row){
            if($i<2||$i>2&&$i<9) {
                continue;
            }
            //получим итератор ячеек текущей строки
            $cellIterator = $row->getCellIterator();
            //пройдемся циклом по ячейкам строки
            //этот массив будет содержать значения каждой отдельной строки
            $row = [];
            foreach($cellIterator as $cell){
                //заносим значения ячеек одной строки в отдельный массив
                $row[]=$cell->getCalculatedValue();
            }
            $list[]=$row; //заносим массив со значениями ячеек отдельной строки в "общий массв строк"
        }
        return $list;
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
        if(!$factors_str) {
            return null;
        }
        $str=preg_replace('/([0-9]),/','$1.,',$factors_str);        
        if(!preg_match('/\.$/',$str)) {
            $str.='.';
        }
        return $str;        
    }
    
    /**
     * @param string $filename
     */
    public static function loadData($filename)
    {
        $data=self::loadFromXls($filename);
        if(!$data) {
            return false;
        }
        foreach ($data as $i=>$row) {
            if($i==0) {
                $firm=$row[4];
                continue;
            }
            $data_arr=[
                'firm'=>$firm,
                'snils'=>$row[1],
                'surname'=>$row[2],
                'name'=>$row[3],
                'patron'=>$row[4],
                'sex'=> self::defineSex($row[5]),
                'spec'=>$row[6],
                'phone'=>$row[7],
                'birthday'=> self::formatDate($row[8]),
                'factors1'=> self::prepareFactors($row[9]),
                'factors2'=> self::prepareFactors($row[10]),
                'seniority'=>$row[11],
                'dep'=>$row[12],
                'prof'=>$row[13],
                'addresse_reg'=>$row[14],
                'addresse_fact'=>$row[15],
                'disability'=>$row[16],
                'passport_series'=> self::toInt($row[17]),
                'passport_number'=> self::toInt($row[18]),
                'passport_given_date'=> self::formatDate($row[19]),
                'passport_given_who'=>$row[20],
                'insurance_number'=>$row[21],
                'insurance_company'=>$row[22],
                'living_lpu'=>$row[23],
                'descr'=>$row[24],
                'file'=>$filename,
            ];
            Patients::add($data_arr);
        }
        return true;
    }
    
}
