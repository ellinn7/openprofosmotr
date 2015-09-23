<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Against1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="against1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'factor') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'factor_code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'optional') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
