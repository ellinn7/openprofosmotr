<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Against1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="against1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'factor')->textInput() ?>

    <?= $form->field($model, 'factor_code')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'optional')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
