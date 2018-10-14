<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Widget;
/* @var $this yii\web\View */
/* @var $model backend\models\Privatewidget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="privatewidget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wid')->dropDownList(
                                ArrayHelper::map(Widget::find()->all(),'id',
                                'title'),['prompt'=>'Выберите виджет']); ?>

    <?= $form->field($model, 'order')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'status')->dropDownList([ 1 => 'Показать', 0 => 'Скрыть', ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
