<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Against1 */

$this->title = 'Create Against1';
$this->params['breadcrumbs'][] = ['label' => 'Against1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="against1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
