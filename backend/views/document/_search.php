<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DocumentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   

    <?php // echo $form->field($model, 'file_kz') ?>

    <?php // echo $form->field($model, 'file_en') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php  echo $form->field($model, 'category')->dropDownList([ 
     '0'=>'Правила страхования',
     '1'=>'Реестр страховых агентов', 
     '2'=>'Страховые тарифы',
     '3'=>'Финансовые показатели', ], ['prompt' => 'Выберите категорию']) ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
