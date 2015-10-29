<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FirmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Предприятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Загрузка файла', ['//patients/upload'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Ввод предприятия', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'firm',
            'date',
            'file',
            [
                'attribute'=>'talon',
                'value'=>  function($model) {
                    if($model->talon) {
                        return 'V';
                    }
                    return '';
                },
                'filter'=>'',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
