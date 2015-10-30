<?php
/* @var $this yii\web\View */    
?>
<div class="blank percent100">
    
    <div class="percent50 div-in-line to-cut-right to-cut-bottom h2w redline">
        <div class="undertext">Периодический осмотр</div>
        <p>Орг.:<b><?=$model->firm?> <?=$model->dep?></b></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p class="text-center">АНАЛИЗ КРОВИ</p>
        
        <div class="percent40 div-in-line">Фамилия, И., О.</div>
        <div class="percent60 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent40 div-in-line">Отделение, палата:</div>
        <div class="percent60 div-in-line bottomline">&nbsp;</div>
                
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
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    
    <div class="percent50 div-in-line to-cut-bottom h2w">
        <div class="redline">
            <div class="undertext">Периодический осмотр</div>
            <p>Орг.:<b><?=$model->firm?> <?=$model->dep?></b></p>
            <div class="text-left div-in-line percent60">
                Министерство <br>
                Здравоохранения <br>
                <p class="font80percent"><?=$firm?></p>
            </div>
            <div class="text-right percent40 div-in-line font80percent">
                Медицинская документация <br>
                Форма № 210/у <br>
                Утверждена <br>
                Минздравом <br>
                №1030 04.10.80 г.
            </div>
            <div class="percent20 div-in-line">Лаборатория </div>
            <div class="percent80 div-in-line bottomline">&nbsp;</div>
            <div class="text-center">АНАЛИЗ МОЧИ №______</div>
            <div class="text-center">
                "____"_________________________<?= date('Y')?> г.
            </div>
            <div class="undertext text-center">
                дата взятия биоматериала
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Фамилия, И.,О.</div>
                <div class="percent50 div-in-line font80percent"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
                <div class="percent20 div-in-line font80percent">Возраст</div>
                <div class="percent5 div-in-line bottomline font80percent"><?=$model->age?></div>
            </div>

            <div class="percent100">
                <div class="percent20 div-in-line font80percent">Учреждение</div>
                <div class="percent20 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent20 div-in-line font80percent">Отделение</div>
                <div class="percent20 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent10 div-in-line font80percent">палата</div>
                <div class="percent10 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent20 div-in-line font80percent">Участок</div>
                <div class="percent20 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent30 div-in-line font80percent">Медицинская карта №</div>
                <div class="percent30 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="text-center font80percent">Физико-химические свойства</div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Количество</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Цвет</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line font80percent">Эпителий:</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Прозрачность</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">плоский</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Относит. пл-ть</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">переходныйй</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Реакция</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">почечный</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Белок</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line font80percent">Лейкоциты:</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Глюкоза</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent1 div-in-line font80percent"></div>
                <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Кетоновые тела</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line font80percent">Эритроциты:</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Реакция на кровь</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">неизмененные</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Билирубин</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">измененные</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
            
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Уробилиноиды</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line font80percent">Цилиндры:</div>
            </div>
                    
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Желчные кислоты</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">гиалиновые</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
                 
            <div class="percent100">
                <div class="percent25 div-in-line font80percent">Индикан</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
                <div class="percent25 div-in-line text-right font80percent">зернистые</div>
                <div class="percent25 div-in-line bottomline font80percent">&nbsp;</div>
            </div>
                    
            <div class="percent100">
                <div class="percent50 div-in-line">&nbsp;</div>
                <div class="percent50 div-in-line">
                    <div class="percent50 div-in-line text-right font80percent">восковидные</div>
                    <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent50 div-in-line text-right font80percent">эпителиальные</div>
                    <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent50 div-in-line text-right font80percent">лейкоцитарные</div>
                    <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent50 div-in-line text-right font80percent">эритроцитарные</div>
                    <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent50 div-in-line text-right font80percent">пигментные</div>
                    <div class="percent50 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent25 div-in-line font80percent">Слизь</div>
                    <div class="percent75 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent100 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent25 div-in-line font80percent">Соли:</div>
                    <div class="percent75 div-in-line bottomline font80percent">&nbsp;</div>
                    <div class="percent30 div-in-line font80percent">Бактерии:</div>
                    <div class="percent70 div-in-line bottomline font80percent">&nbsp;</div>
                </div>
            </div>
            <br><br>
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
    if($blood) {
    ?>
    
    <div class="percent50 div-in-line to-cut h2w">
        <div class="redline">
            <div class="percent80 div-in-line"><b>МУЗ ГП №1 <br> ДДР</b></div>
            <div class="percent20 div-in-line text-right"><?=$blood?></div>
            <p class="text-center">Биохимический анализ крови</p>
            <div class="percent100">
                <div class="percent20 div-in-line">Ф.И.О.</div>
                <div class="percent80 div-in-line bottomline">&nbsp;</div>
            </div>
            <div class="percent100">
                <div class="percent30 div-in-line">Место работы</div>
                <div class="percent70 div-in-line bottomline">&nbsp;</div>
            </div>
            <p>&nbsp;</p>
            <table class="common-table percent100">
                <thead>
                    <tr>
                        <td class="percent30">методика</td>
                        <td class="percent15">результат</td>
                        <td class="percent30">референсные значения</td>
                        <td class="percent25">Единицы измерения</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3">Билирубин <br>общий <br>прямой <br>непрямой</td>
                        <td></td>
                        <td>до 20,5</td>
                        <td rowspan="3">мкмоль/л</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>до 5,1</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>до 17,0</td>
                    </tr>
                    <tr>
                        <td>&alpha;-амилаза</td>
                        <td></td>
                        <td>23-100</td>
                        <td>ед/л</td>
                    </tr>
                    <tr>
                        <td>Холестерин</td>
                        <td></td>
                        <td>до 5,7</td>
                        <td>ммоль/л</td>
                    </tr>
                    <tr>
                        <td>Триглицериды</td>
                        <td></td>
                        <td>до 2,3</td>
                        <td>ммоль/л</td>
                    </tr>
                    <tr>
                        <td>ЛПНП</td>
                        <td></td>
                        <td>муж. 1,23-4,45 <br>жен. 1,63-4,32</td>
                        <td>ммоль/л</td>
                    </tr>
                    <tr>
                        <td>Креатинин</td>
                        <td></td>
                        <td>муж. 62-124 <br>жен. 44-97</td>
                        <td>ммоль/л</td>
                    </tr>
                    <tr>
                        <td>Мочевая кислота</td>
                        <td></td>
                        <td>муж. 200-420 <br>жен. 140-340</td>
                        <td>ммоль/л</td>
                    </tr>
                    <tr>
                        <td>Общий белок</td>
                        <td></td>
                        <td>65-87</td>
                        <td>г/л</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <div class="percent100">
                <div class="percent60 div-in-line">"____"____________________20____г.</div>
                <div class="percent20 div-in-line text-right">Лаборант</div>
                <div class="percent20 div-in-line bottomline">&nbsp;</div>
            </div>
            <div class="percent100 div-in-line bottomline">&nbsp;</div>
        </div>
    </div>
    
    <?php
    }
    if($reticul) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$reticul?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Ретикулоциты</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    if($syph) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$syph?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Исследование крови на сифилис</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    if($nose) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$nose?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Мазок из зева и носа на наличие патогенного стафилококка</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    if($paras) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$paras?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Анализ кала на яйца гельминтов</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    if($honorea) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$honorea?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Мазок на гонорею</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    if($eritrocit) {
    ?>
    
    <div class="percent50 div-in-line to-cut h25p redline">
        <div class="percent80 div-in-line"><?=$model->firm?> <?=$model->dep?></div>
        <div class="percent20 div-in-line text-right"><?=$eritrocit?></div>
        <p>&nbsp;</p>
        <p class="text-center"><b>Базофильная зернистость эритроцитов</b></p>
        <div class="percent25 div-in-line">Ф.И.О.</div>
        <div class="percent75 div-in-line"><b><?=$model->surname?> <?=$model->name?> <?=$model->patron?></b></div>
        <div class="percent25 div-in-line">Дата рождения</div>
        <div class="percent75 div-in-line text-center"><b><?=$model->birthday?></b></div>
        <div class="percent30 div-in-line">Адрес (прописка)</div>
        <div class="percent70 div-in-line bottomline"><b><?=$model->addresse_reg?></b></div>
        <div class="percent25 div-in-line">Проживает</div>
        <div class="percent75 div-in-line bottomline"><b><?=$model->addresse_fact?></b></div>
        <div class="percent20 div-in-line">Дата</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">№</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Врач</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
        <div class="percent20 div-in-line">Лаборант</div>
        <div class="percent30 div-in-line bottomline">&nbsp;</div>
    </div>
    
    <?php
    }
    ?>
</div>