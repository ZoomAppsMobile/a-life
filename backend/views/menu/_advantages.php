<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
?>
<div class="box" id="photos">
    <div class="box-header with-border" id="advantages">Преимущества</div>
    <div class="box-body">

        <div class="row">
            <?php $form = ActiveForm::begin([
                'options' => ['enctype'=>'multipart/form-data'], 'action' => ['advantages/edit', 'id' => $model->id]
            ]); ?>
            <?php foreach ($advantages as $v): ?>
                <div class="col-md-2 col-xs-3" style="text-align: center">
                    <div class="btn-group">
                        <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>', ['advantages/move-up', 'id' => $v->id, 'menu_id' => $model->id], [
                            'class' => 'btn btn-default',
                            'data-method' => 'post',
                        ]); ?>
                        <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['advantages/delete', 'id' => $v->id, 'menu_id' => $model->id], [
                            'class' => 'btn btn-default',
                            'data-method' => 'post',
                            'data-confirm' => 'Удалить?',
                        ]); ?>
                        <?= Html::a('<span class="glyphicon glyphicon-arrow-right"></span>', ['advantages/move-down', 'id' => $v->id, 'menu_id' => $model->id], [
                            'class' => 'btn btn-default',
                            'data-method' => 'post',
                        ]); ?>
                    </div>
                    <div style="margin-top:20px;">
                        <img src="/backend/web/<?=$v->path.$v->img?>" alt="" style="width: 80px;height: 80px;">
                    </div>
                    <?= $form->field($v, 'id[]')->hiddenInput(['value' => $v->id]) ?>
                    <?= $form->field($v, 'title[]')->textInput(['maxlength' => true, 'value' => $v->title]) ?>
                    <?= $form->field($v, 'title_kz[]')->textInput(['maxlength' => true, 'value' => $v->title_kz]) ?>
                    <?= $form->field($v, 'title_en[]')->textInput(['maxlength' => true, 'value' => $v->title_en]) ?>

                    <?= $form->field($v, 'text[]')->widget(CKEditor::className(), [
                        'options' => ['rows' => 6, 'id' => $v->id.'advantages', 'value' => $v->text], 'editorOptions' => [
                            'allowedContent' => true,
                            'height' => 300,
                            'toolbarGroups' => [
                                ['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard','doctools']],
                            ],
                            'preset' => 'my', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]) ?>

                    <?= $form->field($v, 'text_kz[]')->widget(CKEditor::className(), [
                        'options' => ['rows' => 6, 'id' => $v->id.'advantages1', 'value' => $v->text_kz], 'editorOptions' => [
                            'allowedContent' => true,
                            'height' => 300,
                            'toolbarGroups' => [
                                ['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard','doctools']],
                            ],
                            'preset' => 'my', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]) ?>

                    <?= $form->field($v, 'text_en[]')->widget(CKEditor::className(), [
                        'options' => ['rows' => 6, 'id' => $v->id.'advantages2', 'value' => $v->text_en], 'editorOptions' => [
                            'allowedContent' => true,
                            'height' => 300,
                            'toolbarGroups' => [
                                ['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard','doctools']],
                            ],
                            'preset' => 'my', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]) ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>

        <?php $form = ActiveForm::begin([
            'options' => ['enctype'=>'multipart/form-data'], 'action' => ['advantages/create', 'id' => $model->id]
        ]); ?>

        <?= $form->field($advantages_img, 'files[]')->label(false)->widget(FileInput::className(), [
            'options' => [
                'accept' => 'image/*',
                'multiple' => true,
            ]
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>