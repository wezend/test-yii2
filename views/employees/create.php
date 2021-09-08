<?php

use yii\helpers\Html;

$this->title = 'Добавить сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Просмотр сотрудников', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
