<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Widgetitem */

$thistitle = 'Изменить: ' . $model->title;
$id=$model->wid;
?>
<div class="widgetitem-update">

    <h1><?= Html::encode($thistitle) ?></h1>

    <?= $this->render('_form', [
    	'id'=>$id,
        'model' => $model,
         'modelsTag' =>$modelsTag,
    ]) ?>
</div>
