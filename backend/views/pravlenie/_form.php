<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="pravlenie-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'education_en')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'education_kz')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'job')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'job_en')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'job_kz')->widget(CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <div class="row">
       <div class="col-md-4 col-xs-3" style="text-align: center">
           <div style="margin-top:20px;">
               <img src="/backend/web/<?=$model->path.$model->img?>" alt="" style="width:400px;">
           </div>
       </div>
    </div>

    <?= $form->field($model, 'img')->label(false)->widget(FileInput::className(), [
        'options' => [
            'accept' => 'image/*',
            'multiple' => false,
        ]
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([0 => 'Скрыто', 1 => 'Доступно'], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
