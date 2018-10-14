<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */

$this->title = $model->title;
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>
<ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/event" >Действие при наступлении страхового случая</a></li>
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
            <tr><th>Документ</th><td><a href="<?=$model->doc?>" target="_blank">ссылка</a></td></tr>
            <tr><th>Документ Kz</th><td><a href="<?=$model->doc_kz?>" target="_blank">ссылка</a></td></tr>
            <tr><th>Документ En</th><td><a href="<?=$model->doc_en?>" target="_blank">ссылка</a></td></tr>
    </tbody>
    </table>

</div>
