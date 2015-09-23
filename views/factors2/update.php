<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Factors2 */

$this->title = 'Update Factors2: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Factors2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factors2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
