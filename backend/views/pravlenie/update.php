<?php

use yii\helpers\Html;

$this->title = 'Редактирование Pravlenie: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pravlenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="pravlenie-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
