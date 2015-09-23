<?php

namespace app\controllers;

use Yii;
use app\models\Patients;
use app\models\PatientsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Factors1;
use app\models\Specialists1;
use app\models\Procedures1;
use app\models\Against1;
use app\models\Factors2;
use app\models\Specialists2;
use app\models\Procedures2;
use app\models\Against2;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\Functions;
use app\models\SpecialistsRequired;
use app\models\ProceduresRequired;

/**
 * PatientsController implements the CRUD actions for Patients model.
 */
class PatientsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Patients models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatientsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patients model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $this->layout='print';
        $this->pdf($this->render('//blanks/landscape', [
            'model' => $this->findModel($id),
        ]),
        'A4-L');
        $this->pdf($this->render('//blanks/portrait', [
            'model' => $this->findModel($id),
        ]),
        'A4-P');
    }
    
    /**
     * print all landscape blanks
     * @param type $id
     */
    public function actionLandscape($id)
    {
        $specialists_arr=[];
        $procedures_arr=[];
        $againsts_arr=[];
        $factors1_arr=[];
        $model=$this->findModel($id);
        $factors1=explode(',',$model->factors1);
        foreach ($factors1 as $factor) {
            $factor_model=Factors1::find()->where(['code'=>$factor])->one();
            if($factor_model) {
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
        }
        $factors2=explode(',',$model->factors2);
        /*
        foreach ($factors2 as $factor) {
            $factor_model=Factors2::find()->where(['code'=>$factor])->one();
            if($factor_model) {
                $specialists=Specialists2::find()->where(['factor'=>$factor_model->id])->all();
                if($specialists) {
                    foreach($specialists as $specialist) {
                        $specialists_arr[]=$specialist->name;
                    }
                }
                $procedures=Procedures2::find()->where(['factor'=>$factor_model->id])->all();
                if($procedures) {
                    foreach($procedures as $procedure) {
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
        }
        */
        
        $factors1_arr=array_unique($factors1_arr);
        $specialists_arr=self::prepareSpecialists($specialists_arr);
        $procedures_arr=self::prepareProcedures($procedures_arr,$model->sex);
        $againsts_arr=array_unique($againsts_arr);
        
        $this->layout='print';
        
        $this->pdf($this->render('//blanks/landscape', [
            'model' => $this->findModel($id),
            'factors1_codes_str' => implode(' , ',$factors1),
            'factors2_codes_str' => implode(' , ',$factors2),
            'factors1_arr' => $factors1_arr,
            'factors1_str' => implode(' , ',$factors1_arr),
            'specialists_arr' => $specialists_arr,
            'specialists_str' => implode('<br>',$specialists_arr),
            'procedures_arr' => $procedures_arr,
            'procedures_str' => implode('<br>',$procedures_arr),
            'againsts_str' => implode('<br>- ',$againsts_arr),
        ]),
        'A4-L');
    }
    
    /**
     * adds required specialists
     * @param array $arr
     * @return array
     */
    protected static function prepareSpecialists($arr)
    {
        $records=  SpecialistsRequired::find()->all();
        foreach ($records as $record) {
            $arr[]=$record->name;
        }
        array_unique($arr);
        sort($arr);
        return $arr;
    }

    /**
     * adds required procedures
     * @param array $arr
     * @return array
     */
    protected static function prepareProcedures($arr,$sex)
    {
        $records=  ProceduresRequired::find()->all();
        foreach ($records as $record) {
            if(preg_match('/женщин/ui',$record->descr) && $sex=='м') {
                continue;
            }
            $arr[]=$record->name;
        }
        array_unique($arr);
        sort($arr);
        return $arr;
    }
    
    /**
     * print all portrait-oriented forms
     * @param type $id
     */
    public function actionPortrait($id)
    {
        $model=$this->findModel($id);
        $birthday=new \DateTime($model->birthday);
        $now=new \DateTime();
        $age=$now->diff($birthday);
        
        $factors1=explode(',',$model->factors1);
        foreach ($factors1 as $factor) {
            $factor_model=Factors1::find()->where(['code'=>$factor])->one();
            if($factor_model) {
                $reticul=Procedures1::find()->where(['factor'=>$factor_model->id])->andWhere("name like '%етикулоциты%'")->one();
                if($reticul) {
                    break;
                }
            }
        }
        
        $this->layout='print';
        $this->pdf($this->render('//blanks/portrait', [
            'model' => $model,
            'age' => $age->format('%y'),
            'reticul' => $reticul?true:false,
        ]),
        'A4-P');
    }

    /**
     * Creates a new Patients model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Patients();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Patients model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Patients model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
        
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if(!$model->file) {
                return $this->render('upload', ['model' => $model]);
            }
            
            $datetime=new \DateTime();
            $filename=$datetime->format('Y_m_d_H_i_s').'.'.$model->file->extension;
            
            if ($model->validate() && $model->file->saveAs('../uploads/'.$filename)) {
                if(Functions::loadData('../uploads/'.$filename)) {
                    $this->redirect(['index']);
                }
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    /**
     * Finds the Patients model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Patients the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Patients::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    /**
     * вызов ПДФ
     * @param string $html
     */
    protected function pdf($html,$format)
    {
        require_once '../extensions/mpdf60/mpdf.php';
        
        $pdf=new \mPDF('',$format,0,'',5,5,8,5);        
        $pdf->writeHtml($html);
        $pdf->Output("output.pdf","I");
    }
    
}
