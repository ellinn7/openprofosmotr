<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'patron') ?>

    <?= $form->field($model, 'snils') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'spec') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'factors1') ?>

    <?php // echo $form->field($model, 'factors2') ?>

    <?php // echo $form->field($model, 'seniority') ?>

    <?php // echo $form->field($model, 'dep') ?>

    <?php // echo $form->field($model, 'prof') ?>

    <?php // echo $form->field($model, 'addresse_reg') ?>

    <?php // echo $form->field($model, 'addresse_fact') ?>

    <?php // echo $form->field($model, 'disability') ?>

    <?php // echo $form->field($model, 'passport_series') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'passport_given_date') ?>

    <?php // echo $form->field($model, 'passport_given_who') ?>

    <?php // echo $form->field($model, 'insurance_company') ?>

    <?php // echo $form->field($model, 'insurance_number') ?>

    <?php // echo $form->field($model, 'living_lpu') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
