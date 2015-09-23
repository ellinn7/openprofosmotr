<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Specialists2 */

$this->title = 'Update Specialists2: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Specialists2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specialists2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
