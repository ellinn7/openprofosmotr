<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpecialistsRequired */

$this->title = 'Обязательный осмотр специалистами - ввод';
$this->params['breadcrumbs'][] = ['label' => 'Обязательный осмотр специалистами', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Ввод';
?>
<div class="specialists-required-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
