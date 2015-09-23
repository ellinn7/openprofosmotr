<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Specialists1 */

$this->title = 'Create Specialists1';
$this->params['breadcrumbs'][] = ['label' => 'Specialists1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialists1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
