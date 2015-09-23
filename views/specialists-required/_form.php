<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpecialistsRequired */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialists-required-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    
    <?= $form->field($model, 'descr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
