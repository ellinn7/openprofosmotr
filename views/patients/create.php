<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Patients */

$this->title = 'Ввод пациента';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия','url'=>['//firms/index']];
$this->params['breadcrumbs'][] = ['label' => 'Пациенты - '.$model->firm, 'url' => ['//firms/view','id'=>$model->firm_id]];
$this->params['breadcrumbs'][] = 'Ввод';
?>
<div class="patients-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
