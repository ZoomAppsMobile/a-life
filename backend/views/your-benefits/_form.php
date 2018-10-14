<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YourBenefits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="your-benefits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => [
            'options' => ['rows' => 6],
            'allowedContent' => true,
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'img')->widget(\iutbay\yii2kcfinder\KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
