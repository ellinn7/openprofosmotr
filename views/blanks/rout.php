<?php
/* @var $this yii\web\View */    
$this->title = 'Проф.маршрут';
?>
<div class="blank percent100">
    <div class="h2t">
        <div class="h2t to-cut-right div-in-line percent50">
            <p>Орг.:<b><?=$model->firm?></b></p>
            <h4 class="h4-blank text-center">Проф.маршрут</h4>
            <p><b><?=$model->surname.' '.$model->name.' '.$model->patron?></b></p>
            <div class="percent50 div-in-line">
                <p class="h4-blank">Спец-ть: <b><?=$model->spec?></b></p>
                <p class="h4-blank">Отд.: <b><?=$model->dep?></b></p>
            </div>
            <div class="percent50 div-in-line">
                <p class="h4-blank">Дата рожд.:<b><?=$model->birthday?></b></p>
                <p class="h4-blank">Стаж.:<b><?=$model->seniority?></b></p>
            </div>
            <h4 class="h4-blank text-center">Коды вредных производственных факторов и работ (пр. №302н от 12.04.2011)</h4>
            <p>Приказ 302н, прил. 1. <?=$model->factors1?></p>
            <h4 class="h4-blank text-center">Объем профилактического медицинского осмотра</h4>
        </div>
        <div class="h2t percent50 div-in-line">
            <h4 class="h4-blank text-center">Противопоказания</h4>
            <p></p>
        </div>
    </div>
</div>