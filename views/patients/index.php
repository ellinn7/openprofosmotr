<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пациенты';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['//firms/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Печать бланков', ['//blanks/print','firm'=>$firm_id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Ввод пациента', ['//patients/create','firm_id'=>$firm_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'firm',
            [
                'attribute'=>'id',
                'value'=> function($model) {
                    return Html::a('Бланки',['//blanks/print','id'=>$model->id]);
                },
                'format'=>'raw',
                'header'=>'Печать бланков',
            ],
            'surname',
            'name',
            'patron',
            'snils',
            'sex',
            'spec',
            [
                'attribute'=>'birthday',
                'value'=> function($model) {
                    return $model->age;
                },
                'header'=>'Возраст',
            ],
            'factors1',
            'factors2',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'patients',
                'template' => '{view}{update}{delete}',
            ],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('Удалить', ['//firms/delete', 'id' => $firm_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить это предприятие вместе со всеми пациентами?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>