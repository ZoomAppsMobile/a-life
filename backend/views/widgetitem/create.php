<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Widgetitem */

$thistitle = 'Добавить';
?>
<div class="widgetitem-create">

    <h1><?= Html::encode($thistitle) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
         'id'=> $id,
         'modelsTag' =>$modelsTag,
    ]) ?>

</div>
