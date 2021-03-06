<?
$this->registerCssFile('/frontend/web/css/clientsupport/style.css');
?>

<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Клиентская поддержка')?></p>
</div>


<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'Клиентская поддержка')?></h3>
    <p class="client-txt">
        <?=Yii::t('main-title', 'Уважаемый клиент')?>,
        <br>
        <br>
        <?=Yii::t('main-title', 'Если у Вас или Ваших близких застрахованных в  компании «Азия Life» произошёл страховой случай, пожалуйста, внимательно ознакомьтесь с данным разделом сайта и свяжитесь с нами как можно скорее.')?>
    </p>

    <div class="client-main-block">
        <div class="client-main_item">
            <h4 class="client-main-txt"><?=Yii::t('main-title', 'Если Вы являетесь Страхователем по договору')?>:</h4>

            <div class="client-item1">
                <h4 class="client-item-txt mt-5"><?=Yii::t('main-title', '1. сообщите о событии любым доступным способом')?>:</h4>
                <p class="client-txt1 mt-4"><?=Yii::t('main-title', 'по')?> e-mail: <a href="mailto: info@asia-life.kz">info@asia-life.kz</a></p>
                <p class="client-txt1"><?=Yii::t('main-title', 'по телефону')?>: <a href="https://wa.me/77712280607" target="_blank">+7 (771) 228 06 07</a></p>
                <p class="personal-cabinet"><a href="#"><?=Yii::t('main-title', 'В личном кабинете')?></a></p>
            </div>

            <div class="client-item2 mt-5">
                <h4 class="client-item-txt"><?=Yii::t('main-title', '2. Обратитесь в офис компании «Азия Life» в вашем городе.')?></h4>
                <p class="client-txt mt-4"><?=Yii::t('main-title', 'При наступлении страхового случая следует обязательно письменно уведомить компанию  о наступлении события, в сроки установленные договором страхования')?></p>
                <p class="client-txt"><?=Yii::t('main-title', 'Предоставить  документы,  подтверждающие страховой случай, в оответствии с перечнем указанном в договоре страхования')?></p>
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="client-main-block2 d-flex justify-content-between">
        <div class="client-card">
            <a href="/clientsupport/action-insured-event">
                <div class="card-item1">
                    <img src="/images/card1.png" alt="">
                    <p class="card-title1"><?=Yii::t('main-title', 'Действия')?>
                            <br><?=Yii::t('main-title', 'при наступлении')?>
                            <br><?=Yii::t('main-title', 'страхового случая')?></p>
                </div>
            </a>
        </div>

        <div class="client-card">
            <a href="/clientsupport/statement">
                <div class="card-item">
                    <img src="/images/card2.png" alt="">
                    <p class="card-title"><?=Yii::t('main-title', 'Заявления')?></p>
                </div>
            </a>
        </div>

        <div class="client-card">
            <a href="/clientsupport/faq">
                <div class="card-item">
                    <img src="/images/card3.png" alt="">
                    <p class="card-title"><?=Yii::t('main-title', 'Часто задаваемые')?>
                            <br><?=Yii::t('main-title', 'вопросы')?></p>
                </div>
            </a>
        </div>

        <div class="client-card">
            <a href="/terms">
                <div class="card-item">
                    <img src="/images/card4.png" alt="">
                    <p class="card-title"><?=Yii::t('main-title', 'Страховые термины')?></p>
                </div>
            </a>
        </div>

        <div class="client-card">
            <a href="/clientsupport/useful-tips">
                <div class="card-item">
                    <img src="/images/card5.png" alt="">
                    <p class="card-title"><?=Yii::t('main-title', 'Полезные советы')?></p>
                </div>
            </a>
        </div>
    </div>
</div>

