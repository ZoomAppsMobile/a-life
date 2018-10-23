<link rel='stylesheet' href='/css/step2/style.css'/>
<style>
    .error-summary{
        color:red;
    }
</style>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="">Главная <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Частным клиентам <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Калькулятор</a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">Шаг 2. Оформление полиса</h3>
</div>
<?
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); //['action' => '/calculator/mst/step3']?>
<div class="form form-asia d-flex flex-column">
    <div class="d-flex flex-md-row flex-column justify-content-between mb-5">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">Полис</h4>
        </div>
        <div class="all-inputs d-flex flex-column">
            <?= $form->errorSummary($model); ?>
            <div class="input-form1 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input2"><?=Yii::t('main-title', 'Программа страхования')?></label>
                    <select name="Step2polis[insuranceProgramm]" class="insuranceProgramm form-control" id="input2" >
                        <option value="0"></option>
                        <option value="1" <?if($model->insuranceProgramm == 1) echo 'selected'?>><?=Yii::t('main-title', 'однократная поездка')?></option>
                        <option value="2" <?if($model->insuranceProgramm == 2) echo 'selected'?>><?=Yii::t('main-title', 'многократная поездка')?></option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input2"><?=Yii::t('main-title', 'Продолжительность страхования')?></label>
                    <select name="Step2polis[rprogSrok]" <?if($model->insuranceProgramm == 1) echo 'disabled'?> class="rprogSrok form-control" id="input3" >
                        <option value="0"></option>
                        <option value="1" <?if($model->rprogSrok == 1&&$model->insuranceProgramm == 2) echo 'selected'?>><?=Yii::t('main-title', 'до')?> 6 <?=Yii::t('main-title', 'месяцев')?></option>
                        <option value="2" <?if($model->rprogSrok == 2&&$model->insuranceProgramm == 2) echo 'selected'?>><?=Yii::t('main-title', 'от')?> 6 <?=Yii::t('main-title', 'до')?> 9 <?=Yii::t('main-title', 'месяцев')?></option>
                        <option value="3" <?if($model->rprogSrok == 3&&$model->insuranceProgramm == 2) echo 'selected'?>><?=Yii::t('main-title', 'от')?> 9 <?=Yii::t('main-title', 'до')?> 12 <?=Yii::t('main-title', 'месяцев')?></option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input3"><?=Yii::t('main-title', 'Макс. кол-во дней за границей')?></label>
                    <select name="Step2polis[rprogMaxDays]" <?if(!$model->rprogSrok) echo 'disabled';elseif($model->rprogSrok!=1) echo 'style="display:none;"'?> id="input3" class="rprogMaxDays1 form-control" >
                        <option value="0"></option>
                        <option value="1" <?if($model->rprogMaxDays == 1&&$model->rprogSrok) echo 'selected'?>>30</option>
                        <option value="2" <?if($model->rprogMaxDays == 2&&$model->rprogSrok) echo 'selected'?>>60</option>
                    </select>
                    <select name="Step2polis[rprogMaxDays]" <?if($model->rprogSrok!=2) echo 'style="display:none;"'?> id="input3" class="rprogMaxDays2 form-control" >
                        <option value="0"></option>
                        <option value="1" <?if($model->rprogMaxDays == 1&&$model->rprogSrok) echo 'selected'?>>30</option>
                        <option value="2" <?if($model->rprogMaxDays == 2&&$model->rprogSrok) echo 'selected'?>>60</option>
                        <option value="3" <?if($model->rprogMaxDays == 3&&$model->rprogSrok) echo 'selected'?>>90</option>
                    </select>
                    <select name="Step2polis[rprogMaxDays]" <?if($model->rprogSrok!=3) echo 'style="display:none;"'?> id="input3" class="rprogMaxDays3 form-control" >
                        <option value="0"></option>
                        <option value="1" <?if($model->rprogMaxDays == 1&&$model->rprogSrok) echo 'selected'?>>30</option>
                        <option value="2" <?if($model->rprogMaxDays == 2&&$model->rprogSrok) echo 'selected'?>>60</option>
                        <option value="3" <?if($model->rprogMaxDays == 3&&$model->rprogSrok) echo 'selected'?>>90</option>
                        <option value="3" <?if($model->rprogMaxDays == 4&&$model->rprogSrok) echo 'selected'?>>180</option>
                    </select>
                </div>
            </div>

            <div class="input-form2 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input4">Тип лица</label>
                    <select class="form-control" id="input1" name="Step2polis[tipe_lica]">
                        <option></option>
                        <option value="1" <?if($model->tipe_lica==1) echo 'selected'?>>Физическое</option>
                        <option value="2" <?if($model->tipe_lica==2) echo 'selected'?>>Юридическое</option>
                    </select>
                </div>

                <div class="d-flex flex-column">
                    <label for="input5">Начало действия</label>
                    <div class="d-flex w-100">
                        <input value="<?=date('Y-m-d', $model->beginDate)?>" class="form-control w-50" type="date" id="input5"  name="Step2polis[beginDate]">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="input5">Окончание действия</label>
                    <div class="d-flex w-100">
                        <input value="<?=date('Y-m-d', $model->endDate)?>" class="form-control w-50" type="date" id="input6"  name="Step2polis[endDate]">
                    </div>
                </div>
