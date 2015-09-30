<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Specialists */

$this->title = 'Специалисты';
$this->params['breadcrumbs'][] = ['label' => 'Специалисты', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Ввод';
?>
<div class="specialists-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
