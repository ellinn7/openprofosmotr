<?php

use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'talon')->checkbox();?>

<?= $form->field($model, 'file')->fileInput() ?>

<button class="btn btn-success">Загрузить</button>

<?php ActiveForm::end(); ?>