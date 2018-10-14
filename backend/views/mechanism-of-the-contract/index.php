<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MechanismOfTheContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Механизм действия договора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mechanism-of-the-contract-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать механизм действия договора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'title',
                'value' => $model->title,
                'format' => 'raw',
            ],
            [
                'attribute' => 'text',
                'value' => $model->text,
                'format' => 'raw',
            ],
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
