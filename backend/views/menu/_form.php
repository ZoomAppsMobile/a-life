<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group" style="float:right;">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <div class="col-md-12 pl-0 pr-0">
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
                <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description_kz')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'text_kz')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>

                <?= $form->field($model, 'dop_text_kz')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>
            </div>
            <div id="home-eng" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'text_en')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>

                <?= $form->field($model, 'dop_text_en')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>
            </div>
            <div id="home" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade show active in">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'text')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>

                <?= $form->field($model, 'dop_text')->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]) ?>

                <?
                if(!$model->id)
                    $items = ArrayHelper::map(Menu::find()->where("parent_id = 0")->all(), 'id', 'name');
                else
                    $items = ArrayHelper::map(Menu::find()->where("parent_id = 0 AND id != ".$model->id)->all(), 'id', 'name');
                ?>

                <?= $form->field($model, 'parent_id')->dropDownList($items, [
                    'prompt' => 'Выберите главное меню...'
                ]) ?>

                <?= $form->field($model, 'top')->checkbox() ?>

                <?= $form->field($model, 'footer')->checkbox() ?>

                <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'status')->dropDownList(['0' => 'Не активно', '1' => 'Ативно'], ['prompt' => '']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
