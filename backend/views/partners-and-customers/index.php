<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PartnersAndCustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Partners And Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-and-customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Partners And Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'title_en',
            'title_kz',
            'text:ntext',
            // 'text_en:ntext',
            // 'text_kz:ntext',
            // 'doc',
            // 'doc_en',
            // 'doc_kz',
            // 'keywords',
            // 'description',
            // 'url:url',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
