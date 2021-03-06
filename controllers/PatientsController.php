<?php

namespace app\controllers;

use Yii;
use app\models\Patients;
use app\models\PatientsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\Functions;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;
use app\models\Firms;

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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','update','delete','upload'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity;
                        }
                    ],
                    [
                        'actions' => ['index','view','create','update','delete','upload'],
                        'denyCallback' => function ($rule, $action) {
                            throw new ForbiddenHttpException('Авторизуйтесь, чтобы начать пользоваться системой.');
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Patients models.
     * @return mixed
     */
    public function actionIndex($firm_id=false)
    {
        $searchModel = new PatientsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'firm_id'=>$firm_id,
        ]);
    }

    /**
     * Displays a single Patients model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    /**
     * Creates a new Patients model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($firm_id)
    {
        $model = new Patients();
        $firm=Firms::find()->where(['id'=>$firm_id])->one();
        $model->firm_id=$firm->id;
        $model->firm=$firm->firm;
        
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
        $model=$this->findModel($id);
        $firm_id=$model->firm_id;
        $model->delete();
        return $this->redirect(['//firms/view','id'=>$firm_id]);
    }
        
    /**
     * загрузка файла с данными
     * @return type
     */
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if(!$model->file || !in_array($model->file->extension,['xls','ods'])) {
                return $this->render('upload', ['model' => $model]);
            }
            $datetime=new \DateTime();
            $filename=$datetime->format('Y_m_d_H_i_s').'.'.$model->file->extension;
            
            if ($model->validate() && $model->file->saveAs('/tmp/'.$filename)) {
                $result=Functions::loadData('/tmp/'.$filename,$model->talon);
                if(is_int($result)) {
                    $model->file->saveAs('../uploads/'.$filename);
                    unlink('/tmp/'.$filename);
                    $this->redirect(['//firms/view','id'=>$result]);
                } else {
                    unlink('/tmp/'.$filename);
                    $model->addError('file',$result);
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
    
}
