<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\YourBenefits */

$this->title = 'создание выгоды';
$this->params['breadcrumbs'][] = ['label' => 'ваши выгоды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="your-benefits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
