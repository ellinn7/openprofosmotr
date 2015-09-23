<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProceduresRequired */

$this->title = 'Обязательные процедуры - редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Обязательные процедуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="procedures-required-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
