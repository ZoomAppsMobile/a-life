<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MechanismOfTheContract */

$this->title = 'изменение механизма действия договора: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'механизм действия договора', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'изменить';
?>
<div class="mechanism-of-the-contract-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
