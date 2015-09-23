<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'OpenProfOsmotr';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Бланки</h2>
                <p>
                    <?php
                    echo Html::a('Проф. маршрут',['blanks/rout']);
                    echo '<br>';
                    echo Html::a('Мед.осмотр и Персональные данные',['blanks/personal']);
                    echo '<br>';
                    echo Html::a('Паспорт здоровья работника',['blanks/passport']);
                    echo '<br>';
                    echo Html::a('Заключение периодического медицинского осмотра',['blanks/resume']);
                    echo '<br>';
                    echo Html::a('Талон. Клинический анализ крови.',['blanks/talon']);
                    echo '<br>';
                    echo Html::a('Анализы крови, мочи.',['blanks/analysis']);
                    echo '<br>';
                    ?>
                    
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Ввод информации</h2>
                <p>
                <?php echo Html::a('Загрузка данных',['patients/upload'], ['class' => 'btn btn-success']); ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Справочники</h2>
                <p>
                    <?php
                    echo Html::a('Пациенты',['patients/index']);
                    ?>
                </p>
                <h2>Приказ №302н</h2>
                <p>
                    <?php
                    echo Html::a('Приложение 1',['factors1/index']);
                    echo '<br>';
                    echo Html::a('Приложение 2',['factors2/index']);
                    echo '<br>';
                    echo Html::a('Обязательный осмотр специалистами',['specialists-required/index']);
                    echo '<br>';
                    echo Html::a('Обязательные процедуры',['procedures-required/index']);
                    ?>
                </p>
            </div>
        </div>

    </div>
</div>
