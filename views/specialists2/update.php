<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Specialists2 */

$this->title = 'Изменение';
$this->params['breadcrumbs'][] = ['label' => $model->factor_code, 'url' => ['factors2/view','id'=>$model->factor]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialists2-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
