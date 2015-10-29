<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Patients */

$this->title = 'Редактирование пациента';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия','url'=>['//firms/index']];
$this->params['breadcrumbs'][] = ['label' => 'Пациенты - '.$model->firm, 'url' => ['//firms/view','id'=>$model->firm_id]];
$this->params['breadcrumbs'][] = ['label' => $model->surname.' '.$model->name.' '.$model->patron, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="patients-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
