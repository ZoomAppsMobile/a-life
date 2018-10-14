<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Faq */

$this->title = 'Добавить вопрос';
?>
<div class="faq-create">

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
