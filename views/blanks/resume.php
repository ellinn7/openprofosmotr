<?php
/* @var $this yii\web\View */    
$this->title = 'Заключение периодического медицинского осмотра';
?>

<div class="blank percent100">
    <div class="h2t to-cut-right percent50 div-in-line">
        <p class="text-center">ООО Медицинский центр Аксион
        <br> (ООО "Медицинский центр "Аксион")</p>
        <p>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</p>
        <p class="text-center"><b>Заключение периодического медицинского осмотра</b></p>
        <p class="text-center">от __________________________</p>
        <p>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></p>
        <div class="percent50 div-in-line">
            <p>2. Пол: <b><?=$model->sex?></b></p>
        </div>
        <div class="percent50 div-in-line">
            <p>3. Дата рождения <b><?=$model->birthday?></b></p>
        </div>
        <p>4. Место работы: <b><?=$model->firm?> <?=$model->dep?></b></p>
        <p>5. Цех, участок:</p>
        <p>6. Профессия (в настоящее время): <b><?=$model->spec?></b></p>
        <p>7. Вредный производственный фактор, наименование вида работы.</p>
        <p><b>Приказ 302н, прил. 1.:</b> <?=$factors1_codes_str?></p>
        <p><b>Приказ 302н, прил. 2.:</b> <?=$factors2_codes_str?></p>
        <p>8. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="percent100">
            <div class="percent40 div-in-line">
                <p>Председатель врачебной комиссии</p>
            </div>
            <div class="percent40 div-in-line">
                <p>_______________________________</p>
            </div>
        </div>
    </div>
    <div class="percent50 div-in-line redline">
        <h4 class="h4-blank text-center">ООО Медицинский центр Аксион
        <br> (ООО "Медицинский центр "Аксион")</h4>
        <p>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</p>
        <p class="text-center"><b>Заключение периодического медицинского осмотра</b></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>1. Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></p>
        <p>2. Место работы</p>
        <p>2.1. Организация (предприятия): <b><?=$model->firm?> <?=$model->dep?></b></p>
        <p>2.2. Цех, участок:</p>
        <p>3. Профессия (в настоящее время): <b><?=$model->spec?></b></p>
        <p>Вредный производственный фактор, наименование вида работы.</p>
        <p><b>Приказ 302н, прил. 1.:</b> <?=$factors1_codes_str?></p>
        <p><b>Приказ 302н, прил. 2.:</b> <?=$factors2_codes_str?></p>
        <p>4. Согласно результатам проведенного периодического медицинского осмотра (обследования): <b>имеет/ не имеет</b> медицинских противопоказаний к работе с вредными и/или опасными веществами и производственными факторами, <b>заключение не дано</b> (нужное подчеркнуть).</p>
        <div class="percent100">
            <div class="percent40 div-in-line">
                <p>Председатель комиссии М.П.</p>
            </div>
            <div class="percent40 div-in-line">
                <p>_______________________________</p>
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