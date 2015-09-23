<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Against2 */

$this->title = 'Create Against2';
$this->params['breadcrumbs'][] = ['label' => 'Against2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="against2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
