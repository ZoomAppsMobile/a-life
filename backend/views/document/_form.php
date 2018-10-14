<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
/* @var $this yii\web\View */
/* @var $model backend\models\Document */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'file_kz')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'file_en')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>
     
    <?= $form->field($model, 'category')->dropDownList([ 
     '0'=>'Правила страхования',
     '1'=>'Реестр страховых агентов', 
     '2'=>'Страховые тарифы',
     '3'=>'Финансовые показатели', ], ['prompt' => 'Выберите категорию']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
