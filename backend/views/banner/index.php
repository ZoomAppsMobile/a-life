<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Баннера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h4>Статичные баннера  на главной странице</h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             [
                'options' => ['width'=> '80'],
                'attribute' => 'image',
                'format' => 'html',    
                'value' => function ($data) {
                    if($data['image']){
                        return '<div class="wrap-img">'.Html::img($data['image']).'</div>';
                    } 
                    else{
                        return Html::img('/frontend/web/image/noimage.png',
                        ['width' => '80px']);
                    }
                },
                'label'=>false,
                'filter'=>false,
            ],
            'title',
           'description',
        
            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update}',
                
            ],
        ],
    ]); ?>
    <h4>Баннера</h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             [
                'options' => ['width'=> '80'],
                'attribute' => 'image',
                'format' => 'html',    
                'value' => function ($data) {
                    if($data['image']){
                        return '<div class="wrap-img">'.Html::img($data['image']).'</div>';
                    } 
                    else{
                        return Html::img('/frontend/web/image/noimage.png',
                        ['width' => '80px']);
                    }
                },
                'label'=>false,
                'filter'=>false,
            ],
            'url',
        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
     <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
<style type="text/css">
.wrap-img {
    position: relative;
    width: 130px;
    height: 70px;
}
.divka{
    position: relative;
    width: 100%;
    height: 220px;
}
.wrap-img img, .divka img{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    -webkit-transform: scale(1) translateZ(0);
    transform: scale(1) translateZ(0);
    transition: -webkit-transform .2s cubic-bezier(.19,1,.22,1);
    transition: transform .2s cubic-bezier(.19,1,.22,1);
    transition: transform .2s cubic-bezier(.19,1,.22,1),-webkit-transform .2s cubic-bezier(.19,1,.22,1);
}
</style>
