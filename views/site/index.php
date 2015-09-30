<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'OpenProfOsmotr';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Справочники</h2>
                <p>
                    <?php
                    echo Html::a('Пациенты',['patients/index']);
                    echo '<br>';
                    echo '<br>';
                    echo Html::a('Специалисты',['specialists/index']);
                    echo '<br>';
                    echo Html::a('Процедуры',['procedures/index']);
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
