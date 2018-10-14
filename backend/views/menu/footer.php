<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Menu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Нижнее меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--    <p>-->
    <!--        --><?//= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    <!--    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'value' => function (Menu $model) {
                    return
                        Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', ['move-up', 'id' => $model->id, 'where' => 'footer']) .
                        Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', ['move-down', 'id' => $model->id, 'where' => 'footer']);
                },
                'format' => 'raw',
                'contentOptions' => ['style' => 'text-align: center'],
            ],
            'name',
            'name_en',
            'name_kz',
//            'text:ntext',
             'title',
            // 'description:ntext',
            // 'keywords',
            // 'url:url',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ]
        ],
    ]); ?>
</div>
