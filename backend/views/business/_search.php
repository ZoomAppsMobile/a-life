<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'title_kz') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'description_kz') ?>

    <?php // echo $form->field($model, 'description_en') ?>

    <?php // echo $form->field($model, 'thumb') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'content_kz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'note_kz') ?>

    <?php // echo $form->field($model, 'note_en') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'category') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
