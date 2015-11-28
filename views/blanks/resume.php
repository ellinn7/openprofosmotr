<?php
/* @var $this yii\web\View */    
$this->title = 'Заключение периодического медицинского осмотра';
?>

<div class="blank">
    <div class="h2t to-cut-right percent50 div-in-line">
        <h4 class="text-center"><?=$firm?></h4>
        <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
        <h4 class="text-center">Заключение периодического медицинского осмотра</h4>
        <p class="text-center">от __________________________</p>
        <p>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></p>
        <p class="percent50 div-in-line">2. Пол: <b><?=$model->sex?></b></p>
        <p class="percent50 div-in-line">3. Дата рождения <b><?=$model->birthday?></b></p>
        <p>4. Место работы: <b><?=$model->firm?> <?=$model->dep?></b></p>
        <p>5. Цех, участок:</p>
        <p>6. Профессия (в настоящее время): <b><?=$model->spec?></b></p>
        <p>7. Вредный производственный фактор, наименование вида работы.</p>
        <p><b>Приказ 302н, прил. 1.:</b> <?=$factors1_str?></p>
        <p><b>Приказ 302н, прил. 2.:</b> <?=$factors2_str?></p>
        <p>8. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</p>
        <br><br><br>
        <div class="percent100">
            <div class="percent40 div-in-line">
                Председатель врачебной комиссии М.П.
            </div>
            <div class="percent40 div-in-line">
                _______________________________
            </div>
        </div>
    </div>
    <div class="percent50 div-in-line div-right redline">
        <h4 class="text-center"><?=$firm?></h4>
        <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
        <h4 class="text-center">Заключение периодического медицинского осмотра</h4>
        <p>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></p>
        <p>2. Место работы</p>
        <p>2.1. Организация (предприятия): <b><?=$model->firm?> <?=$model->dep?></b></p>
        <p>2.2. Цех, участок:</p>
        <p>3. Профессия (в настоящее время): <b><?=$model->spec?></b></p>
        <p>Вредный производственный фактор, наименование вида работы.</p>
        <p><b>Приказ 302н, прил. 1.:</b> <?=$factors1_str?></p>
        <p><b>Приказ 302н, прил. 2.:</b> <?=$factors2_str?></p>
        <p>4. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</p>
        <br><br><br>
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