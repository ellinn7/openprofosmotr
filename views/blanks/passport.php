<columns column-count="2" vAlign="J" column-gap="0.1" />
<div class="blank percent100">
    <p class="text-center">ООО Медицинский центр Аксион
    <br>(ООО "Медицинский центр "Аксион")</p>
    <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
    <h6 class="text-center">ПАСПОРТ ЗДОРОВЬЯ РАБОТНИКА № __________________ "____" ____________________20____г.</h6>
    1. Фамилия <b><?=$model->surname?></b>
    
    <table class="percent100 bottomspace">
        <thead>
            <tr>
                <td class="percent50">Имя <b><?=$model->name?></b></td>
                <td class="percent50">Отчество <b><?=$model->patron?></b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2. Пол <b><?=$model->sex?></b></td>
                <td>3. Дата рождения <u><b><?=$model->birthday?></b></u></td>
            </tr>
        </tbody>
    </table>
        
    <table class="percent100">
        <thead>
            <tr>
                <td class="percent33">4. Паспорт: серия <b><?=$model->passport_series?></b></td>
                <td class="percent33">номер <b><?=$model->passport_number?></b></td>
                <td class="percent33">дата выдачи <u><b><?=$model->passport_given_date?></b></u></td>
            </tr>
        </thead>
    </table>
    
    <div>
        кем выдан: <b><?=$model->passport_given_who?></b>
    </div>
    
    <div>
        5. Адрес регистрации по месту жительства (пребывания)
        <b><?=$model->addresse_reg?></b> 
        <br> телефон <b><?=$model->phone?></b>
    </div>
    
    <table class="percent100">
        <thead>
            <tr>
                <td class="percent40">6. Номер страхового полиса ОМС</td>
                <td class="percent60 framed"><?=$model->insurance_number?></td>
            </tr>
        </thead>
    </table>
    
    
    <div>
        7. Место работы: <b><?=$model->firm?> <?=$model->dep?></b>
    </div>
    
    <div>
        7.1. Вид экономической деятельности:
    </div>
    
    <div>
        7.2. Полное наименование организации (предприятия):
    </div>
    
    <div>
        7.3. Форма собственности организации (предприятия):
    </div>
    
    <div>
        7.4. Наименование структурного поодразделения (цех, участок, отдел, отделение и т.д.):
    </div>
    
    <div>
        8. Профессия (должность) (в настоящее время): <b><?=$model->spec?></b>
    </div>
    
    <div>
        9. Условия труда (в настоящее время):
    </div>
    
    <table class="common-table percent100">
        <thead>
            <tr>
                <td class="percent85">Наименование производственного фактора, виды работ с указанием пункта</td>
                <td class="percent15">Стаж работы с фактором</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($factors1_arr as $factor) {
                echo "<tr><td>$factor</td><td></td></tr>";
            }
            foreach ($factors2_arr as $factor) {
                echo "<tr><td>$factor</td><td></td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    <div>
        10. Профессиональный маршрут до начала работ в данном виде работ (для предварительного медицинского осмотра (обследования):
    </div>
    
    <table class="common-table percent100">
        <thead>
            <tr>
                <td class="percent20">Начало и окончание работы</td>
                <td class="percent30">Организация (предприятие)</td>
                <td class="percent25">Наим. работы с указанием пункта</td>
                <td class="percent25">Наим-е фактора с указанием пункта</td>
            </tr>
        </thead>
        <tbody>
            <tr><td>&nbsp;</td><td></td><td></td><td></td></tr>
            <tr><td>&nbsp;</td><td></td><td></td><td></td></tr>
            <tr><td>&nbsp;</td><td></td><td></td><td></td></tr>
        </tbody>
    </table>
    
    <div class="percent100">
        11. Даты проведения предварительных (при поступлении на работу) медицинских осмотров (обследований):
    </div>
    
    <table class="percent100">
        <thead>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
        </tbody>
    </table>
    
    <div class="percent100">
        12. Даты проведения периодических медицинских осмотров (обследований):
    </div>
    
    <table class="percent100">
        <thead>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
            <tr>
                <td class="percent50">"____"________________20____г.</td>
                <td class="percent50 text-right">"____"________________20____г.</td>
            </tr>
        </tbody>
    </table>
    
    <div>
        13. Медицинская организация, к которой прикреплен работник для постоянного наблюдения (название, юридический адрес):
    </div>
    
    <div>
        14. План периодического медицинского осмотра (обследования):
    </div>
    
    <table class="common-table percent100">
        <thead>
            <tr>
                <td class="percent10">№№ п/п</td>
                <td class="percent50">Осмотры (обследования)</td>
                <td class="percent20">Дата выполнения</td>
                <td class="percent20">Заключение по результатам</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $num=0;
            foreach ($specialists_arr as $specialist) {
                echo "<tr><td>".++$num."</td><td>$specialist</td><td></td><td></td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    <div>
        Результаты лабораторных и функциональных исследований:
    </div>
    
    <table class="common-table percent100">
        <thead>
            <tr>
                <td class="percent7">№№ п/п</td>
                <td>Осмотры (обследования)</td>
                <td class="percent15">Дата выполнения</td>
                <td class="percent25">Заключение по результатам</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $num=0;
            foreach ($procedures_arr as $procedure) {
                echo "<tr><td>".++$num."</td><td>$procedure</td><td></td><td></td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    <h6 class="text-center">ЗАКЛЮЧЕНИЕ ПРЕДВАРИТЕЛЬНОГО (ПЕРИОДИЧЕСКОГО) МЕДИЦИНСКОГО ОСМОТРА</h6>
    
    <div class="text-justify">Согласно результатам проведенного предварительного (периодического) медицинского обследования: не имеет/имеет медицинские противопоказания к работе с вредными и/или опасными веществами производственными факторами, заключение не дано</div>
    <div class="text-down text-center undertext">(нужное подчеркнуть)</div>
    
    <table class="percent100">
        <thead>
            <tr>
                <td class="percent40"></td>
                <td class="percent20"></td>
                <td class="percent20"></td>
                <td class="percent20"></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Председатель врачебной комиссии:</td>
                <td class="bottomline text-right">/</td>
                <td class="bottomline"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td class="undertext text-right">(Ф.И.О.)</td>
                <td class="undertext">(подпись)</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
    <p>М.П.</p>
</div>
<columnbreak>
<columns  column-count="1"/>