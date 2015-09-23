<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Patients */

$this->title = 'Редактирование пациента';
$this->params['breadcrumbs'][] = ['label' => 'Пациенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firm.' - '.$model->surname.' '.$model->name.' '.$model->patron, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="patients-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
