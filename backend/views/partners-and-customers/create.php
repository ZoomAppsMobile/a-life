<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PartnersAndCustomers */

//$this->title = 'Create Partners And Customers';
//$this->params['breadcrumbs'][] = ['label' => 'Partners And Customers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-and-customers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
