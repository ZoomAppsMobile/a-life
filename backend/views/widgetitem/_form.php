<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Widget;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use wbraganca\dynamicform\DynamicFormWidget;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;

$widget=Widget::findOne($id);
?>
<div class="widgetitem-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <?php
        if($widget->type==0){
    ?>
    
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

   
    <?php
        } else  if($widget->type==1){
            ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

            <label>Второй заголовок</label>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true])->label(false); ?>

            <label>Второй заголовок KZ</label>
            <?= $form->field($model, 'description_kz')->textInput(['maxlength' => true])->label(false); ?>

            <label>Второй заголовок EN</label>
            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true])->label(false); ?>

            <?= $form->field($model, 'order')->textInput() ?>
            <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="fa fa-tag fa-fw"></i>Теги</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper2', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items2', // required: css class selector
                'widgetItem' => '.item2', // required: css class
                'limit' => 100, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item2', // css class
                'deleteButton' => '.remove-item2', // css class
                'model' => $modelsTag[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'value',
                    'value_kz',
                    'value_en', 'names', 'names_kz', 'names_en'
                ],
            ]); ?>

            <div class="container-items2"><!-- widgetContainer -->
            <?php foreach ($modelsTag as $i => $modelDiscount): ?>
                <div class="item2 panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                     
                        <div class="pull-right">
                            <button type="button" class="add-item2 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item2 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if (! $modelDiscount->isNewRecord) {
                                echo Html::activeHiddenInput($modelDiscount, "[{$i}]id");
                            }
                        ?>
                        <div class="row">
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]names")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]value")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]names_kz")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]value_kz")->textInput(['maxlength' => true]) ?>
                            </div>            
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]names_en")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">                    
                                 <?= $form->field($modelDiscount, "[{$i}]value_en")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-12">                     
                                 <?= $form->field($modelDiscount, "[{$i}]order")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
               <?php DynamicFormWidget::end(); ?>
        </div>
    </div>
</div>

          
           

        <?php
        } else
        if($widget->type==2){
        ?>


        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'listtype')->dropDownList([ '0' => 'Простой список', '1' => 'Маркер', '2' => 'Нумерация' ], ['prompt' => '']) ?>

        <?= $form->field($model, 'order')->textInput() ?>



            <?php
        }else
        if($widget->type==3){

            ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_kz')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'icon')->widget(KCFinderInputWidget::className(), [
                'multiple' => false,
            ]); ?>

            <?= $form->field($model, 'order')->textInput() ?>
            <?php
    } else
        if($widget->type==4){
?>

 <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>
    <?= $form->field($model, 'text_en')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>
    <?= $form->field($model, 'text_kz')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'order')->textInput() ?>
            <?php
        }
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменть', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
