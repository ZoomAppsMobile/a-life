<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vacancy */

$this->title = $model->title;
?>
<div class="vacancy-view">

    <h1><?= Html::encode($this->title) ?></h1>
<ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/vacancy" >Вакансии</a></li>
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
            'id',
            'title',
            'title_kz',
            'title_en',
            'description',
            'description_kz',
            'description_en',
            'image:image',
            'main',
            'content:ntext',
            'content_kz:ntext',
            'content_en:ntext',
            'salary',
            'city',
            'status',
        ],
    ]) ?>

</div>
