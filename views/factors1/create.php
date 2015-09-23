<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Factors1 */

$this->title = 'Create Factors1';
$this->params['breadcrumbs'][] = ['label' => 'Factors1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factors1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
