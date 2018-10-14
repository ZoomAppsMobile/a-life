<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Widget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="widget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'forblog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 
        '0'=>'Ваши выгоди ', 
        '1'=>'Выпадающий виджет с таблицами', 
        '2'=>'Выпадающий список', 
        '3'=>'Механизм действия договора', 
        '4'=>'Редактор', 
    //    '4'=>'', 
    //    '5'=>'', 
        ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 1 => 'Показать', 0 => 'Скрыть', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
