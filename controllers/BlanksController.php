<?php
/**
 * Печать бланков
 * 
 * @author Elena Zorina
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Patients;
use app\models\Factors1;
use app\models\Factors2;
use app\models\Specialists1;
use app\models\Procedures1;
use app\models\Against1;
use app\models\Specialists2;
use app\models\Procedures2;
use app\models\Against2;
use app\models\SpecialistsRequired;
use app\models\ProceduresRequired;
use app\models\Specialists;
use app\models\Procedures;
use Yii;

require_once '../extensions/mpdf60/mpdf.php';

class BlanksController extends Controller
{
    /**
     * public layout
     */
    public $layout='print';


    /**
     * @param integer $id
     * @param integer $firm
     * @return boolean
     */
    public function actionPrint($id=false,$firm=false)
    {
        if($firm) {
            $condition=['firm_id'=>$firm];
        } elseif($id) {
            $condition=['id'=>$id];
        } else {
            return false;
        }
        
        $models=Patients::find()->where($condition)->all();
        if(!$models) {
            return false;
        }
        
        $this->_print($models);
        
    }
    
    protected function _print($models)
    {
        $files_to_print=[];
        
        foreach ($models as $model) {
            
            $factors1_arr=[];
            $factors2_arr=[];
            $specialists_arr=[];
            $procedures_arr=[];
            $againsts_arr=[];
        
            $factors1=explode(',',$model->factors1);
            foreach ($factors1 as $factor) {
                $factor_model=Factors1::find()->where(['code'=>$factor])->one();
                if(!$factor_model) {continue;}
                $factors1_arr[]=$factor_model->code.' '.$factor_model->name;
                $specialists=Specialists1::find()->where(['factor'=>$factor_model->id])->andWhere("name not like '%*%'")->all();
                if($specialists) {
                    foreach($specialists as $specialist) {
                        $specialists_arr[]=$specialist->name;
                    }
                }
                $procedures=Procedures1::find()->where(['factor'=>$factor_model->id])->andWhere("name not like '%*%'")->all();
                if($procedures) {
                    foreach($procedures as $procedure) {
                        if(((preg_match('/40/',$procedure->descr) && preg_match('/лет/ui',$procedure->descr) && preg_match('/старше/ui',$procedure->descr) && $model->age<40))
                        ||((preg_match('/40/',$procedure->descr) && preg_match('/лет/ui',$procedure->descr) && preg_match('/моложе/ui',$procedure->descr) && $model->age>=40))
                        ||((preg_match('/женщин/ui',$procedure->descr)||(preg_match('/гинеколог/ui',$procedure->name))) && $model->sex=='м')) {
                            continue;
                        }
                        $procedures_arr[]=$procedure->name;
                    }
                }
                $againsts=Against1::find()->where(['factor'=>$factor_model->id])->all();
                if($againsts) {
                    foreach($againsts as $against) {
                        $againsts_arr[]=$against->name;
                    }
                }
            }

            $factors2=explode(',',$model->factors2);
            foreach ($factors2 as $factor) {
                $factor_model=Factors2::find()->where(['code'=>$factor])->one();
                if(!$factor_model) {continue;}
                $factors2_arr[]=$factor_model->code.' '.$factor_model->name;
                $specialists=Specialists2::find()->where(['factor'=>$factor_model->id])->andWhere("name not like '%*%'")->all();
                if($specialists) {
                    foreach($specialists as $specialist) {
                        $specialists_arr[]=$specialist->name;
                    }
                }
                $procedures=Procedures2::find()->where(['factor'=>$factor_model->id])->andWhere("name not like '%*%'")->all();
                if($procedures) {
                    foreach($procedures as $procedure) {
                        if(((preg_match('/40/',$procedure->descr) && preg_match('/лет/ui',$procedure->descr) && preg_match('/старше/ui',$procedure->descr) && $model->age<40))
                        ||((preg_match('/40/',$procedure->descr) && preg_match('/лет/ui',$procedure->descr) && preg_match('/моложе/ui',$procedure->descr) && $model->age>=40))
                        ||((preg_match('/женщин/ui',$procedure->descr)||(preg_match('/гинеколог/ui',$procedure->name))) && $model->sex=='м')) {
                            continue;
                        }
                        $procedures_arr[]=$procedure->name;
                    }
                }
                $againsts=Against2::find()->where(['factor'=>$factor_model->id])->all();
                if($againsts) {
                    foreach($againsts as $against) {
                        $againsts_arr[]=$against->name;
                    }
                }
            }
        
            $factors1_arr=array_unique($factors1_arr);
            $factors2_arr=  array_unique($factors2_arr);
            $specialists_arr=self::prepareSpecialists($specialists_arr,$model->sex);
            $procedures_arr=self::prepareProcedures($procedures_arr,$model->sex,$model->age);
            $againsts_arr=array_unique($againsts_arr);
            
            $files_to_print[]=$this->rout($model,$specialists_arr,$procedures_arr,$againsts_arr);
            $files_to_print[]=$this->personal($model);
            $files_to_print[]=$this->passport($model,$factors1_arr,$factors2_arr,$specialists_arr,$procedures_arr);
            $files_to_print[]=$this->resume($model,$factors1_arr,$factors2_arr);
            $files_to_print[]=$this->bloodclinic_talon($model,$model->talon);
            $files_to_print[]=$this->analysis($model,$factors1,$factors2);            
        }
        
        $this->pdf($files_to_print);
    }

    /**
     * профмаршрут
     * @param object $model
     * @param array $factors1_arr
     * @param array $factors2_arr
     * @param string $specialists_arr
     * @param array $procedures_arr
     * @param array $againsts_arr
     * @return array
     */
    protected function rout($model,$specialists_arr,$procedures_arr,$againsts_arr)
    {
        $factors_str='';
        if($model->factors1) {
            $factors_str.='Прил. 1: '.$model->factors1;
        }
        if($model->factors2) {
            $factors_str.='Прил. 2: '.$model->factors2;
        }
        foreach ($specialists_arr as $i => $spec) {
            $specialist=Specialists::find()->where(['specialist'=>$spec])->one();
            if($specialist) {
                $specialists_arr[$i]=$spec.' <b>'.$specialist->place.'</b>';
            }
        }
        foreach ($procedures_arr as $i => $proc) {
            $procedure=Procedures::find()->where(['procedure'=>$proc])->one();
            if($procedure) {
                $procedures_arr[$i]=$proc.' <b>'.$procedure->place.'</b>';
            }
        }
        return [
            'html'=>$this->renderPartial('rout', [
                'model' => $model,
                'factors_str' => $factors_str,
                'specialists_str' => implode('<br>',$specialists_arr),
                'procedures_str' => implode('<br>',$procedures_arr),
                'againsts_str' => implode('<br>-',$againsts_arr),
            ]),
            'format'=>'A4-L',
        ];
    }
    
    /**
     * карта и согласие на обработку персональных данных
     * @param obj $model
     * @return array
     */
    protected function personal($model)
    {
        return [
            'html'=>  $this->renderPartial('personal',[
                'model' => $model,
                'firm' => Yii::$app->user->identity->firm,
            ]),
            'format'=>'A4-P',
        ];
    }
    
    /**
     * паспорт здоровья
     * @param obj $model
     * @param array $factors1_arr
     * @param array $factors2_arr
     * @param array $specialists_arr
     * @param array $procedures_arr
     * @return array
     */
    protected function passport($model,$factors1_arr,$factors2_arr,$specialists_arr,$procedures_arr)
    {
        return [
            'html'=>  $this->renderPartial('passport',[
                'model' => $model,
                'factors1_arr' => $factors1_arr,
                'factors2_arr' => $factors2_arr,
                'specialists_arr' => $specialists_arr,
                'procedures_arr' => $procedures_arr,
                'firm' => Yii::$app->user->identity->firm,
            ]),
            'format'=>'A4-L',
        ];
    }
    
    /**
     * заключение
     * @param obj $model
     * @param array $factors1_arr
     * @param array $factors2_arr
     * @return array
     */
    protected function resume($model,$factors1_arr,$factors2_arr)
    {
        return [
            'html'=>$this->renderPartial('resume',[
                'model' => $model,
                'factors1_str' => implode(' , ',$factors1_arr),
                'factors2_str' => implode(' , ',$factors2_arr),
                'firm' => Yii::$app->user->identity->firm,
            ]),
            'format'=>'A4-L',
        ];
    }
    
    /**
     * клинический анализ крови и талон на оказание услуг
     * @param obj $model
     * @param bool $talon
     * @return array
     */
    protected function bloodclinic_talon($model,$talon)
    {
        return [
            'html'=>$this->renderPartial('bloodclinic_talon',[
                'model'=>$model,
                'talon'=>$talon,
                'firm' => Yii::$app->user->identity->firm,
            ]),
            'format'=>'A4-L',
        ];
    }
    
    protected function analysis($model,$factors1,$factors2)
    {
        return [
            'html'=>$this->renderPartial('analysis',[
                'model'=>$model,
                'firm' => Yii::$app->user->identity->firm,
                'reticul'=>$this->defineProc($factors1,$factors2,['%етикулоциты%']),
                'syph'=>$this->defineProc($factors1,$factors2,['%ифилис%']),
                'nose'=>$this->defineProc($factors1,$factors2,['%носа%','%стафилококк%']),
                'paras'=>$this->defineProc($factors1,$factors2,['%гельм%']),
                'honorea'=>$model->sex=='м'?$this->defineProc($factors1,$factors2,['%гонор%']):false,
                'eritrocit'=>$this->defineProc($factors1,$factors2,['%эритроцит%']),
                'blood'=>  $this->defineProc($factors1,$factors2,[['%илирубин%','%АСТ%','%АЛТ%']]),
            ]),
            'format'=>'A4-P',
        ];
    }

    /**
     * adds required specialists
     * @param array $arr
     * @return array
     */
    protected static function prepareSpecialists($arr,$sex)
    {
        $records=SpecialistsRequired::find()->all();
        foreach ($records as $record) {
            if(preg_match('/женщин/ui',$record->descr) && $sex=='м') {
                continue;
            }
            $arr[]=$record->name;
        }
        $arr=array_unique($arr);
        sort($arr);
        return $arr;
    }
    
    /**
     * adds required procedures
     * @param array $arr
     * @return array
     */
    protected static function prepareProcedures($arr,$sex,$age)
    {
        $records=  ProceduresRequired::find()->all();
        foreach ($records as $record) {
            if( (preg_match('/женщин/ui',$record->descr) && $sex=='м')
                ||(preg_match('/40/',$record->descr) && preg_match('/лет/ui',$record->descr) && preg_match('/старше/ui',$record->descr) && $age<40)) {
                continue;
            }
            $arr[]=$record->name;
        }
        $arr=array_unique($arr);
        sort($arr);
        return $arr;
    }
    
    /**
     * есть ли ретикулоциты
     * @param type $factors1
     * @param type $factors2
     * @return boolean
     */
    protected function defineProc($factors1,$factors2,$proc_cond_arr)
    {
        $proc_cond="and name not like '%*%'";
        foreach ($proc_cond_arr as $el) {
            if(is_array($el)) {
                $el_str=  implode("' or name like '",$el);
                $proc_cond.=" and ( name like '$el_str' )";
            } else {
                $proc_cond.=" and name like '$el'";
            }
        }
        foreach ($factors1 as $factor) {
            $factor_model=Factors1::find()->where(['code'=>$factor])->one();
            if($factor_model) {
                $proc=Procedures1::find()->where("factor=$factor_model->id".$proc_cond)->one();
                if($proc) {
                    $procedure=Procedures::find()->where(['procedure'=>$proc->name])->one();
                    if($procedure&&$procedure->place) {
                        return $procedure->place;
                    }
                    return 'каб.';
                }
            }
        }
        foreach ($factors2 as $factor) {
            $factor_model=Factors2::find()->where(['code'=>$factor])->one();
            if($factor_model) {
                $proc=Procedures2::find()->where("factor=$factor_model->id".$proc_cond)->one();
                if($proc) {
                    $procedure=Procedures::find()->where(['procedure'=>$proc->name])->one();
                    if($procedure&&$procedure->place) {
                        return $procedure->place;
                    }
                    return 'каб.';
                }
            }
        }
        return false;
    }


    /**
     * вызов ПДФ
     * @param array $pages
     */
    protected function pdf($pages)
    {
        require_once '../extensions/mpdf60/mpdf.php';        
        $pdf=new \mPDF('',$pages[0]['format'],0,'',5,5,8,5);
        $css=  file_get_contents('../web/css/print.css');
        $pdf->writeHtml("<style>{$css}</style>");
        foreach($pages as $i => $page) {
            if($pdf->y>13) {
                $pdf->AddPageByArray(['newformat'=>$page['format']]); //A4-P
            }
            $pdf->writeHtml($page['html']);
        }        
        $pdf->Output("output.pdf","I");
    }
}
