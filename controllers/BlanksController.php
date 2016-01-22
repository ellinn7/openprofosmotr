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
     * report for Medcenter
     * @param integer $firm
     */
    public function actionStatreport($firm)
    {
        $this->layout='main';
        $results=[];
        $firm_model=  \app\models\Firms::find()->where(['id'=>$firm])->one();
        $patients=Patients::find()->where(['firm_id'=>$firm])->all();
        if($patients) {
            $results=$this->_reportStat($patients);
        }
        \app\models\Functions::statreportExcel('stat','report.ods',$results);
        return $this->render(
            'statreport',
            [
                'firm'=>$firm_model->firm,
                'res'=>$this->statreportHtml($results),
                'css'=>file_get_contents('../web/css/print.css')
            ]
        );
    }
    /**
     * 
     * @param type $results
     * @return type
     */
    protected function statreportHtml($results)
    {
        $res='';
        $num=0;
        foreach($results as $result) {
            ++$num;
            $res.="<tr><td>$num</td><td>$result[0]</td><td>$result[1]</td><tr>";
        }
        return $res;
    }


    protected function _reportStat($models)
    {
        $specialists_all=$procedures_all=[];
        foreach ($models as $model) {
            $factor1_results=self::runFactors([],[],1,$model->factors1,$model->age,$model->sex);
            $factor2_results=self::runFactors($factor1_results['specialists_arr'],$factor1_results['procedures_arr'],2,$model->factors2,$model->age,$model->sex,false,$factor1_results['analysis'],$factor1_results['blood']);
            $specialists_all=array_merge($specialists_all,self::prepareSpecialists($factor2_results['specialists_arr'],$model->sex));
            $procedures_all=array_merge($procedures_all,self::prepareProcedures($factor2_results['procedures_arr'],$model->sex,$model->age,$factor2_results['analysis'],$factor2_results['blood']));
        }
        return array_merge(self::groupArray($specialists_all),self::groupArray($procedures_all));
    }
    /** 
     * @param array $array
     * @return array
     */
    protected static function groupArray($array)
    {
        $result_array=[];
        foreach($array as $el) {
            if(!isset($result_array[$el])) {
                $result_array[$el]=[$el,0];
            }
            $result_array[$el][1]++;
        }
        return $result_array;
    }
    
    protected static function runFactors($specialists_arr,$procedures_arr,$factor_group,$factors,$age,$sex,$blanks=false,$analysis=[],$blood=[],$againsts_arr=[],$factors_arr=[])
    {
        $factors_array=explode(',',$factors);
        foreach ($factors_array as $factor) {
            if($factor_group==1) {
                $factor_model=Factors1::find()->where(['code'=>$factor])->one();
            } else {
                $factor_model=Factors2::find()->where(['code'=>$factor])->one();
            }
            if(!$factor_model) {continue;}
            $specialists_arr=self::addSpecialists($specialists_arr,$factor_model->id,$factor_group);
            $procedures=self::addProcedures($procedures_arr,$factor_model->id,$factor_group,$age,$sex,$analysis,$blood);
            $procedures_arr=$procedures['procedures_arr'];
            $analysis=$procedures['analysis'];
            $blood=$procedures['blood'];
            if($blanks) {
                $againsts_arr=self::addAgainsts($againsts_arr,1,$factor_model->id);
                $factors_arr[]=$factor_model->code.' '.$factor_model->name;
            }
        }
        return [
            'specialists_arr'=>$specialists_arr,
            'procedures_arr'=>$procedures_arr,
            'blood'=>$blood,
            'analysis'=>$analysis,
            'againsts_arr'=>$againsts_arr,
            'factors_arr'=>$factors_arr,
            'factors_as_array'=>$factors_array,
        ];
    }

    protected static function addSpecialists($specialists_arr,$factor,$factor_group)
    {
        if($factor_group==1) {
            $specialists=Specialists1::find()->where(['factor'=>$factor])->andWhere("name not like '%*%'")->all();
        } else {
            $specialists=Specialists2::find()->where(['factor'=>$factor])->andWhere("name not like '%*%'")->all();
        }
        if($specialists) {
            foreach($specialists as $specialist) {
                $specialists_arr[]=$specialist->name;
            }
        }
        return $specialists_arr;
    }
    
    protected static function addAgainsts($againsts_arr,$factor_group,$factor)
    {
        if($factor_group==1) {
            $againsts=Against1::find()->where(['factor'=>$factor])->all();
        } else {
            $againsts=Against2::find()->where(['factor'=>$factor])->all();
        }
        if($againsts) {
            foreach($againsts as $against) {
                $againsts_arr[]=$against->name;
            }
        }
        return $againsts_arr;
    }

    protected static function addProcedures($procedures_arr,$factor,$factor_group,$age,$sex,$analysis=[],$blood=[])
    {
        if($factor_group==1) {
            $procedures=Procedures1::find()->where(['factor'=>$factor])->andWhere("name not like '%*%'")->all();
        } else {
            $procedures=Procedures2::find()->where(['factor'=>$factor])->andWhere("name not like '%*%'")->all();
        }
        if($procedures) {
            foreach($procedures as $procedure) {
                if(self::filterProcedures($procedure->descr,$procedure->name,$sex,$age)) {
                    continue;
                }
                if(preg_match('/анализ/ui',$procedure->name)) {
                    $analysis[]=$procedure->name;
                    continue;
                }
                if(in_array($procedure->name,['АСТ','АЛТ','Билирубин'])) {
                    $blood[]=$procedure->name;
                    continue;
                }
                $procedures_arr[]=$procedure->name;
            }
        }
        return [
            'procedures_arr'=>$procedures_arr,
            'analysis'=>$analysis,
            'blood'=>$blood
        ];
    }
    
    protected static function filterProcedures($descr,$name,$sex,$age)
    {
         if(((preg_match('/40/',$descr) && preg_match('/лет/ui',$descr) && preg_match('/старше/ui',$descr) && $age<40))
            ||((preg_match('/40/',$descr) && preg_match('/лет/ui',$descr) && preg_match('/моложе/ui',$descr) && $age>=40))
            ||((preg_match('/женщин/ui',$descr)||(preg_match('/гинеколог/ui',$name))) && $sex=='м')
            ||(preg_match('/гоноре/ui',$name) && $sex=='ж')) {
            return true;
        }
        return false;
    }

    /**
     * @param integer $id
     * @param integer $firm
     * @return boolean
     */
    public function actionPrint($id=false,$firm=false,array $ids=[])
    {
        if($firm) {
            $condition=['firm_id'=>$firm];
        } elseif($id) {
            $condition=['id'=>$id];
        } elseif($ids) {
            $condition=['id'=>$ids];
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
            $factors1_results=self::runFactors([],[],1,$model->factors1,$model->age,$model->sex,true);
            $factors1_arr=array_unique($factors1_results['factors_arr']);
            $factors2_results=self::runFactors($factors1_results['specialists_arr'],$factors1_results['procedures_arr'],2,$model->factors2,$model->age,$model->sex,true,$factors1_results['analysis'],$factors1_results['blood'],$factors1_results['againsts_arr']);
            $factors2_arr=array_unique($factors2_results['factors_arr']);
            $specialists_arr=self::prepareSpecialists($factors2_results['specialists_arr'],$model->sex);
            $procedures_arr=self::prepareProcedures($factors2_results['procedures_arr'],$model->sex,$model->age,$factors2_results['analysis'],$factors2_results['blood']);
            $againsts_arr=array_unique($factors2_results['againsts_arr']);
            $files_to_print[]=$this->rout($model,$specialists_arr,$procedures_arr,$againsts_arr);
            $files_to_print[]=$this->personal($model);
            $files_to_print[]=$this->passport($model,$factors1_arr,$factors2_arr,$specialists_arr,$procedures_arr);
            $files_to_print[]=$this->resume($model,$factors1_arr,$factors2_arr);
            $files_to_print[]=$this->bloodclinic_talon($model,$model->talon);
            $files_to_print[]=$this->analysis($model,$factors1_results['factors_as_array'],$factors2_results['factors_as_array']);            
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
                'firm' => Yii::$app->user->identity->firm,
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
    protected static function prepareSpecialists($arr,$sex=false)
    {
        $records=SpecialistsRequired::find()->all();
        $ophtalmologist=false;
        $neurologist=false;
        foreach ($records as $record) {
            if($sex && preg_match('/женщин/ui',$record->descr) && $sex=='м' ||
                    preg_match('/(нарколог|психиатр)/ui',$record->name)) {
                continue;
            }
            if(preg_match('/(офтальмолог|окулист)/ui',$record->name)) {
                $ophtalmologist=$record->name;
            }
            if(preg_match('/(невролог)/ui',$record->name)) {
                $neurologist=$record->name;
            }
            $arr[]=$record->name;
        }
        $arr=array_unique($arr);
        sort($arr);
        if($ophtalmologist) {
            $arr[]=$ophtalmologist;
        }
        if($neurologist) {
            $arr[]=$neurologist;
        }
        $arr[]='Нарколог';
        $arr[]='Психиатр';
        return $arr;
    }
    
    /**
     * adds required procedures
     * @param array $arr
     * @return array
     */
    protected static function prepareProcedures($arr,$sex,$age,$analysis=[],$blood=[])
    {
        $records=  ProceduresRequired::find()->all();
        foreach ($records as $record) {
            if( (preg_match('/женщин/ui',$record->descr) && $sex=='м')
                ||(preg_match('/40/',$record->descr) && preg_match('/лет/ui',$record->descr) && preg_match('/старше/ui',$record->descr) && $age<40)) {
                continue;
            }
            if(preg_match('/анализ/ui',$record->name)) {
                $analysis[]=$record->name;
                continue;
            }
            if(in_array($record->name,['АСТ','АЛТ','Билирубин'])) {
                $blood[]=$record->name;
                continue;
            }
            $arr[]=$record->name;
        }
        $arr=array_unique($arr);
        sort($arr);
        $blood=array_unique($blood);
        $analysis=array_unique($analysis);
        if($blood) {
            $arr[]=implode(', ',$blood);
        }
        foreach($analysis as $analys) {
            $arr[]=$analys;
        }
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
