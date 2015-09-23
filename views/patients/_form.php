<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Patients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patients-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'firm')->textInput() ?>

    <?= $form->field($model, 'surname')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'patron')->textInput() ?>
    
    <?= $form->field($model, 'sex')->dropDownList(['ж'=>'женский','м'=>'мужской'])?>

    <?= $form->field($model, 'birthday')->textInput()->widget(MaskedInput::className(),['mask'=>'99.99.9999'])?>

    <?= $form->field($model, 'factors1')->textInput() ?>

    <?= $form->field($model, 'factors2')->textInput() ?>

    <?= $form->field($model, 'seniority')->textInput() ?>

    <?= $form->field($model, 'dep')->textInput() ?>

    <?= $form->field($model, 'prof')->textInput() ?>
    
    <?= $form->field($model, 'snils')->textInput() ?>
    
    <?= $form->field($model, 'spec')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'addresse_reg')->textInput() ?>

    <?= $form->field($model, 'addresse_fact')->textInput() ?>

    <?= $form->field($model, 'disability')->textInput() ?>

    <?= $form->field($model, 'passport_series')->textInput() ?>

    <?= $form->field($model, 'passport_number')->textInput() ?>

    <?= $form->field($model, 'passport_given_date')->textInput() ?>

    <?= $form->field($model, 'passport_given_who')->textInput() ?>

    <?= $form->field($model, 'insurance_company')->textInput() ?>

    <?= $form->field($model, 'insurance_number')->textInput() ?>

    <?= $form->field($model, 'living_lpu')->textInput() ?>

    <?= $form->field($model, 'descr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
