<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PartnersAndCustomers */

$this->title = 'Update Partners And Customers: ';
//$this->params['breadcrumbs'][] = ['label' => 'Partners And Customers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partners-and-customers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
