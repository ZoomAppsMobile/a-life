<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Pravlenies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pravlenie-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать Pravlenie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                 'value' => function ($model) {
                     return
                         Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', ['move-up', 'id' => $model->id]) .
                         Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', ['move-down', 'id' => $model->id]);
                 },
                 'format' => 'raw',
                 'contentOptions' => ['style' => 'text-align: center'],
            ],
                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>
</div>
