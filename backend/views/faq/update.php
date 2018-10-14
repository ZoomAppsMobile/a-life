<?php

use yii\helpers\Html;
use backend\models\Faqcategory;
/* @var $this yii\web\View */
/* @var $model backend\models\Faq */
$categoryname=Faqcategory::findOne($model->id);
$this->title = 'Изменить: ' . $model->title;
?>
<div class="faq-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
	  <li><a href="/admin">Главная</a></li>
	  <li><a href="/admin/faqcategory" >Категории FAQ</a></li>
	  <li><a href="/admin/faq?id=<?=$categoryname->id?>" ><?=$categoryname->title?></a></li>
	  <li class="active"><?= Html::encode($this->title) ?></li>
	</ol>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
