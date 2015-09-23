<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Against2 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Against2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="against2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'factor',
            'factor_code',
            'name',
            'optional',
        ],
    ]) ?>

</div>
