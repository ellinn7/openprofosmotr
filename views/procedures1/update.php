<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures1 */

$this->title = 'Изменение';
$this->params['breadcrumbs'][] = ['label' => $model->factor_code, 'url' => ['factors1/view','id'=>$model->factor]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures1-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
