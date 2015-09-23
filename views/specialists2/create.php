<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Specialists2 */

$this->title = 'Create Specialists2';
$this->params['breadcrumbs'][] = ['label' => 'Specialists2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialists2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
