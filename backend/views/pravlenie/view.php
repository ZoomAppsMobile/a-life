<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pravlenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pravlenie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'name',
                'value' => $model->name,
                'format' => 'raw',
            ],
            [
                'attribute' => 'name_kz',
                'value' => $model->name_kz,
                'format' => 'raw',
            ],
            [
                'attribute' => 'name_en',
                'value' => $model->name_en,
                'format' => 'raw',
            ],
            [
                'attribute' => 'position',
                'value' => $model->position,
                'format' => 'raw',
            ],
            [
                'attribute' => 'position_en',
                'value' => $model->position_en,
                'format' => 'raw',
            ],
            [
                'attribute' => 'position_kz',
                'value' => $model->position_kz,
                'format' => 'raw',
            ],
            [
                'attribute' => 'education',
                'value' => $model->education,
                'format' => 'raw',
            ],
            [
                'attribute' => 'education_en',
                'value' => $model->education_en,
                'format' => 'raw',
            ],
            [
                'attribute' => 'education_kz',
                'value' => $model->education_kz,
                'format' => 'raw',
            ],
            [
                'attribute' => 'job',
                'value' => $model->job,
                'format' => 'raw',
            ],
            [
                'attribute' => 'job_en',
                'value' => $model->job_en,
                'format' => 'raw',
            ],
            [
                'attribute' => 'job_kz',
                'value' => $model->job_kz,
                'format' => 'raw',
            ],
            [
                'attribute' => 'img',
                'value' => $model->img,
                'format' => 'raw',
            ],
            'sort',
            [
                'attribute' => 'status',
                'filter' => \backend\controllers\Label::statusList(),
                'value' => function ($model) {
                    return \backend\controllers\Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
