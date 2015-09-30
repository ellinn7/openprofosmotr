<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пациенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Загрузка файла', ['upload'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Ввод пациента', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
            'birthday',
            'factors1',
            'factors2',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
            ],
        ],
    ]); ?>

</div>
