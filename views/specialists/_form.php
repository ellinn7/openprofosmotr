<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Specialists */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialists-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'specialist')->textInput() ?>
    
    <?= $form->field($model, 'place')->textInput() ?>

    <?= $form->field($model, 'descr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
