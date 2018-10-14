<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\Blogcategory;
/* @var $this yii\web\View */
/* @var $model backend\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12 pl-0 pr-0">
        <ul id="myTab" role="tablist" class="nav nav-tabs">
            <li class="nav-item active">
                <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">Основное</a>
            </li>
            <li class="nav-item">
                <a id="home-tab1" data-toggle="tab" href="#home-eng" role="tab" aria-controls="home-eng" aria-selected="false" class="nav-link">Английский</a>
            </li>
            <li class="nav-item">
                <a id="home-tab2" data-toggle="tab" href="#home-kaz" role="tab" aria-controls="home-kaz" aria-selected="false" class="nav-link">Казахский</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab3" data-toggle="tab" href="#blocs" role="tab" aria-controls="blocs" aria-selected="false" class="nav-link">Блоки</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab1" data-toggle="tab" href="#for-azia" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Азия капитал</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab"2 data-toggle="tab" href="#for-pa" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Пенсионный аннуитет</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab"2 data-toggle="tab" href="#home-sz" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Страхование заемщиков</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab"2 data-toggle="tab" href="#m_s_t" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Мед. стр. туристов</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab"2 data-toggle="tab" href="#ob_st" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Об. стр. работников</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content bg-white box-shadow p-4 mb-4">
            <div id="blocs" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?
                $model->YourBenefits = [];
                foreach($model->yourBenefitsBlogs as $v) {
                    $model->YourBenefits[] = $v->your_benefits_id;
                }
                ?>
                <? $array = \common\models\YourBenefits::find()->all() ?>
                <!--    --><?//= $form->field($model, 'YourBenefits')->checkboxList(ArrayHelper::map(\common\models\YourBenefits::find()->all(), 'id', 'title')) ?>

                <div style="font-size: 20px;margin-top:20px;">Ваши выгоды</div>
                <? foreach($array as $v){ $title = mb_strtolower($v['title'], "utf-8");?>
                    <? if(!$model->isNewRecord){ ?>
                        <? if($model->issetybsc($v->id, $model->id)){ ?>
                            <div>
                                <label><input type="checkbox" name="Blog[YourBenefits][]" value="<?=$v['id']?>" checked="checked"> <?=ucfirst($title)?></label>
                                <? $sort = \common\models\YourBenefitsBlog::find()->
                                where("your_benefits_id = ".$v['id']." AND blog_id = ".$model['id'])->one(); ?>
                                <input style="position: absolute;left:420px;" type="text" name="Blog[YourBenefitsSorter][<?=$v['id']?>]" value="<?=$sort['sort']?>">
                                <textarea style="position: absolute;left:620px;width:60%;" type="text" name="Blog[YourBenefitsText][<?=$v['id']?>]"><?=$sort['text']?></textarea>
                            </div>
                        <? }else{ ?>
                            <div>
                                <label><input type="checkbox" name="Blog[YourBenefits][]" value="<?=$v['id']?>"> <?=ucfirst($title)?></label>
                                <input style="position: absolute;left:420px;" type="text" name="Blog[YourBenefitsSorter][<?=$v['id']?>]" value="">
                                <textarea style="position: absolute;left:620px;width:60%;" type="text" name="Blog[YourBenefitsText][<?=$v['id']?>]"></textarea>
                            </div>
                        <? } ?>
                    <? }else{ ?>
                        <div>
                            <label><input type="checkbox" name="Blog[YourBenefits][]" value="<?=$v['id']?>"> <?=ucfirst($title)?></label>
                            <input style="position: absolute;left:420px;" type="text" name="Blog[YourBenefitsSorter][<?=$v['id']?>]" value="">
                            <textarea style="position: absolute;left:620px;width:60%;" type="text" name="Blog[YourBenefitsText][<?=$v['id']?>]"></textarea>
                        </div>
                    <? } ?>
                <? } ?>

                <?
                //        $model->MechanismOfTheContract = [];
                //        foreach($model->mechanismOfTheContractBlog as $v) {
                //            $model->MechanismOfTheContract[] = $v->mechanism_of_the_contract_id;
                //        }
                ?>

                <? $array = \common\models\MechanismOfTheContract::find()->all() ?>

                <div style="font-size: 20px;margin-top:20px;">Механизм действия договора</div>
                <? foreach($array as $v){$title = mb_strtolower($v['title'], "utf-8");?>
                    <? if(!$model->isNewRecord){ ?>
                        <? if($model->issetmotc($v->id, $model->id)){ ?>
                            <div>
                                <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>" checked="checked"> <?=strip_tags(ucfirst($title))?></label>
                                <? $sort = \common\models\MechanismOfTheContractBlog::find()->
                                where("mechanism_of_the_contract_id = ".$v['id']." AND blog_id = ".$model['id'])->one(); ?>
                                <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][<?=$v['id']?>]" value="<?=$sort['sort']?>">
                            </div>
                        <? }else{ ?>
                            <div>
                                <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>"> <?=strip_tags(ucfirst($title))?></label>
                                <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][<?=$v['id']?>]" value="">
                            </div>
                        <? } ?>
                    <? }else{ ?>
                        <div>
                            <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>"> <?=strip_tags(ucfirst($title))?></label>
                            <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][<?=$v['id']?>]" value="">
                        </div>
                    <? } ?>
                <? } ?>

                <!--    --><?// $array = ArrayHelper::map(\common\models\MechanismOfTheContract::find()->all(), 'id', 'title') ?>
                <!--    --><?//= Html::decode($form->field($model, 'MechanismOfTheContract')->checkboxList(
                //            $array
                //    )); ?>
                <div style="font-size: 20px;margin-top:20px;">Основные виды страховой защиты</div>
                <div style="background: none;">
                    <button class="add_options1 btn btn-primary">Добавить</button>
                </div>
                <div class="copyMe_1" style="display: none;background: none;">
                    <div>
                        <input type="text" name="title1[new][]" value="" style="width:40%">
                        <textarea name="text1[new][]" value="" style="width:40%"></textarea>
                        <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                    </div>
                </div>
                <div class="">
                    <? foreach($model->additionalInsuranceCoverage as $v){ ?>
                        <div>
                            <input type="text" name="title1[new][]" value="<?=$v->title?>" style="width:40%">
                            <textarea name="text1[new][]" style="width:40%"><?=$v->text?></textarea>
                            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                        </div>
                    <? } ?>
                </div>
                <div class="copyTo_1"></div>

                <div style="font-size: 20px;margin-top:20px;">Дополнительные виды страховой защиты</div>
                <div style="background: none;">
                    <button class="add_options btn btn-primary">Добавить</button>
                </div>
                <div class="copyMe" style="display: none;background: none;">
                    <div>
                        <input type="text" name="title[new][]" value="" style="width:40%">
                        <textarea name="text[new][]" value="" style="width:40%"></textarea>
                        <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                    </div>
                </div>
                <div class="">
                    <? foreach($model->basicInsuranceCoverage as $v){ ?>
                        <div>
                            <input type="text" name="title[new][]" value="<?=$v->title?>" style="width:40%">
                            <textarea name="text[new][]" style="width:40%"><?=$v->text?></textarea>
                            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                        </div>
                    <? } ?>
                </div>
                <div class="copyTo"></div>

                <div style="font-size: 20px;margin-top:20px;">ДОПОЛНИТЕЛЬНАЯ ЗАЩИТА ДЛЯ РЕБЕНКА</div>
                <div style="background: none;">
                    <button class="add_options2 btn btn-primary">Добавить</button>
                </div>
                <div class="copyMe_2" style="display: none;background: none;">
                    <div>
                        <input type="text" name="title2[new][]" value="" style="width:40%">
                        <textarea name="text2[new][]" value="" style="width:40%"></textarea>
                        <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                    </div>
                </div>
                <div class="">
                    <? foreach($model->childsInsuranceCoverage as $v){ ?>
                        <div>
                            <input type="text" name="title2[new][]" value="<?=$v->title?>" style="width:40%">
                            <textarea name="text2[new][]" style="width:40%"><?=$v->text?></textarea>
                            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                        </div>
                    <? } ?>
                </div>
                <div class="copyTo_2"></div>

                <div style="font-size: 20px;margin-top:20px;">ДОПОЛНИТЕЛЬНАЯ ЗАЩИТА ДЛЯ СТРАХОВАТЕЛЯ</div>
                <div style="background: none;">
                    <button class="add_options3 btn btn-primary">Добавить</button>
                </div>
                <div class="copyMe_3" style="display: none;background: none;">
                    <div>
                        <input type="text" name="title3[new][]" value="" style="width:40%">
                        <textarea name="text3[new][]" value="" style="width:40%"></textarea>
                        <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                    </div>
                </div>
                <div class="">
                    <? foreach($model->additionalProtectionInsurer as $v){ ?>
                        <div>
                            <input type="text" name="title3[new][]" value="<?=$v->title?>" style="width:40%">
                            <textarea name="text3[new][]" style="width:40%"><?=$v->text?></textarea>
                            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
                        </div>
                    <? } ?>
                </div>
                <div class="copyTo_3"></div>
            </div>
            <div id="for-azia" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'kase')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'spy')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="for-pa" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'pens1')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'pens2')->widget(CKEditor::className(), [
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

                <?= $form->field($model, 'bellowing_conditions_en')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'note_en')->textInput(['maxlength' => true]) ?>
            </div>
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

                <?= $form->field($model, 'bellowing_conditions_kz')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'note_kz')->textInput(['maxlength' => true]) ?>
            </div>
            <div id="home-sz" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'vig_banka')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="m_s_t" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'k_r_p')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'v_s_m_s')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="ob_st" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'v_zn')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>
            </div>
            <div id="home" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade show active in">

                <?= $form->field($model, 'category')->dropDownList(
                    ArrayHelper::map(Blogcategory::find()
                        ->where(['type' => '0'])->all(),'id','title')
                    ,['options' => [$model->category=> ['Selected'=>'selected']]
                    , 'prompt' => 'Выберите категорию']);
                ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'thumb')->widget(KCFinderInputWidget::className(), [
                    'multiple' => false,
                ]); ?>
                <?php
                if($model->thumb){
                    echo '<img src="'.$model->thumb.'" width="200">';
                }
                ?>
                <?= $form->field($model, 'image')->widget(KCFinderInputWidget::className(), [
                    'multiple' => false,
                ]); ?>
                <?php
                if($model->image){
                    echo '<img src="'.$model->image.'" width="200">';
                }
                ?>
                <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'bellowing_conditions')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'options' => ['rows' => 6],
                        'allowedContent' => true,
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) ?>

                <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'order')->textInput() ?>

                <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>

            </div>
        </div>
    </div>

    <div class="form-group" style="margin-top:50px;">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

