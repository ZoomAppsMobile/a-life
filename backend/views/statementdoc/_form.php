<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
/* @var $this yii\web\View */
/* @var $model backend\models\Statementdoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statementdoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'doc_kz')->widget(KCFinderInputWidget::className(), [
        'multiple' => true,
    ]); ?>

    <?= $form->field($model, 'doc_en')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'order')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
