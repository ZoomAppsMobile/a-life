<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
?>
<div class="blogtag-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'icon')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?= $form->field($model, 'file')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?= $form->field($model, 'file_kz')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?= $form->field($model, 'file_en')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'order')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
