<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patients */

$this->title = 'Пациенты';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия','url'=>['//firms/index']];
$this->params['breadcrumbs'][] = ['label' => 'Пациенты - '.$model->firm, 'url' => ['//firms/view','id'=>$model->firm_id]];
$this->params['breadcrumbs'][] = $model->surname.' '.$model->name.' '.$model->patron;
?>
<div class="patients-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'surname',
            'name',
            'patron',
            'snils',
            'sex',
            'spec',
            'phone',
            'birthday',
            'factors1',
            'factors2',
            'seniority',
            'dep',
            'prof',
            'addresse_reg',
            'addresse_fact',
            'disability',
            'passport_series',
            'passport_number',
            'passport_given_date',
            'passport_given_who',
            'insurance_company',
            'insurance_number',
            'living_lpu',
            'descr',
        ],
    ]) ?>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    
</div>
