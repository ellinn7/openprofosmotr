<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProceduresRequired */

$this->title='Обязательные процедуры - ввод';
$this->params['breadcrumbs'][] = ['label' => 'Обязательные процедуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Ввод';
?>
<div class="procedures-required-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
