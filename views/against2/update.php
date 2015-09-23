<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Against2 */

$this->title = 'Update Against2: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Against2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="against2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
