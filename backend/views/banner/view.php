<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
if($model->main=='1'){
$this->title = $model->title;
}
else{
$this->title = "Баннер";
}
?>
<div class="banner-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/banner" >Баннера</a></li>
      <li class="active"><?= Html::encode($this->title) ?></li>
    </ol>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php

if($model->main=='1'){
    echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'title',
            'title_kz',
            'title_en',
            'description',
            'description_kz',
            'description_en',
            'image:image',
            'url:url',
        ],
    ]); 
}else{
echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'image:image',
            'url:url',
        ],
    ]); 

}?>

</div>
<style type="text/css">
    td img{
        max-width: 300px;
    }
</style>