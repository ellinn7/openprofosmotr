<?php
/* @var $this yii\web\View */    
?>
<h3>Отчет по количеству специалистов и процедур для предприятия <?=$firm?></h3>
<style><?=$css?></style>
<table class="common-table">
    <thead>
        <tr>
            <td>№</td>
            <td>Наименование специалиста\услуги</td>
            <td>Кол-во</td>
        </tr>
    </thead>
    <tbody>
        <?=$res?>
    </tbody>
</table>
<a href='report.ods'>В Excel</a>