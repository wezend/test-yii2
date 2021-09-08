<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Просмотр сотрудников';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Скачать отчёт о зароботной плате сотрудников', ['make-report'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'surname',
            'phone',
            'position',
            [
                'attribute'=>'status',
                'filter'=>array('1' =>"Неактивен",'0' =>"Активен"),
                'value' => function ($data) {
                    if($data->status == 0){
                        return "Активен";
                    }
                    return "Неактивен";
                }
            ],
            'salary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
