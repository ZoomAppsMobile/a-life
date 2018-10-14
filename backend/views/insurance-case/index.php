<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\InsuranceCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страховые случаи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-case-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'first_name',
            'Last_name',
            'number',
            'phone',
            'email:email',
            //'iin',
            //'text:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ]
        ],
    ]); ?>
</div>
