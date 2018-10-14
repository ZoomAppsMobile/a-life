<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
?>

<div class="banner-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php
        if($model->main=='1' || !$model->isNewRecord){
    ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>
    <?php
        }
    ?>
    <?= $form->field($model, 'image')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?php
        if($model->main=='1' || !$model->isNewRecord ){
    ?>
    <?= $form->field($model, 'main')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>
    <?php
        }
    ?>
    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
