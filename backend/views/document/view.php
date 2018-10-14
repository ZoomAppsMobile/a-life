<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model backend\models\Document */

$this->title = $model->title;
?>
<div class="document-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/document" >Документы и публикации</a></li>
      <li><a href="#" ><?php
        if($model->category=='0'){
            echo "Правила страхования";
        } else if($model->category=='1'){
            echo "Реестр страховых агентов";
        } else if($model->category=='2'){
            echo "Страховые тарифы";
        } else if($model->category=='3'){
            echo "Финансовые показатели";
        }


      ?></a></li>
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

    <table id="w0" class="table table-striped table-bordered detail-view"><tbody>
            <tr><th>Заголовок</th><td><?=$model->title?></td></tr>
            <tr><th>Заголовок Kz</th><td><?=$model->title_kz?></td></tr>
            <tr><th>Заголовок En</th><td><?=$model->title_en?></td></tr>
            <tr><th>Год</th><td><?=$model->year?></td></tr>
            <tr><th>Документ</th><td><a href="<?=$model->file?>" target="_blank">ссылка</a></td></tr>
            <tr><th>Документ Kz</th><td><a href="<?=$model->file_kz?>" target="_blank">ссылка</a></td></tr>
            <tr><th>Документ En</th><td><a href="<?=$model->file_en?>" target="_blank">ссылка</a></td></tr>
    </tbody>
</table>
</div>
