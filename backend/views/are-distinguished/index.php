<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AreDistinguishedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы на вакансию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="are-distinguished-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<!--        --><?//= Html::a('Create Are Distinguished', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'fio',
            'date_of_birth',
            'city',
            'phone',
            [
                'attribute' => 'vacancy_id',
                'value' => function ($model) {
                    return Html::a(Html::encode($model->vacancy->title), ['vacancy/view', 'id' => $model->vacancy_id]);
                },
                'format' => 'raw',
            ],
            // 'email:email',
            // 'doc',
            // 'opit_1',
            // 'opit_2',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
            ]
        ],
    ]); ?>
</div>
