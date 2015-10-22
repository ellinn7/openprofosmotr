<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures */

$this->title = 'Процедуры - редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Процедуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="procedures-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
