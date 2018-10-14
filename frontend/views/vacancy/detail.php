<?php
$this->registerCssFile('/frontend/web/css/vacancydetail/style.css');
?>
<?if($vacancy->id==1){?>
<link href="/vacancy/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/careers"><?=Yii::t('main-title', 'Вакансии')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?php
        echo $vacancy->setLang('title');
        ?></p>
</div>
<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">
    <?php
        echo $vacancy->setLang('title');
    ?>
</h3>

<div class="asia-life-30 d-flex flex-column mt-4">

    <div class="facts-with-dots d-flex flex-column mt-2">

        <?php
            echo $vacancy->setLang('content');
        ?>

    </div>

        <?php $form = \yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => "form-class d-flex flex-column mt-4 p-4"]]) ?>
        <input type="hidden" value="<?=$vacancy['id']?>" name="AreDistinguished[vacancy_id]">
        <div class="input-form1 w-100 d-flex flex-md-row flex-column justify-content-between">
            <div class="d-flex flex-column">
                <label for="input1"><?=Yii::t('main-title', 'ФИО')?></label>
                <input name="AreDistinguished[fio]" class="form-control" type="text" id="input1" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input2"><?=Yii::t('main-title', 'Дата рождения')?></label>
                <input name="AreDistinguished[date_of_birth]" class="form-control" type="date" id="input2" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input3"><?=Yii::t('main-title', 'Город')?></label>
                <input name="AreDistinguished[city]" class="form-control" type="text" id="input3" required>
            </div>
        </div>
        <div class="input-form2 w-100 d-flex flex-md-row flex-column justify-content-between">
            <div class="d-flex flex-column">
                <label for="input4"><?=Yii::t('main-title', 'Телефон')?></label>
                <input name="AreDistinguished[phone]" class="form-control" type="text" id="input4" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input5"><?=Yii::t('main-title', 'Электронный адрес')?></label>
<!--                --><?//= $form->field($model, 'phone')->textInput(['class' => 'form-control', 'id' => 'input4', 'required' =>'required'])->label(false); ?>
                <input name="AreDistinguished[email]" class="form-control" type="text" id="input5" required>
            </div>
            <div class="d-flex align-items-end">
                <input name="AreDistinguished[doc]" type="file" class="form-control-file" id="input6" required>
                <p class="ml-3 add-document-text"><?=Yii::t('main-title', 'Прикрепить резюме')?> <br>
                    <?=Yii::t('main-title', 'Принимаются')?> pdf, doc, docs,txt</p>
            </div>
        </div>

        <div class="input-form3 w-100 d-flex flex-md-row flex-column justify-content-between">
            <fieldset class="d-flex flex-column">
                <label for=""><?=Yii::t('main-title', 'Есть ли у вас опыт работы в страховании')?>?</label>
                <div class="toggle">
                    <input name="AreDistinguished[opit_1]" type="radio" name="haveExp" value="1" id="input7" checked="checked" />
                    <label for="input7"><?=Yii::t('main-title', 'ДА')?></label>
                    <input name="AreDistinguished[opit_1]" type="radio" name="haveExp" value="0" id="input8" />
                    <label for="input8"><?=Yii::t('main-title', 'НЕТ')?></label>
                </div>
            </fieldset>
            <fieldset class="d-flex flex-column">
                <label for=""><?=Yii::t('main-title', 'Есть ли у вас опыт работы в продажах')?>?</label>
                <div class="toggle">
                    <input name="AreDistinguished[opit_2]" type="radio" name="salesExp" value="1" id="input9" checked="checked" />
                    <label for="input9"><?=Yii::t('main-title', 'ДА')?></label>
                    <input name="AreDistinguished[opit_2]" type="radio" name="salesExp" value="0" id="input10" />
                    <label for="input10"><?=Yii::t('main-title', 'НЕТ')?></label>
                </div>
            </fieldset>
            <div class="d-flex">
                <button type="submit" class="text-uppercase"><?=Yii::t('main-title', 'отправить заявку')?></button>
            </div>
        </div>
    <?php \yii\widgets\ActiveForm::end() ?>
</div>
<?}else{?>
    <div class="link-anchors d-flex flex-md-row flex-column my-4">
        <a href=""><?=Yii::t('main-title', 'Главная')?><img src="/image/link-arrow-right.png" alt=""></a>
        <a href="/careers"><?=Yii::t('main-title', 'Вакансии')?><img src="/image/link-arrow-right.png" alt=""></a>
        <p href=""><?=Yii::t('main-title', 'Риск-менеджер')?></p>
    </div>

    <div data-aos="fade-up" class="about-stock d-flex flex-column">
        <h3  class="text-uppercase mb-4"><?=Yii::t('main-title', 'Риск-менеджер')?></h3>

        <ul class="vacancy-block">
            <li class="vacancy-item"><span><?=Yii::t('main-title', 'Выполнять задачи в соответствии с целями и задачами Компании по организации и функционированию системы управления рисками, в соответствии с законодательными')?>...</span></li>
            <li class="vacancy-item"><span><?=Yii::t('main-title', 'Иметь высшее экономическое или финансовое образование. Знать основы законодательства и нормативных правовых актов, регламентирующие страховую деятельность, основы бухгалтерского учета, практику')?>...</span></li>
        </ul>

        <div data-aos="fade-up" class="wrapper-2">
            <div  class="banners d-flex justify-content-center my-5">
                <img class="banner" src="public/images/banner.png" alt="">
            </div>

            <div class="icon-block">
                <img src="public/images/icon.png" alt="">
            </div>
        </div>
    </div>
<?}?>
