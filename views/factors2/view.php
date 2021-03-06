<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Factors2 */

$this->title = 'Приложение 2';
$this->params['breadcrumbs'][] = ['label' => 'Приложение2', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->code.' '.$model->name;
?>
<div class="factors2-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'name',
            'period',
            [
                'attribute'=>'specialists_str',
                'value'=> $model->getSpec_str(),
                'format'=>'raw'
            ],
            [
                'attribute'=>'procedures_str',
                'value'=> $model->getProc_str(),
                'format'=>'raw',
            ],
            [
                'attribute'=>'againsts_str',
                'value'=> $model->getAg_str(),
                'format'=>'raw',
            ],
        ],
    ]) ?>

    <p>
        <?= Html::a('Вернуться к списку', ['index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    
</div>
