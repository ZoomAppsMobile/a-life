<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PravlenieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pravlenie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'name_kz') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'position_en') ?>

    <?php // echo $form->field($model, 'position_kz') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'education_en') ?>

    <?php // echo $form->field($model, 'education_kz') ?>

    <?php // echo $form->field($model, 'job') ?>

    <?php // echo $form->field($model, 'job_en') ?>

    <?php // echo $form->field($model, 'job_kz') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
