<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Factor2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Приложение 2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factors2-index">

    <h3>Перечень работ, при выполнении которых проводятся обязательные предварительные и периодические медицинские осмотры (обследования) работников</h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'code',
            'name',
            'period',
            [
                'attribute' => 'specialists_str',
                'value' => function($model) {
                    return $model->spec_str;
                },
                'format'=>'raw',
            ],
            [
                'attribute' => 'procedures_str',
                'value' => function($model) {
                    return $model->proc_str;
                },
                'format'=>'raw',
            ],
            [
                'attribute' => 'againsts_str',
                'value' => function($model) {
                    return $model->ag_str;
                },
                'format'=>'raw',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ],
        ],
    ]); ?>

</div>
