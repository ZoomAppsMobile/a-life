<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\NewVacancy */

$this->title = 'создание новой вакансии';
$this->params['breadcrumbs'][] = ['label' => 'вакансии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new-vacancy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
