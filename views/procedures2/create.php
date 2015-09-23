<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Procedures2 */

$this->title = 'Create Procedures2';
$this->params['breadcrumbs'][] = ['label' => 'Procedures2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
