<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Statementdoc */

$this->title = 'Добавить документ';
?>
<div class="statementdoc-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
	  <li><a href="/admin">Главная</a></li>
	  <li><a href="/admin/statement" >Заявление</a></li>
	  <li><a href="/admin/statementdoc?id=<?=$statement->id?>" ><?=$statement->title?></a></li>
	  <li class="active"><?= Html::encode($this->title) ?></li>
	</ol>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
