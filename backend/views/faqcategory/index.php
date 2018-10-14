<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FaqcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Часто задаваемые вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faqcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
 
    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
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
                                       
                        return '<a href="/admin/faq/index?id='.$data['id'].'">Вопросы</a>';
                   
                },
                'label'=>'',
                'filter'=>false,
            ],
           // 'image',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
