<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Metatags */

$this->title = 'Update Metatags: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Metatags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="metatags-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
