<?php

namespace app\commands;

use app\models\Factors1;
use app\models\Factors2;
use app\models\Specialists1;
use app\models\Specialists2;
use app\models\Procedures1;
use app\models\Procedures2;
use app\models\Against1;
use app\models\Against2;

class FactorsController extends \yii\console\Controller
{

    /**
     * enter command
     * @param type $message
     */
    public function actionIndex($message = 'hello world')
    {
        $this->actionFactors1();
        echo $message." \n";
//        $this->actionFactors2();
//        echo $message . "\n";
    }

    protected function getArrCsvFileContent($file,$offset=0)
    {
        $str=file_get_contents($file);
        $substr=substr($str,$offset);
        return explode("\n",$substr);
    }
    
    protected function createFactor($factor,$arr)
    {
        $factor->code=  preg_replace('/ $/','',$arr[0]);
        $factor->name=$arr[1];
        $factor->period=$arr[2];
        $factor->save();
    }
    
    protected function createSubfactor($model,$factor,$name)
    {
        $model->factor=$factor->id;
        $model->factor_code=$factor->code;
        if(preg_match('/\*/',$name)) {
            $model->optional=1;
        }
        $model->name=$name;
        $model->save();
    }
    
    public function actionFactors1()
    {       
        $arr_str=$this->getArrCsvFileContent(__DIR__ .'/../files/pril1.csv',431);
        $oldcode=0;
        foreach ($arr_str as $el) {
            $arr=  explode('!',$el);
            if($oldcode!=$arr[0]) {
                if(preg_match('/\. [^0-9]/ui',$arr[0])) {
                    $arr2=explode('. ',$arr[0]);
                    $arr[0]=$arr2[0].'.';
                    $arr[1]=$arr2[1];
                }
                $oldcode=$arr[0];
                if(count($arr)>1) {
                    $factor=new Factors1;
                    $this->createFactor($factor,$arr);
                } else {
                    continue;
                }
            }
            if(isset($arr[3]) && strlen($arr[3])>2) {
                $specialist=new Specialists1;
                $this->createSubfactor($specialist,$factor,$arr[3]);
            }
            if(isset($arr[4]) && strlen($arr[4])>2) {
                $procedure=new Procedures1;
                $this->createSubfactor($procedure,$factor,$arr[4]);
            }
            if(isset($arr[5]) && strlen($arr[5])>2) {
                $against=new Against1;
                $this->createSubfactor($against,$factor,$arr[5]);
            }
        }
        echo '1';
    }
    
    public function actionFactors2()
    {
        $arr_str=$this->getArrCsvFileContent('../files/pril2.csv',364);
        $oldcode=0;
        foreach ($arr_str as $el) {
            $arr=  explode('!',$el);
            if(count($arr)>1 && $oldcode!=$arr[0]) {
                $subarr=explode('. ',$arr[1]);
                $subarr[0]=$subarr[0].'.';
                $subarr[2]=$arr[2];
                $factor=new Factors2;
                $this->createFactor($factor,$subarr);
                $oldcode=$arr[0];
            }
            if(isset($arr[3]) && strlen($arr[3])>2) {
                $specialist=new Specialists2;
                $this->createSubfactor($specialist,$factor,$arr[3]);
            }
            if(isset($arr[4]) && strlen($arr[4])>2) {
                $procedure=new Procedures2;
                $this->createSubfactor($procedure,$factor,$arr[4]);
            }
            if(isset($arr[5]) && strlen($arr[5])>2) {
                $against=new Against2;
                $this->createSubfactor($against,$factor,$arr[5]);
            }
        }        
        echo '1';
    }
    
}
