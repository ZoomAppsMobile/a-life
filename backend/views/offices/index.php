<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OfficesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Офисы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить офис', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'status',
            'latitude',
            //'longitude',
            //'city_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
