<?php
/* @var $this yii\web\View */    
$this->title = 'Бланки';
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
            <p>Приказ 302н, прил. 1. <?=$factors1_str?>.</p>
            <h4 class="h4-blank text-center">Объем профилактического медицинского осмотра</h4>
            <div class="percent40 div-in-line">
                <?=$specialists_str?>
            </div>
            <div class=" percent60 div-in-line">
                <?=$procedures_str?>
            </div>
        </div>
        <div class="h2t percent50 div-in-line">
            <h4 class="h4-blank text-center">Противопоказания</h4>
            <div class="redline">- <?=$againsts_str?></div>
        </div>
    </div>
    
    <div class="percent50 h2t div-in-line">
        <p class="text-center">ООО Медицинский центр Аксион
        <br>(ООО "Медицинский центр "Аксион")</p>
        <div>Код ОГРН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1041800278706</div>
        <h6 class="text-center">ПАСПОРТ ЗДОРОВЬЯ РАБОТНИКА № __________________ "____" ____________________20____г.</h6>
        1. Фамилия <b><?=$model->surname?></b>
        <div class="percent50 div-in-line">
            Имя <b><?=$model->name?></b>
        </div>
        <div class="percent50 div-in-line">
            Отчество <b><?=$model->patron?></b>
        </div>
        <div class="percent50 div-in-line">
            2. Пол <b><?=$model->sex?></b>
        </div>
        <div class="percent50 div-in-line">
            3. Дата рождения <u><b><?=$model->birthday?></b></u>
        </div>
        <div class="percent33 div-in-line">
            4. Паспорт: серия <b><?=$model->passport_series?></b>
        </div>
        <div class="percent33 div-in-line">
            номер <b><?=$model->passport_number?></b>
        </div>
        <div class="percent33 div-in-line">
            дата выдачи <u><b><?=$model->passport_given_date?></b></u>
        </div>
        <div class="percent100">
            кем выдан: <b><?=$model->passport_given_who?></b>
        </div>
        <div class="percent100">
            5. Адрес регистрации по месту жительства (пребывания)
            <p><b><?=$model->addresse_reg?></b></p>
        </div>
        <div class="percent100">
            <div class="percent50 div-right">
                телефон <b><?=$model->phone?></b>
            </div>
        </div>
        <div class="percent40 div-in-line">
            6. Номер страхового полиса ОМС
        </div>
        <div class="percent60 div-in-line framed">
            <?=$model->insurance_number?>
        </div>
        <div class="percent100">
            7. Место работы: <b><?=$model->firm?> <?=$model->dep?></b>
        </div>
        <div class="percent100">
            7.1. Вид экономической деятельности:
        </div>
        <div class="percent100">
            7.2. Полное наименование организации (предприятия):
        </div>
        <div class="percent100">
            7.3. Форма собственности организации (предприятия):
        </div>
        <div class="percent100">
            7.4. Наименование структурного поодразделения (цех, участок, отдел, отделение и т.д.):
        </div>
        <div class="percent100">
            8. Профессия (должность) (в настоящее время): <b><?=$model->spec?></b>
        </div>
        <div class="percent100">
            9. Условия труда (в настоящее время):
        </div>
        <table class="common-table">
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
                ?>
            </tbody>
        </table>
        <div class="percent100">
            10. Профессиональный маршрут до начала работ в данном виде работ (для предварительного медицинского осмотра (обследования):
        </div>
        <table class="common-table">
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
        <div class="percent100">
            <div class="percent40 div-in-line">
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
            </div>
            <div class="percent40 div-in-line div-right">
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
            </div>
        </div>
        <div class="percent100">
            12. Даты проведения периодических медицинских осмотров (обследований):
        </div>
        <div class="percent100">
            <div class="percent40 div-in-line">
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
            </div>
            <div class="percent40 div-in-line div-right">
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
                <div class="percent100">"____"________________20____г.</div>
            </div>
        </div>
        <div class="percent100">
            13. Медицинская организация, к которой прикреплен работник для постоянного наблюдения (название, юридический адрес):
        </div>
    </div>
    <div class="percent50 div-in-line h2t redline">
        <div class="percent100">
            14. План периодического медицинского осмотра (обследования):
        </div>
        <table class="common-table">
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
        <div class="percent100">
            Результаты лабораторных и функциональных исследований:
        </div>
        <table class="common-table">
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
        <div>Согласно результатам проведенного предварительного (периодического) медицинского обследования: не имеет/имеет медицинские противопоказания к работе с вредными и/или опасными веществами производственными факторами, заключение не дано</div>
        <div class="text-down text-center undertext">(нужное подчеркнуть)</div>
        <div>Председатель врачебной комиссии: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
        <div class="percent40 div-in-line div-right undertext">(Ф.И.О.)</div>    
        <div class="percent20 div-in-line div-right undertext">(подпись)</div>
        <p>М.П.</p>
    </div>
    
    <div class="h2t to-cut-right percent50 div-in-line">
        <h4 class="h4-blank text-center">ООО Медицинский центр Аксион
        <br> (ООО "Медицинский центр "Аксион")</h4>
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
        <h4 class="text-left">7. Вредный производственный фактор, наименование вида работы.</h4>
        <p class="h4"><b>Приказ 302н, прил. 1.:</b> <?=$factors1_codes_str?></p>
        <p class="h4"><b>Приказ 302н, прил. 2.:</b> <?=$factors2_codes_str?></p>
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
        <h4 class="text-left">Вредный производственный фактор, наименование вида работы.</h4>
        <p class="h4"><b>Приказ 302н, прил. 1.:</b> <?=$factors1_codes_str?></p>
        <p class="h4"><b>Приказ 302н, прил. 2.:</b> <?=$factors2_codes_str?></p>
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
    
    <div class="percent50 redline">
        <div class="h2w to-cut-right">
            <div class="percent50 div-in-line">
                <div class="undertext">Периодический осмотр</div>
                <p>Орг.: <b><?=$model->firm?> <?=$model->dep?></b></p>
                <div class="redline">
                    Министерство здравоохранения
                    <div class="font80percent">ООО "Медицинский центр "Аксион"</div>
                </div>
            </div>
            <div class="percent50 div-in-line text-right">
                Медицинская документация <br>
                Форма № 45 <br>
                Утверждена Минздравом СССР <br>
                № 1338 1953 г.
            </div>
            <div class="text-center">КЛИНИЧЕСКИЙ АНАЛИЗ КРОВИ №______</div>
            <div class="redline"> Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b> </div>
            <div class="percent33 div-in-line">В учреждение <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
            <div class="percent33 div-in-line">Корпус <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
            <div class="percent33 div-in-line">Отделение <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
            <div class="percent100">Для врача <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> </div>
            <table class="common-table text-center percent100 bottomspace">
                <thead>
                    <tr>
                        <td rowspan="2">Эритроциты</td>
                        <td rowspan="2">Гемоглобин</td>
                        <td rowspan="2">Цветной показатель</td>
                        <td colspan="2">Толстая капля</td>
                        <td rowspan="2">Ретикулоциты</td>
                        <td rowspan="2">Тромбоциты</td>
                        <td rowspan="2">Паразиты</td>
                    </tr>
                    <tr>
                        <td class="font80percent">полихром</td>
                        <td class="font80percent">базоф.</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font80percent">В 1 куб. мм 4,5 - 5 мм</td>
                        <td class="font80percent">80 - 100</td>
                        <td class="font80percent">0,8 - 1,0</td>
                        <td class="font80percent">+</td>
                        <td class="font80percent">-</td>
                        <td class="font80percent">0,6 - 0,8</td>
                        <td class="font80percent">250 - 400 тыс.</td>
                        <td></td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                </tbody>
            </table>
            <table class="common-table text-center percent100 bottomspace">
                <thead>
                    <tr>
                        <td rowspan="2">Лейкоциты</td>
                        <td rowspan="2">Базофилы</td>
                        <td rowspan="2">Эозинофилы</td>
                        <td colspan="4">Нейтрофилы</td>
                        <td rowspan="2">Лимфоциты</td>
                        <td rowspan="2">Моноциты</td>
                        <td rowspan="2">Индекс сдвига</td>
                    </tr>
                    <tr>
                        <td class="font80percent">миелоц</td>
                        <td class="font80percent">юные</td>
                        <td class="font80percent">палоч.</td>
                        <td class="font80percent">сегмент</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font80percent">Норма 6-8 тыс</td>
                        <td class="font80percent">0-0,5%</td>
                        <td class="font80percent">3-4%</td>
                        <td class="font80percent">-</td>
                        <td class="font80percent">-</td>
                        <td class="font80percent">%</td>
                        <td class="font80percent">63-67%</td>
                        <td class="font80percent">23-30%</td>
                        <td class="font80percent">6-8%</td>
                        <td class="font80percent">0,6</td>
                    </tr>
                    <tr>
                        <td class="font80percent">Норма в абсол. числах</td>
                        <td class="font80percent">30-40</td>
                        <td class="font80percent">180-200</td>
                        <td class="font80percent">-</td>
                        <td class="font80percent">-</td>
                        <td class="font80percent">240-320</td>
                        <td class="font80percent">4020-5040</td>
                        <td class="font80percent">1800-2400</td>
                        <td class="font80percent">360-640</td>
                        <td></td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                </tbody>
            </table>
            <table class="common-table percent100 text-center bottomspace">
                <thead>
                    <tr>
                        <td></td>
                        <td class="percent30"></td>
                        <td></td>
                        <td></td>
                        <td class="percent20"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Анизоцитоз</td>
                        <td rowspan="2"></td>
                        <td rowspan="2" class="font80percent">Зернистость эритроцитов</td>
                        <td class="font80percent">мин</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="font80percent">макс</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Пойкилоцитоз</td>
                        <td></td>
                        <td rowspan="3">Свертываемость крови</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Нормобласты</td>
                        <td></td>
                        <td class="font80percent">Начало</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Оседание эритроцитов</td>
                        <td></td>
                        <td class="font80percent">Конец</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="common-table percent100 bottomspace">
                <head>
                    <tr>
                        <td>Анализ производил</td>
                        <td class="percent50"></td>
                        <td>Дата</td>
                        <td class="percent20"></td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="h2w to-cut-right">
            <p class="font70percent"><?=$model->firm?> <?=$model->dep?></p>
            <div class="percent100">
                <div class="percent75 text-right div-in-line font70percent">
                    <b>Талон амбулаторного пациента №____________
                    <br> Месяц и год____________</b>
                </div>
                <div class="percent25 text-right div-in-line font50percent">
                    <b>Форма №025/у-12<br>
                    Модификация приложения 3<br>
                    к приказу №255<br>
                    МЗ и СР РФ от 22.11.2004г.</b>
                </div>
            </div>
            <p>&nbsp;</p>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent30"></td>
                        <td class="percent10"></td>
                        <td class="percent30"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font70percent">Ф.И.О.</td>
                        <td class="font70percent bottomline text-center" colspan="3"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></td>
                        <td class="font70percent">Паспорт</td>
                        <td class="font70percent bottomline text-center"><b><?=$model->passport_series?> № <?=$model->passport_number?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">СМО</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">Док. ОМС</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">СНИЛС</td>
                        <td class="font70percent bottomline text-center"><b><?=$model->snils?></b></td>
                    </tr>
                </tbody>
            </table>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="font70percent percent15">Код ЛПУ</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15">Район</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15">Иногородний <br> (0-нет, 1-да)</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15 ">Код места работы <br>(код ДДУ)</td>
                        <td class="font70percent percent10 bottomline "><b></b></td>
                    </tr>
                </thead>
            </table>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                        <td class="percent10"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font70percent" colspan="3">Дата рождения, день, месяц, год</td>
                        <td class="font70percent bottomline text-center" colspan="3"><b><?=$model->birthday?></b></td>
                        <td class="font70percent">Пол <br> (1-м.,2-ж.)</td>
                        <td class="font70percent bottomline text-center"><b> <?php echo $model->sex=='М'?1:2; ?></b></td>
                        <td class="font70percent">Контингент</td>
                        <td class="font70percent bottomline"><b></b></td>
                    </tr>
                    <tr>
                        <td class="font70percent">Участок</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">Участок <br> гинекол.</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">Участок <br> цехов.</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">Житель <br> (1-гор.,2-сел.)</td>
                        <td class="font70percent bottomline"><b></b></td>
                        <td class="font70percent">Вид оплаты</td>
                        <td class="font70percent bottomline"><b></b></td>
                    </tr>
                </tbody>
            </table>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="font70percent percent15">Код <br> врача</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15">Код <br> мед.сестры</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15">Вид <br> отделения</td>
                        <td class="font70percent percent10 bottomline"><b></b></td>
                        <td class="font70percent percent15 ">Цель <br>посещения</td>
                        <td class="font70percent percent10 bottomline "><b></b></td>
                    </tr>
                </thead>
            </table>
            <p>&nbsp;</p>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent15"></td>
                        <td class="percent40"></td>
                        <td class="percent15"></td>
                        <td class="percent10"></td>                        
                        <td class="percent20"></td>
                        <td class="percent10"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font70percent">День приема</td>
                        <td class="font70percent bottomline"></td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Код посещения</td>
                        <td class="font70percent bottomline"></td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="font70percent">Вид мед.помощи</td>
                        <td class="font70percent bottomline"></td>
                        <td class="font70percent">Уровень оказания <br> мед. помощи</td>
                        <td class="font70percent bottomline"></td>                        
                        <td class="font70percent">Закон случая <br> полик. обсл.</td>
                        <td class="font70percent bottomline"></td>
                    </tr>
                </tbody>
            </table>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent15"></td>
                        <td class="percent40"></td>
                        <td class="percent15"></td>
                        <td class="percent10"></td>                        
                        <td class="percent20"></td>
                        <td class="percent10"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Результат обращ-я</td>
                        <td class="font70percent bottomline"></td>
                        <td class="font70percent">УКЛ</td>
                        <td class="font70percent bottomline"></td>                        
                        <td class="font70percent">Дата нач. заболев.</td>
                        <td class="font70percent bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Диагноз основной</td>
                        <td class="font70percent bottomline text-center" colspan="5">1  2  3</td>
                    </tr>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Диагноз сопут. 1</td>
                        <td class="font70percent bottomline text-center" colspan="5">1  2  3</td>
                    </tr>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Диагноз сопут. 2</td>
                        <td class="font70percent bottomline text-center" colspan="5">1  2  3</td>
                    </tr>
                    <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="font70percent">Диагноз сопут. 3</td>
                        <td class="font70percent bottomline text-center" colspan="5">1  2  3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>