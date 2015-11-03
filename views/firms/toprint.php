<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Firms */

$this->registerJsFile('@web/js/toprint.js',['depends' => 'yii\web\JqueryAsset']);

$this->title = $model->firm.' - печать бланков';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firm, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Печать бланков';
?>
<div class="firms-update">

    <h3>Печать бланков по группам</h3>
    
    <?php
    
    foreach ($pat_groups as $group) {
        echo Html::a($group[0][0]->surname.' - '.$group[0][count($group[0])-1]->surname,['//blanks/print','ids'=>$group[1]],['class'=>'btn btn-primary']);
        echo ' ';
    }
    ?>

</div>