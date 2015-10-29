<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Firms */

$this->title = 'Предприятия - ввод';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firms-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
