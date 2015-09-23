<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Procedures1 */

$this->title = 'Create Procedures1';
$this->params['breadcrumbs'][] = ['label' => 'Procedures1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
