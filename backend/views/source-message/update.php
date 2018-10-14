<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SourceMessage */

$this->title = 'Редактирование перевода: ' . $model->message;
$this->params['breadcrumbs'][] = ['label' => 'Source Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->message, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="source-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'message' => $message
    ]) ?>

</div>
