<?php

namespace app\controllers;

use Yii;
use app\models\Firms;
use app\models\FirmsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\PatientsSearch;
use app\models\Patients;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;

/**
 * FirmsController implements the CRUD actions for Firms model.
 */
class FirmsController extends Controller
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
                        'actions' => ['index','view','create','update','delete','toprint'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity;
                        }
                    ],
                    [
                        'actions' => ['index','view','create','update','delete','toprint'],
                        'denyCallback' => function ($rule, $action) {
                            throw new ForbiddenHttpException('Авторизуйтесь, чтобы начать пользоваться системой.');
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Firms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FirmsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Firms model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $searchModel = new PatientsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
    
        return $this->render('//patients/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'firm_id' => $model->id,
        ]);
    }

    /**
     * Creates a new Firms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Firms();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Firms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Firms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
    /**
     * dividing patients to groups to print
     * @param type $id
     * @return type
     */
    public function actionToprint($id)
    {
        $model=$this->findModel($id);
        $patients=Patients::find()->where(['firm_id'=>$id])->orderBy('surname,name,patron')->all();
        $pat_groups=$group=$group_ids=[];
        $i=0;
        foreach ($patients as $j=>$patient) {
            $group[]=$patient;
            $group_ids[]=$patient['id'];
            ++$i;
            if($i==10 || $j==count($patients)-1) {
                $pat_groups[]=[$group,$group_ids];
                $group=[];
                $group_ids=[];
                $i=0;
            }
        }
        return $this->render('toprint', [
            'model' => $model,
            'pat_groups' => $pat_groups,
        ]);
    
    }

    /**
     * Finds the Firms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Firms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Firms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
