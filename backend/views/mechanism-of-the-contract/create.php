<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MechanismOfTheContract */

$this->title = 'создание';
$this->params['breadcrumbs'][] = ['label' => 'механизм действия договора', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mechanism-of-the-contract-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
