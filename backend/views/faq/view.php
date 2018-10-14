<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Faqcategory;

$categoryname=Faqcategory::findOne($model->id);
$this->title = $model->title;
?>
<div class="faq-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/faqcategory" >Категории FAQ</a></li>
      <li><a href="/admin/faq?id=<?=$categoryname->id?>" ><?=$categoryname->title?></a></li>
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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
     
            'title',
            'title_kz',
            'title_en',
            'answer:ntext',
            'answer_kz:ntext',
            'answer_en:ntext',
           
            'order'
        ],
    ]) ?>

</div>
