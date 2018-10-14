<link href="/st_sl_new/Normalizer.css" rel="stylesheet">
<link href="/st_sl_new/style.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
                <div class="main-wrapper">
                    <p class="bread">
                        <a class="main-a" href="/"><?=Yii::t('main-title', 'Главная')?></a> >
                        <p><?=Yii::t('main-title', 'Произошел страховой случай')?></p>
                    </p>
                    <h2><?=Yii::t('main-title', 'Произошел страховой случай')?></h2>
                    <p class="main-text1"><?=Yii::t('main-title', 'Уважаемые клиенты')?>!</p>
                    <p class="main-text1"><?=Yii::t('main-title', 'Если с вами произошел страховой случай')?>:</p>
                    <ol class="main-text2">
                        <li><?=Yii::t('main-title', 'Оставьте нам уведомление, и мы перезвоним вам для уточнения подробностей')?></li>
                        <li><?=Yii::t('main-title', 'Вы можете сообщить о наступлении страхового случая подав заявку в')?> <a class="danger" href="#"><?=Yii::t('main-title', 'личном кабинете')?></a></li>
                    </ol>
                    <h3><?=Yii::t('main-title', 'Данные застрахованного лица')?>:</h3>
                </div>
            </div>
        </div>
        <div class="container">
        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
            <div class="row input1">
                <div class="col-sm-4">
                    <p><?=Yii::t('main-title', 'Фамилия')?></p>
                    <input id="name1" type="text" name="InsuranceCase[name]">
                </div>
                <div class="col-sm-4">
                    <p><?=Yii::t('main-title', 'Имя')?></p>
                    <input id="name2" type="text" name="InsuranceCase[first_name]">
                </div>
                <div class="col-sm-4">
                    <p><?=Yii::t('main-title', 'Отчество')?></p>
                    <input id="name3" type="text" name="InsuranceCase[Last_name]">
                </div>
            </div>
            <div class="row input2">
                <div class="col-sm-3">
                    <p><?=Yii::t('main-title', 'Номер договора')?></p>
                    <input type="number" name="InsuranceCase[number]">
                </div>
                <div class="col-sm-3">
                    <p><?=Yii::t('main-title', 'Телефон')?></p>
                    <input type="tel" name="InsuranceCase[phone]">
                </div>
                <div class="col-sm-3">
                    <p>E-mail</p>
                    <input type="email" name="InsuranceCase[email]">
                </div>
                <div class="col-sm-3">
                    <p><?=Yii::t('main-title', 'ИИН')?></p>
                    <input type="number" name="InsuranceCase[iin]">
                </div>
            </div>
            <div class="row input3">
                <div class="col-sm-12">
                    <p><?=Yii::t('main-title', 'Сообщение')?></p>
                    <input type="text" name="InsuranceCase[text]">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <input class="button2" type="submit" value="<?=Yii::t('main-title', 'Сообщить о страховом случае')?>">
                    </p>
                </div>
            </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
        </div>
    </div></div>