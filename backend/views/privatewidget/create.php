<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Privatewidget */

$this->title = 'Добавить виджет';
?>
<div class="privatewidget-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
