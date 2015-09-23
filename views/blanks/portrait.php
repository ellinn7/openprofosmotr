<?php
/* @var $this yii\web\View */    
$this->title = 'Периодический (предварительный) медицинский осмотр и Согласие на обработку персональных данных';
?>
<div class="blank percent100">
    <div class="h2w to-cut-bottom">
        <div class="percent75 div-in-line">
            <h4 class="h4-blank text-center">ООО Медицинский центр Аксион
            <br>(ООО "Медицинский центр "Аксион")</h4>
        </div>
        <div class="percent25 div-in-line text-right">
                Медицинская документация <br>
                Форма № 025/у <br>
                Утверждена <br>
                Минздравом СССР <br>
                № 1338 1987 г.
        </div>

        <h3 class="h3-blank text-center">Периодический (предварительный) медицинский осмотр</h3>
        <table class="percent100">
            <thead>
                <tr>
                    <td class="percent25"></td>
                    <td class="percent25"></td>
                    <td class="percent25"></td>
                    <td class="percent25"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="h3-blank">Фамилия</td>
                    <td class="h3-blank bottomline text-center" colspan="3"><b><?=$model->surname?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Имя</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->name?></b></td>
                    <td class="h3-blank text-center">Пол</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->sex?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Отчество</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->patron?></b></td>
                    <td class="h3-blank text-center">Инвалидность</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->disability?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Дата рождения</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->birthday?></b></td>
                    <td class="h3-blank text-center">СНИЛС</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->snils?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Паспорт</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->passport_series?> <?=$model->passport_number?></b></td>
                    <td class="h3-blank text-center">Полис ОМС</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->insurance_number?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Страховая компания</td>
                    <td class="h3-blank bottomline text-center" colspan="3"><b><?=$model->insurance_company?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Адрес</td>
                    <td class="h3-blank bottomline text-center" colspan="3"><b><?=$model->addresse_reg?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Место работы</td>
                    <td class="h3-blank bottomline text-center" colspan="3"><b><?=$model->firm?> <?=$model->dep?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Профессия/должноть</td>
                    <td class="h3-blank bottomline text-center" colspan="3"><b><?=$model->passport_series?></b></td>
                </tr>
                <tr>
                    <td class="h3-blank">Контактный телефон</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->phone?></b></td>
                    <td class="h3-blank text-center">Стаж</td>
                    <td class="h3-blank bottomline text-center"><b><?=$model->seniority?> мес.</b></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="h2w">
        <p>СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</p>
        <p>
            Я, нижеподписавшийся, <?=$model->surname?> <?=$model->name?> <?=$model->patron?>,<br>
            проживающий по адресу <?=$model->addresse_reg?>, пасп. <?=$model->passport_number?> <?=$model->passport_series?> выдан <?=$model->passport_given_date?>.
        </p>
        <p>В соответствии с требованиями статьи 9 Федерального закона от 27.07.2006г. "О персональных данных" №152-ФЗ, подтверждаю свое согласие на обработку ЛПУ ООО "Медицинский центр "Аксион" (далее - Оператор) моих персональных данных, включающих: фамилию, имя, отчество, пол, дату рождения, адрес места жительства, контактные телефоны, номер полиса ОМС (ДМС), СНИЛС, данные о состоянии моего здоровья, заболеваниях, случаях обращения за медицинской помощью в медико-профилактических целях, в целях установления медицинского диагноза и оказания медицинских услуг, а так же право на передачу такой информации третьим лицам при условии что их обработка осуществляется лицом, обязанным сохранять врачебную тайну.</p>
        <p>В процессе оказания Оператором мне медицинской помощи я предоставляю право медицинским работникам передавать мои персональные данные,  содержащие сведения, составляющие врачебную тайну, другим должностным лицам Оператора в интересах моего обследования и лечения.</p>
        <p>Предоставляю Оператору право осуществлять все действия с моими персональными данными, включая сбор, систематизацию, накопление, хранение, обновление, изменения, использование, передачу,обезличивание, блокирование, уничтожение. Оператор в праве обрабатывать мои персональные данные посредством внесения их в электронную базу данных, включение в списки (реестры) и отчетные формы, предусмотренные документами, регламентирующими предоставление отчетных данных  (документов) по ОМС (договорам ДМС).</p>
        <p>Оператор имеет право во исполнение своих обязательств по работе в системе ОМС (по договору ДМС) на обмен (прием и передачу) моими персональными данными со страховыми медицинскими организациями и территориальным фондом ОМС с использованием машинных носителей или по каналам связи, с соблюдением мер, обеспечивающих их защиту от не санкционированного доступа, при условии, что их прием и обработка будут осуществляться лицом, обязанным сохранять профессиональную тайн. Срок хранения моих персональных данных соответствует  сроку хранения первичных медицинских документов и составляет двадцать пять лет для стационара, пять лет - для поликлиники. Передача моих персональных данных иным лицам или иное из разглашение может осуществляться только с моего письменного согласия. Настоящее согласие дано мной <?=$model->surname?> <?=$model->name?> <?=$model->patron?> и действует бессрочно.</p>
        <p>Я оставляю за собой право отозвать согласие посредством составления соответствующего письменного  документа,который может быть направлен мной в адрес Оператора по почте заказным письмом с уведомлением о вручении, либо вручен лично под расписку представителю Оператора. В случае получения моего письменного заявления об отказе настоящего согласия на обработку персональны данных Оператор обязан прекратить из обработку в течение периода времени, необходимого для завершения взаиморасчетов по оплате оказанной мне до этого медицинской помощи.</p>
        <div class="percent20 div-in-line">Контактный телефон:</div>
        <div class="percent15 div-in-line bottomline">&nbsp;</div>
        <div class="percent40 div-in-line">Подпись субъекта персональных данных:</div>
        <div class="percent10 div-in-line"></div>
        <div class="percent5 div-in-line">Дата:</div>
    </div>
    
    <div class="percent50 div-in-line to-cut-right to-cut-bottom h2w">
        <div class="redline">
            <div class="undertext">Периодический осмотр</div>
            <p>Орг.:<b><?=$model->firm?> <?=$model->dep?></b></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p class="text-center">АНАЛИЗ КРОВИ</p>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent40"></td>
                        <td class="percent60"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Фамилия, И., О.</td>
                        <td><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></td>
                    </tr>
                    <tr>
                        <td>Отделение, палата:</td>
                        <td class="bottomline"><b></b></td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <table class="common-table percent100">
                <thead>
                    <tr>
                        <td>Показатель</td>
                        <td>Найдено</td>
                        <td>Норма</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Холестерин</td>
                        <td></td>
                        <td>до 5,7 ммоль/л</td>
                    </tr>
                    <tr>
                        <td>Сахар</td>
                        <td></td>
                        <td>до 5,8 ммоль/л</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="text-center">
                "____"_________________________<?= date('Y')?> г.
            </div>
            <div class="undertext text-center">
                дата взятия биоматериала
            </div>
            <div class="text-center">
                Подпись <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </div>
        </div>
    </div>
    <div class="percent50 div-in-line to-cut-bottom h2w">
        <div class="redline">
            <div class="undertext">Периодический осмотр</div>
            <p>Орг.:<b><?=$model->firm?> <?=$model->dep?></b></p>
            <div class="text-left div-in-line percent60">
                Министерство <br>
                Здравоохранения <br>
                <p class="font80percent">ООО "Медицинский центр "Аксион"</p>
            </div>
            <div class="text-right percent40 div-in-line font80percent">
                Медицинская документация <br>
                Форма № 210/у <br>
                Утверждена <br>
                Минздравом <br>
                №1030 04.10.80 г.
            </div>
            <div class="percent100">
                Лаборатория <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </div>
            <div class="text-center">АНАЛИЗ МОЧИ №______</div>
            <div class="text-center">
                "____"_________________________<?= date('Y')?> г.
            </div>
            <div class="undertext text-center">
                дата взятия биоматериала
            </div>
            <table class="percent100">
                <thead>
                    <tr>
                        <td class="percent25"></td>
                        <td class="percent10"></td>
                        <td class="percent20"></td>
                        <td class="percent20"></td>
                        <td class="percent5"></td>
                        <td class="percent20"></td>
                        <td class="percent5"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Фамилия, И.,О.</td>
                        <td colspan="4"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></td>
                        <td>Возраст</td>
                        <td class="bottomline"><?=$age?></td>
                    </tr>
                    <tr>
                        <td>Учреждение</td>
                        <td class="bottomline"></td>
                        <td>Отделение</td>
                        <td class="bottomline" colspan="2"></td>
                        <td>палата</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Участок</td>
                        <td class="bottomline"></td>
                        <td colspan="2">Медицинская карта №</td>
                        <td class="bottomline" colspan="3"></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">Физико-химические свойства</div>
            <table class="percent100 bottomspace">
                <thead>
                    <tr>
                        <td class="percent25"></td>
                        <td class="percent25"></td>
                        <td class="percent1"></td>
                        <td class="percent10"></td>
                        <td class="percent15"></td>
                        <td class="percent25"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Количество</td>
                        <td class="bottomline"></td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td>Цвет</td>
                        <td class="bottomline"></td>
                        <td></td>
                        <td colspan="3">Эпителий:</td>
                    </tr>
                    <tr>
                        <td>Прозрачность</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">плоский</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Относит. пл-ть</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">переходный</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Реакция</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">почечный</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Белок</td>
                        <td class="bottomline"></td>
                        <td></td>
                        <td colspan="2">Лейкоциты:</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Глюкоза</td>
                        <td class="bottomline"></td>
                        <td></td>
                        <td class="bottomline" colspan="3"></td>
                    </tr>
                    <tr>
                        <td>Кетоновые тела</td>
                        <td class="bottomline"></td>
                        <td></td>
                        <td colspan="3">Эритроциты:</td>
                    </tr>
                    <tr>
                        <td>Реакция на кровь</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">неизмененные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Билирубин</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">измененные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Уробилиноиды</td>
                        <td class="bottomline"></td>
                        <td></td>
                        <td colspan="3">Цилиндры:</td>
                    </tr>
                    <tr>
                        <td>Желчные кислоты</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">гиалиновые</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td>Индикан</td>
                        <td class="bottomline"></td>
                        <td colspan="3" class="text-right">зернистые</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">восковидные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2" class="text-right">эпителиальные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2" class="text-right">лейкоцитарные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2" class="text-right">эритроцитарные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">пигментные</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Слизь</td>
                        <td class="bottomline" colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td class="bottomline" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Соли:</td>
                        <td class="bottomline" colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Бактерии:</td>
                        <td class="bottomline" colspan="2"></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                "____"_________________________<?= date('Y')?> г.
            </div>
            <div class="undertext text-center">
                дата взятия биоматериала
            </div>
            <div class="text-center">
                Подпись <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </div>
        </div>
    </div>
    <?php
    if($reticul) {
    ?>
    <div class="percent50 div-in-line to-cut-right h2w">
        <div class="redline">
            <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
            <div class="percent20 div-in-line text-right">каб. 322, 114</div>
            <p>&nbsp;</p>
            <p class="text-center"><b>Ретикулоциты</b></p>
            <table>
                <thead>
                    <tr>
                        <td class="percent25"></td>
                        <td class="percent75"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr>
                        <td>Ф.И.О.</td>
                        <td><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr>
                        <td>Дата рождения</td>
                        <td class="text-center"><b><?=$model->birthday?></b></td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr>
                        <td>Адрес (прописка)</td>
                        <td class="bottomline"><b><?=$model->addresse_reg?></b></td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr>
                        <td>Проживает</td>
                        <td class="bottomline"><b><?=$model->addresse_fact?></b></td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <table>
                <thead>
                    <tr>
                        <td class="percent10"></td>
                        <td class="percent40"></td>
                        <td class="percent10"></td>
                        <td class="percent40"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Дата</td>
                        <td class="bottomline"></td>
                        <td>№</td>
                        <td class="bottomline"></td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Врач</td>
                        <td class="bottomline"></td>
                        <td>Лаборант</td>
                        <td class="bottomline"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>
</div>