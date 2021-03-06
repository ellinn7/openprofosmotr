<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures1 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->factor_code, 'url' => ['factors1/view','id'=>$model->factor]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures1-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
        ],
    ]) ?>

</div>
