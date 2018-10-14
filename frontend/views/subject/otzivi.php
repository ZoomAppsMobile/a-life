<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Отзывы')?></p>
</div>
<div class="wrapper">
    <div class="main">
        <style>
            .message{
                text-align:left;
            }
        </style>
        <div style="color:green">
            <? echo Yii::$app->session->getFlash('success1'); ?>
        </div>
        <h1 class="client-review"><?=Yii::t('main-title', 'ОТЗЫВЫ КЛИЕНТОВ')?></h1>

        <div class="text-clients">
            <h2 class="text1"><?=Yii::t('main-title', 'Уважаемые клиенты')?>!</h2>
            <p class="text2">
                <?=Yii::t('main-title', 'Мы благодарим вас за отзывы и предложения, они помогают делать нашу работу еще лучше')?>!<br>
                <?=Yii::t('main-title', 'Вы можете задать любой вопрос, отправить отзыв или пожелание. Самые интересные и актуальные будут опубликованы на сайте')?>.
            </p>
        </div>
        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
            <div class="form">
                <p class="message"><?=Yii::t('main-title', 'Сообщение')?></p>
                <textarea class="message-textarea" name="Reviews[text]" class="message" required></textarea>
                <p class="message name"><?=Yii::t('main-title', 'ФИО')?></p>
                <input name="Reviews[fio]" class="form-name" type="text" required />
                <p class="message phone-num"><?=Yii::t('main-title', 'Телефон')?></p>
                <input name="Reviews[phone]" class="form-name" required />
                <p class="message phone-num">E-mail</p>
                <input name="Reviews[email]" class="form-name email" type="email" required />
                <input name="submit" class="btn-submit" type="submit" value="<?=Yii::t('main-title', 'ОТПРАВИТЬ ОТЗЫВ')?>" />
            </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div>
</div>