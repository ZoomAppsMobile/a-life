<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */

$this->title = 'Изменить: ' . $model->title;
?>
<div class="slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/slider" >Слайдеры</a></li>
      <li class="active"><?= Html::encode($this->title) ?></li>
    </ol>
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
