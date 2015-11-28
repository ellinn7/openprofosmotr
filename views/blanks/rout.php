<div class="blank h2t">
    <div class="h2t to-cut-right div-in-line percent50">
        <div class="div-in-line percent50">Орг.:<b><?=$model->firm?></b></div>
        <div class="div-in-line div-right percent50"><?=$firm?></div>
        <h4 class="text-center">Проф.маршрут</h4>
        <div class="h4-blank"><b><?=$model->surname.' '.$model->name.' '.$model->patron?></b></div>
        <div class="percent50 div-in-line">
            <div>Спец-ть: <b><?=$model->spec?></b></div>
            <div>Отд.: <b><?=$model->dep?></b></div>
        </div>
        <div class="percent50 div-in-line">
            <div>Дата рожд.:<b><?=$model->birthday?></b></div>
            <div>Стаж.:<b><?=$model->seniority?></b></div>
        </div>
        <h4 class="text-center">Коды вредных производственных факторов и работ (пр. №302н от 12.04.2011)</h4>        
        <p>Приказ 302н, <?=$factors_str?>.</p>
        <h4 class="text-center">Объем профилактического медицинского осмотра</h4>
        <div class="percent40 div-in-line">
            <?=$specialists_str?>
        </div>
        <div class="percent60 div-in-line">
            <?=$procedures_str?>
        </div>
    </div>
    <div class="h2t percent50 div-in-line div-right">
        <h4 class="text-center">Противопоказания</h4>
        <div class="redline font70percent">- <?=$againsts_str?></div>
    </div>
</div>