<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Term */

$this->title = $model->title;
?>
<div class="term-view">

    <h1><?= Html::encode($this->title) ?></h1>
<ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/term">Термины</a></li>
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
            'description:ntext',
            'description_kz:ntext',
            'description_en:ntext',
            
        ],
    ]) ?>

</div>
