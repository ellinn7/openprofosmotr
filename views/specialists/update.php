<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Specialists */

$this->title = 'Специалисты - редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Специалисты', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="specialists-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
