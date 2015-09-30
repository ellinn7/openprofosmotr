<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures */

$this->title = 'Ввод';
$this->params['breadcrumbs'][] = ['label' => 'Процедуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
