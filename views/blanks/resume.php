<?php
/* @var $this yii\web\View */    
$this->title = 'Заключение периодического медицинского осмотра';
?>

<div class="blank percent100">
    <div class="h2t to-cut-right percent50 div-in-line">
        <div class="text-center">ООО Медицинский центр Аксион
        <br> (ООО "Медицинский центр "Аксион")</div>
        <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
        <div class="text-center"><b>Заключение периодического медицинского осмотра</b></div>
        <div class="text-center">от __________________________</div>
        <div>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent50 div-in-line">2. Пол: <b><?=$model->sex?></b></div>
        <div class="percent50 div-in-line">3. Дата рождения <b><?=$model->birthday?></b></div>
        <div>4. Место работы: <b><?=$model->firm?> <?=$model->dep?></b></div>
        <div>5. Цех, участок:</div>
        <div>6. Профессия (в настоящее время): <b><?=$model->spec?></b></div>
        <div>7. Вредный производственный фактор, наименование вида работы.</div>
        <div><b>Приказ 302н, прил. 1.:</b> <?=$factors1_str?></div>
        <div><b>Приказ 302н, прил. 2.:</b> <?=$factors2_str?></div>
        <div>8. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</div>
        <div class="percent100">
            <div class="percent40 div-in-line">
                Председатель врачебной комиссии
            </div>
            <div class="percent40 div-in-line">
                _______________________________
            </div>
        </div>
    </div>
    <div class="percent50 div-in-line redline">
        <h4 class="h4-blank text-center">ООО Медицинский центр Аксион
        <br> (ООО "Медицинский центр "Аксион")</h4>
        <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
        <div class="text-center"><b>Заключение периодического медицинского осмотра</b></div>
        <div>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div>2. Место работы</div>
        <div>2.1. Организация (предприятия): <b><?=$model->firm?> <?=$model->dep?></b></div>
        <div>2.2. Цех, участок:</div>
        <div>3. Профессия (в настоящее время): <b><?=$model->spec?></b></div>
        <div>Вредный производственный фактор, наименование вида работы.</div>
        <div><b>Приказ 302н, прил. 1.:</b> <?=$factors1_str?></div>
        <div><b>Приказ 302н, прил. 2.:</b> <?=$factors2_str?></div>
        <div>4. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</div>
        <div class="percent100">
            <div class="percent40 div-in-line">
                Председатель комиссии М.П.
            </div>
            <div class="percent40 div-in-line">
                _______________________________
            </div>
        </div>
        <table class="percent100">
            <thead>
                <tr>
                    <td class="percent50"></td>
                    <td class="percent50"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td class="text-right">"____"________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=date('Y')?> г.</td>
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr>
                    <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                    <td class="text-right">"____"________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=date('Y')?> г.</td>
                </tr>
            </tbody>
        </table>
        <div class="percent50">
            <div class="percent50 undertext div-in-line">(подпись работника <br> освидетельствуемого)</div>
            <div class="percent50 undertext div-in-line">Ф.И.О.</div>
        </div>
    </div>
</div>