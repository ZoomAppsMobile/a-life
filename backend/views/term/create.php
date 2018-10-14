<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Term */

$this->title = 'Добавить термины';
?>
<div class="term-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
	  <li><a href="/admin">Главная</a></li>
	  <li><a href="/admin/term">Термины</a></li>
	  <li class="active"><?= Html::encode($this->title) ?></li>
	</ol>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
