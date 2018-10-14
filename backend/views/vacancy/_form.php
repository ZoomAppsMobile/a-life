<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12 pl-0 pr-0">
        <div style="float:right;">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <ul id="myTab" role="tablist" class="nav nav-tabs">
            <li class="nav-item active">
                <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">Основное</a>
            </li>
            <li class="nav-item">
                <a id="home-tab" data-toggle="tab" href="#home-kaz" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Основное Казахский</a>
            </li>
            <li class="nav-item">
                <a id="home-tab" data-toggle="tab" href="#home-eng" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Основное Английский</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content bg-white box-shadow p-4 mb-4">
            <div id="home-kaz" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description_kz')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'content_kz')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="home-eng" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'content_en')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="home" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade show active in">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'image')->widget(KCFinderInputWidget::className(), [
                    'multiple' => false,
                ]); ?>

                <?= $form->field($model, 'salary')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'city')->dropDownList([ 'Алматы' => 'Алматы', 'Астана' => 'Астана' ], ['prompt' => '']) ?>
                <?= $form->field($model, 'data')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'status')->dropDownList([ 1 => 'Показать', 0 => 'Скрыть', ], ['prompt' => '']) ?>
                <?= $form->field($model, 'main')->dropDownList([ 1 => 'Да', 0 => 'Нет', ], ['prompt' => '']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
