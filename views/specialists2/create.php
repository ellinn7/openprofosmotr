<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Specialists2 */

$this->title = 'Новый специалист';
$this->params['breadcrumbs'][] = ['label' => $model->factor_code, 'url' => ['factors2/view','id'=>$model->factor]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialists2-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
