<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpecialistsRequired */

$this->title = 'Обязательный осмотр специалистами - редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Обязательный осмотр специалистами', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="specialists-required-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
