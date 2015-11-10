<?php
/* @var $this yii\web\View */
?>
<div class="blank percent50 redline">
    
    <div class="h2w to-cut-right to-cut-bottom">
        <div class="percent50 div-in-line">
            <div class="undertext">Периодический осмотр</div>
            <p>Орг.: <b><?=$model->firm?> <?=$model->dep?></b></p>
            <div class="redline font80percent">
                Министерство здравоохранения
                <br><?=$firm?>
            </div>
        </div>
        <div class="percent50 div-in-line text-right font50percent">
            Медицинская документация <br>
            Форма № 45 <br>
            Утверждена Минздравом СССР <br>
            № 1338 1953 г.
        </div>
        <div class="text-center">КЛИНИЧЕСКИЙ АНАЛИЗ КРОВИ №______</div>
        <div class="redline"> Ф.И.О.: <b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b> </div>
        <div class="percent100">
            <div class="percent15 div-in-line">В учреждение</div>
            <div class="percent25 div-in-line bottomline">&nbsp;</div>
            <div class="percent10 div-in-line">Корпус</div>
            <div class="percent15 div-in-line bottomline">&nbsp;</div>
            <div class="percent15 div-in-line">Отделение</div>
            <div class="percent20 div-in-line bottomline">&nbsp;</div>
        </div>
        <div class="percent100">Для врача</div>
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
                <tr><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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
                <tr><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
        </table>
        <table class="common-table percent100 text-center bottomspace">
            <thead>
                <tr>
                    <td rowspan="2">Анизоцитоз</td>
                    <td rowspan="2" class="percent30"></td>
                    <td rowspan="2" class="font80percent">Зернистость эритроцитов</td>
                    <td class="font80percent">мин</td>
                    <td class="percent20"></td>
                </tr>
                <tr>
                    <td class="font80percent">макс</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
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
        <div class="percent100">
            <div class="percent30 div-in-line">Анализ производил</div>
            <div class="percent33 div-in-line bottomline">&nbsp;</div>
            <div class="percent15 div-in-line">Дата</div>
            <div class="percent20 div-in-line bottomline">&nbsp;</div>
        </div>
    </div>
    
    <?php if($talon) {?>
    
    <div class="h2w to-cut-right">
    
        <div class="div-in-line font70percent percent50"><?=$model->firm?> <?=$model->dep?></div>
        <div class="div-in-line div-right percent50 font70percent"><?=$firm?></div>
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
        
        <div class="percent100">
            <div class="percent10 div-in-line font70percent">ФИО</div>
            <div class="percent50 div-in-line font70percent bottomline text-center"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
            <div class="percent10 div-in-line font70percent">Паспорт</div>
            <div class="percent30 div-in-line font70percent bottomline text-center"><b><?=$model->passport_series?> № <?=$model->passport_number?></b></div>
        </div>
        
        <div class="percent100">
            <div class="percent10 div-in-line font70percent">СМО</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Док. ОМС</div>
            <div class="percent30 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent10 div-in-line font70percent">СНИЛС</div>
            <div class="percent30 div-in-line font70percent bottomline text-center"><b><?=$model->snils?></b></div>
        </div>
        
        <div class="percent100">
            <div class="percent10 div-in-line font70percent">Код ЛПУ</div>
            <div class="percent15 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Район</div>
            <div class="percent15 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Иногородний <br> (0-нет, 1-да)</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Код места работы <br>(код ДДУ)</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent30 div-in-line font70percent">Дата рождения, день, месяц, год</div>
            <div class="percent30 div-in-line font70percent bottomline text-center"><b><?=$model->birthday?></b></div>
            <div class="percent10 div-in-line font70percent">Пол (1-м.,2-ж.)</div>
            <div class="percent10 div-in-line font70percent bottomline text-center"><b> <?php echo $model->sex=='М'?1:2; ?></b></div>
            <div class="percent10 div-in-line font70percent">Контингент</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent10 div-in-line font70percent">Участок</div>
            <div class="percent7 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Участок <br> гинекол.</div>
            <div class="percent7 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Участок <br> цехов.</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Житель <br> (1-гор.,2-сел.)</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent10 div-in-line font70percent">Вид оплаты</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">Код <br> врача</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;<br>&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Код <br> мед.сестры</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Вид <br> отделения</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Цель <br>посещения</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">День приема</div>
            <div class="percent40 div-in-line font70percent bottomline">&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">Код посещения</div>
            <div class="percent40 div-in-line font70percent bottomline">&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">Вид мед.помощи</div>
            <div class="percent30 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent15 div-in-line font70percent">Уровень оказания <br> мед. помощи</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
            <div class="percent20 div-in-line font70percent">Закон случая <br> полик. обсл.</div>
            <div class="percent10 div-in-line bottomline font70percent"><br>&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">Результат обращ-я</div>
            <div class="percent30 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent15 div-in-line font70percent">УКЛ</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
            <div class="percent20 div-in-line font70percent">Дата нач. заболев.</div>
            <div class="percent10 div-in-line bottomline font70percent">&nbsp;</div>
        </div>
        
        <div class="percent100">
            <div class="percent15 div-in-line font70percent">Диагноз основной</div>
            <div class="percent85 div-in-line font70percent bottomline text-center">1  2  3</div>
            <div class="percent15 div-in-line font70percent">Диагноз сопут. 1</div>
            <div class="percent85 div-in-line font70percent bottomline text-center">1  2  3</div>
            <div class="percent15 div-in-line font70percent">Диагноз сопут. 2</div>
            <div class="percent85 div-in-line font70percent bottomline text-center">1  2  3</div>
            <div class="percent15 div-in-line font70percent">Диагноз сопут. 3</div>
            <div class="percent85 div-in-line font70percent bottomline text-center">1  2  3</div>
        </div>
    </div>
    <?php } ?>
</div>