<!--                <div class="d-flex flex-column">-->
<!--                    <label for="input7">Выберите страну</label>-->
<!--                    <select class="form-control" id="input7" >-->
<!--                        <option></option>-->
<!--                        <option>2</option>-->
<!--                        <option>3</option>-->
<!--                        <option>4</option>-->
<!--                        <option>5</option>-->
<!--                    </select>-->
<!--                </div>-->
            </div>
            <div class="input-form3 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input8"><?=Yii::t('main-title', 'Страна 1')?></label>
                    <select class="form-control" id="input8" name="Step2polis[country1]" >
                        <option value="0"></option>
                        <? foreach($country as $v){ ?>
                            <option value="<?=$v->country_id?>" <?if($model->country1==$v->country_id) echo 'selected'?>><?=$v->name?></option>
                        <? } ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input9"><?=Yii::t('main-title', 'Страна 2')?></label>
                    <select class="form-control" id="input9" name="Step2polis[country2]" >
                        <option value="0"></option>
                        <? foreach($country as $v){ ?>
                            <option value="<?=$v->country_id?>" <?if($model->country2==$v->country_id) echo 'selected'?>><?=$v->name?></option>
                        <? } ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input10"><?=Yii::t('main-title', 'Страна 3')?></label>
                    <select class="form-control" id="input10" name="Step2polis[country3]" >
                        <option value="0"></option>
                        <? foreach($country as $v){ ?>
                            <option value="<?=$v->country_id?>" <?if($model->country3==$v->country_id) echo 'selected'?>><?=$v->name?></option>
                        <? } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-md-row flex-column justify-content-between mb-5">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">СТРАХОВАТЕЛь</h4>
        </div>
        <div class="all-inputs d-flex flex-column">
            <?= $form->errorSummary($step2strahovatel); ?>
            <div class="input-form4 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input11">Бин</label>
                    <input class="form-control" type="text" id="input11" value="<?=$step2strahovatel->bin?>" name="Step2strahovatel[bin]">
                </div>
            </div>

            <div class="input-form5 w-100 d-flex mb-4">
                <div class="form-check mr-4">
                    <input class="form-check-input" type="radio" <?if($step2strahovatel->resident==0) echo 'checked'?> name="Step2strahovatel[resident]" id="input12" value="0"
                           >
                    <label class="form-check-label" for="input12">
                        Резидент
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" <?if($step2strahovatel->resident==1) echo 'checked'?> name="Step2strahovatel[resident]" id="input13" value="1">
                    <label class="form-check-label" for="input13">
                        Не резидент
                    </label>
                </div>
            </div>
            <div class="input-form6 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input14">Наименование</label>
                    <input class="form-control" type="text" id="input14" value="<?=$step2strahovatel->naimenivanie?>" name="Step2strahovatel[naimenivanie]" >
                </div>
                <div class="d-flex flex-column">
                    <label for="input15">Лицензия</label>
                    <input class="form-control" type="text" id="input15" value="<?=$step2strahovatel->licenzia?>" name="Step2strahovatel[licenzia]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input16">Вид экономической деятельности</label>
                    <input class="form-control" type="text" id="input16" value="<?=$step2strahovatel->vid_ec_deyat?>" name="Step2strahovatel[vid_ec_deyat]">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-md-row flex-column justify-content-between mb-5">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">Контактные данные</h4>
            <p><span class="font-weight-bold">Обратите особое внимание:</span> на указанную электронную почту/адрес
                места жительства будет выслан ваш договор!
                Указывайте только доставерный адрес</p>
        </div>
        <div class="all-inputs d-flex flex-column">
            <?= $form->errorSummary($step2kont_dannie_str); ?>
            <div class="input-form9 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input17">Регион</label>
                    <select class="form-control" id="input17"  name="Step2kontDannieStr[region]">
                        <option></option>
                        <option value="1" <?if($step2kont_dannie_str->region==1) echo 'selected'?>>1</option>
                        <option value="2" <?if($step2kont_dannie_str->region==2) echo 'selected'?>>2</option>
                        <option value="3" <?if($step2kont_dannie_str->region==3) echo 'selected'?>>3</option>
                        <option value="4" <?if($step2kont_dannie_str->region==4) echo 'selected'?>>4</option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input18">Адрес местожительства</label>
                    <input class="form-control" type="text" id="input18" value="<?=$step2kont_dannie_str->address?>" name="Step2kontDannieStr[address]">
                </div>
            </div>
            <div class="input-form12 w-100 d-flex flex-md-row flex-column">
                <div class="d-flex flex-column mr-4">
                    <label for="input19">Код сект. эк.</label>
                    <input class="form-control" type="text" id="input19" value="<?=$step2kont_dannie_str->kod_sect_ec?>" name="Step2kontDannieStr[kod_sect_ec]">
                </div>
                <div class="d-flex flex-column mr-4">
                    <label for="input20">Контактный телефон</label>
                    <input class="form-control" type="text" id="input20" value="<?=$step2kont_dannie_str->phone?>" name="Step2kontDannieStr[phone]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input21">E-mail</label>
                    <input class="form-control" type="text" id="input21" value="<?=$step2kont_dannie_str->email?>" name="Step2kontDannieStr[email]">
                </div>
            </div>
            <div class="input-form12 w-100 d-flex flex-md-row flex-column mb-0">
                <div class="d-flex flex-column mr-4">
                    <label for="input22">Наименование банка</label>
                    <input class="form-control" type="text" id="input22" value="<?=$step2kont_dannie_str->naim_banka?>" name="Step2kontDannieStr[naim_banka]">
                </div>
                <div class="d-flex flex-column mr-4">
                    <label for="input23">БИК</label>
                    <input class="form-control" type="text" id="input23" value="<?=$step2kont_dannie_str->bik?>" name="Step2kontDannieStr[bik]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input24">Расчетный счет</label>
                    <input class="form-control" type="text" id="input24" value="<?=$step2kont_dannie_str->rasch_kod?>" name="Step2kontDannieStr[rasch_kod]">
                </div>
            </div>
        </div>
    </div>



    <hr>


    <div class="d-flex flex-md-row flex-column justify-content-between mb-5">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">ЗАСТРАХОВАННый</h4>
            <p class="text">Одно лицо</p>
        </div>
        <div class="all-inputs d-flex flex-column">
            <?= $form->errorSummary($step2zastrahovanniy); ?>
            <div class="input-form4 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input25">ИИН</label>
                    <input class="form-control" type="text" id="input25" value="<?=$step2zastrahovanniy->iin?>" name="Step2zastrahovanniy[iin]">
                </div>
            </div>

            <div class="input-form5 w-100 d-flex flex-md-row flex-column mb-4">
                <div class="form-check mr-4">
                    <input class="form-check-input" type="radio" <?if($step2zastrahovanniy->resident==0) echo 'checked'?> name="Step2zastrahovanniy[resident]" id="input26" value="0"
                           >
                    <label class="form-check-label" for="input26">
                        Резидент
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" <?if($step2zastrahovanniy->resident==1) echo 'checked'?> name="Step2zastrahovanniy[resident]" id="input27" value="1">
                    <label class="form-check-label" for="input27">
                        Не резидент
                    </label>
                </div>
            </div>

            <div class="input-form7 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input31">Фамилия на латинице</label>
                    <input class="form-control" type="text" id="input31" value="<?=$step2zastrahovanniy->familia?>" name="Step2zastrahovanniy[familia]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input32">Имя на латинице</label>
                    <input class="form-control" type="text" id="input32" value="<?=$step2zastrahovanniy->ima?>" name="Step2zastrahovanniy[ima]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input33">Отчество на латинице</label>
                    <input class="form-control" type="text" id="input33" value="<?=$step2zastrahovanniy->otchetvo?>" name="Step2zastrahovanniy[otchetvo]">
                </div>
            </div>

            <div class="input-form8 w-100 d-flex flex-column mb-4">
                <label for="">Пол</label>
                <div class="d-flex">
                    <div class="form-check mr-4">
                        <input class="form-check-input" type="radio" <?if($step2zastrahovanniy->pol==1) echo 'checked'?> name="Step2zastrahovanniy[pol]" id="input34" value="1"
                               >
                        <label class="form-check-label" for="input34">
                            Мужской
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" <?if($step2zastrahovanniy->pol==2) echo 'checked'?> name="Step2zastrahovanniy[pol]" id="input35" value="2">
                        <label class="form-check-label" for="input35">
                            Женский
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-md-row flex-column justify-content-between mb-5">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">Контактные данные</h4>
            <p><span class="font-weight-bold">Обратите особое внимание:</span> на указанную электронную почту/адрес
                места жительства будет выслан ваш договор!
                Указывайте только доставерный адрес</p>
        </div>
        <div class="all-inputs d-flex flex-column">
            <?= $form->errorSummary($step2kont_dannie_zas); ?>
            <div class="input-form9 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input36">Регион</label>
                    <select class="form-control" id="input36"  name="Step2kontDannieZas[region]">
                        <option></option>
                        <option value="1" <?if($step2kont_dannie_zas->region==1) echo 'selected'?>>1</option>
                        <option value="2" <?if($step2kont_dannie_zas->region==2) echo 'selected'?>>2</option>
                        <option value="3" <?if($step2kont_dannie_zas->region==3) echo 'selected'?>>3</option>
                        <option value="4" <?if($step2kont_dannie_zas->region==4) echo 'selected'?>>4</option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input37">Адрес местожительства</label>
                    <input class="form-control" type="text" id="input37" value="<?=$step2kont_dannie_zas->address?>" name="Step2kontDannieZas[address]">
                </div>
            </div>
            <div class="input-form10 w-100 d-flex flex-md-row flex-column">
                <div class="d-flex flex-column mr-4">
                    <label for="input38">Контактный телефон</label>
                    <input class="form-control" type="text" id="input38" value="<?=$step2kont_dannie_zas->phone?>" name="Step2kontDannieZas[phone]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input39">E-mail</label>
                    <input class="form-control" type="text" id="input39" value="<?=$step2kont_dannie_zas->email?>" name="Step2kontDannieZas[email]">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-md-row flex-column justify-content-between mb-3">
        <div class="info-input d-flex flex-column">
            <h4 class="text-uppercase">Паспортные данные </h4>
        </div>
        <div class="all-inputs d-flex flex-column">
            <div class="input-form11 w-100 d-flex flex-md-row flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <label for="input40">Вид документа</label>
                    <select class="form-control" id="input40"  name="Step2kontDannieZas[vid_documenta]">
                        <option value="0"></option>
                        <option value="1" <?if($step2kont_dannie_zas->vid_documenta==1) echo 'selected'?>>1</option>
                        <option value="2" <?if($step2kont_dannie_zas->vid_documenta==2) echo 'selected'?>>2</option>
                        <option value="3" <?if($step2kont_dannie_zas->vid_documenta==3) echo 'selected'?>>3</option>
                        <option value="4" <?if($step2kont_dannie_zas->vid_documenta==4) echo 'selected'?>>4</option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="input41">Серия и номер паспорта</label>
                    <div class="double-input d-flex w-100">
                        <input class="form-control" type="text" id="input41" value="<?=$step2kont_dannie_zas->seria?>" name="Step2kontDannieZas[seria]">
                        <input class="form-control" type="text" id="input42" value="<?=$step2kont_dannie_zas->nomer?>" name="Step2kontDannieZas[nomer]">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="input43">Дата выдачи</label>
                    <input class="form-control" type="date" id="input43" value="<?=$step2kont_dannie_zas->data_vidachi?>" name="Step2kontDannieZas[data_vidachi]">
                </div>
                <div class="d-flex flex-column">
                    <label for="input44">Кем выдано</label>
                    <input class="form-control" type="text" id="input44" value="<?=$step2kont_dannie_zas->kem_vidan?>" name="Step2kontDannieZas[kem_vidan]">
                </div>
            </div>
        </div>
    </div>
    <div class="fourth-row d-flex flex-md-row flex-column justify-content-between my-4 p-3">
        <div class="last-dynamic d-flex flex-column">
            <label>Страховая сумма, евро</label>
            <p class="form-control"><?=$model_old_step->sumStrah?></p>
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label><?=Yii::t('main-title', 'Курс евро на сегодня')?></label>
            <p class="form-control"><?=$model_old_step->kurs?></p>
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label><?=Yii::t('main-title', 'Страховая сумма, тенге')?></label>
            <p class="form-control"><?=$model_old_step->sumStrahKz?></p>
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label><?=Yii::t('main-title', 'Страховая премия, евро')?></label>
            <p class="form-control"><?=$model_old_step->premEur?></p>
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label><?=Yii::t('main-title', 'Страховая премия, тенге')?></label>
            <p class="form-control"><?=$model_old_step->premKz?></p>
        </div>
    </div>

    <div class="fifth-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <div class="d-flex align-items-center mb-4">
                <input type="file" class="form-control-file" id="input45" >
                <p class="ml-3 add-document-text">прикрепите скан документа <br> удостоверяющего личность</p>
            </div>
            <p> *Все поля обязательны для заполнения!</p>
        </div>
        <button class="text-uppercase">оформить полис</button>
    </div>
</div>
<?php ActiveForm::end(); ?>