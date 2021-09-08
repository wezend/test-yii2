<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Мои работники';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Добро пожаловать на сайт с бесплатным функционалом ведения учёта ваших сотрудников</h1>

        <p class="lead">Чтобы начать работу нажмите на кнопку ниже.</p>

        <p><?= Html::a('Начать', ['employees/index'], ['class' => 'btn btn-success']) ?></p>

        <div class="row" style="background-image: url('../images/image1.jpg); background-size: cover;">
            <div class="col-lg-4">
                <p>Теперь вы можете просматривать список сотрудников, добавлять, редактировать, удалять информацию об отдельном сотруднике, </p>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <p>А также теперь возможно скачать отчёт о зарплате сотрудников в pdf</p>
            </div>
        </div>
    </div>
</div>
