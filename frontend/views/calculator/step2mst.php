<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator"><?=Yii::t('main-title', 'Калькуляторы')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator/bolashak"><?=Yii::t('main-title', 'Азия Болашак')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Шаг 2')?></p>
</div>
<style>
    .text-calc3{
        width: 100%;
    }
</style>
<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">шаг 2. подтверждение </h3>
<div class=" d-flex flex-column align-items-center justify-content-center main-text">
    <div class="calc-block">
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                ИНФОРМАЦИЯ О ПОЛИСЕ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Программа страхования</span><br>
                    <span>Начало действия</span><br>
                    <span>Окончание дейс.</span><br>
                    <span>Дата рождения</span><br>
                    <span>Страна</span><br>
                    <?if(!empty($model->country2)){?>
                        <span>Страна</span><br>
                    <?}?>
                    <?if(!empty($model->country3)){?>
                        <span>Страна</span><br>
                    <?}?>
                    <span>Стр. сум., евро</span><br>
                    <span>Стр. прем., тенге</span><br>
                    <span>Курс евро на сег.</span><br>
                    <span>Стр. сум., тенге</span><br>
                    <span>Стр. прем., евро</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>
                        <? $array = [1 => 'однократная поездка', 2 => 'многократная поездка']; echo $array[$model->insuranceProgramm]; ?><br>
                        <?
                            if($model->insuranceProgramm == 2){
                                if($model->rprogSrok == 1)
                                    echo ' до 6 месяцев';
                                if($model->rprogSrok == 2)
                                    echo ' от 6 до 9 месяцев';
                                if($model->rprogSrok == 3)
                                    echo ' от 9 до 12 месяцев';

                                if($model->rprogMaxDays == 1)
                                    echo ' макс. 30 дней';
                                if($model->rprogMaxDays == 2)
                                    echo ' макс.  60 дней';
                                if($model->rprogMaxDays == 3)
                                    echo ' макс.  90 дней';
                                if($model->rprogMaxDays == 4)
                                    echo ' макс.  180 дней';
                            }
                        ?>
                    </span><br>
                    <span><?=date('d.m.Y', $model->beginDate)?></span><br>
                    <span><?=date('d.m.Y', $model->endDate)?></span><br>
                    <span><?=date('d.m.Y', $model->birthDate)?></span><br>
                    <span><? $countries = \common\models\Countries::find()->where('country_id = '.$model->country1)->one(); echo $countries->name?></span><br>
                    <?if(!empty($model->country2)){?>
                        <span><? $countries = \common\models\Countries::find()->where('country_id = '.$model->country2)->one(); echo $countries->name?></span><br>
                    <?}?>
                    <?if(!empty($model->country3)){?>
                        <span><? $countries = \common\models\Countries::find()->where('country_id = '.$model->country3)->one(); echo $countries->name?></span><br>
                    <?}?>
                    <span><b><?=$model->sumStrah?></b></span><br>
                    <span><b><?=$model->premKz?></b></span><br>
                    <span><b><?=$model->kurs?></b></span><br>
                    <span><b><?=$model->sumStrahKz?></b></span><br>
                    <span><b><?=$model->premEur?></b></span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                СТРАХОВАТЕЛЬ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Контактный тел.</span><br>
                    <span>E-mail</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$model->phone?></span><br>
                    <span><?=$model->email?></span><br>
                </div>
            </div>
        </div>
    </div>

    <form>
        <div class="check-wrap">
            <label>
                <input class="checkbox" type="checkbox" name="Step2Form[box1]">
                <span class="checkbox-custom"></span>
                <span class="label">С информацией о полисе согласен и ознакомлен</span>
            </label><br>

            <label>
                <input class="checkbox" type="checkbox" name="Step2Form[box2]">
                <span class="checkbox-custom"></span>
                <span class="label">С <a href="">Правилами страхования</a> ознакомлен и согласен</span>
            </label><br>

            <label>
                <input class="checkbox" type="checkbox" name="Step2Form[box3]">
                <span class="checkbox-custom"></span>
                <span class="label">Выражаю свое согласие АО "КСЖ «Азия Life" на обработку моих персональных данных</span>
            </label><br>

            <label>
                <input class="checkbox" type="checkbox" name="Step2Form[box4]">
                <span class="checkbox-custom"></span>
                <span class="label">Выражаю свое согласие АО "КСЖ «Азия Life" на информационное сопровождение по страховым и сопутствующим услугам</span>
            </label>
        </div>
    </form>

    <div class="calc-button">перейсти к оплате</div>
</div>