<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявление';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'options' => ['width'=> '80'],
                'format' => 'html',    
                'value' => function ($data) {  
                                       
                        return '<a href="/admin/statementdoc/index?id='.$data['id'].'">Документы</a>';
                   
                },
                'label'=>'',
                'filter'=>false,
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
