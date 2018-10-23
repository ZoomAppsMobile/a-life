<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use backend\models\Banner;
use yii\db\Expression;
AppAsset::register($this);
if (!\Yii::$app->session->get('lang')){
    \Yii::$app->session->set('lang', '');
}
$banner=Banner::find()
            ->where(['main' => '0'])
            ->orderBy(new Expression('rand()'))
            ->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
<!--    --><?//=$this->render('_header');?>
    <div class="header1 d-none d-md-flex justify-content-between">
    <a href="/"><img class="logo" src="/image/logo.png" alt=""></a>
    <div class="d-flex flex-column">
        <div class="top-bar d-flex align-items-center">
            <div class="phone-and-map d-flex flex-column mr-4">
                <div class="d-flex align-items-center">
                    <img src="/image/header-phone.png" alt="">
                    <a href="tel:+77712280607">+7 (771) 228 06 07</a>
                </div>
<!--                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--                    --><?//=Yii::t('main-title', 'Заказать звонок');?>
<!--                </button>-->
                <a class="pink-text" data-toggle="modal" data-target="#exampleModal">
                    <span>
                        <?=Yii::t('main-title', 'Заказать звонок');?>
                    </span>
                </a>
            </div>
            <div class="phone-and-map d-flex flex-column">
                <div class="d-flex align-items-center">
                    <img src="/image/header-map.png" alt="">
                    <a id="office-city"><?php
                            echo Yii::t('main-title', 'Астана');
                        ?></a>
                </div>
                <a class="pink-text" href="" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>
                        <?php
                            echo Yii::t('main-title', 'офисы в вашем городе');
                        ?>
                    </span>
                </a>
                <div class="dropdown-menu ddn-cont" data-offset="1" aria-labelledby="dLabel">
                    <div class="ddn-cont-wrap">
                        <div class="ddn-cont-top d-flex justify-content-between">
                            <h3 class="text-uppercase"><?=Yii::t('main-title', 'выберите ваш город');?></h3>
                            <div class="close"><a href="">X</a></div>
                        </div>

                        <form class="d-flex search-form align-items-center" action="/search">
                            <input type="text" name="text">
                            <button><img src="public/images/header-search1.png" alt=""></button>
                        </form>
                        <div class="ddn-cont-citys d-flex justify-content-between">
                            <? $city = \common\models\City::find()->all(); ?>
                            <? $count_city = count($city);$ul = 1; foreach($city as $k => $v){ $var = 'name'.\Yii::$app->session->get('lang')?>
                                <?if($ul == 1){?>
                                    <ul class="border-right">
                                <?$ul++;}elseif($count_city - $k <= $count_city / 2 && !$ul2){?>
                                    </ul>
                                    <ul>
                                <?$ul2 = 1;}?>
                                        <li><a href="/office?id=<?=$v->id?>"><?=$v->$var?></a></li>
                            <?}?>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
            <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
              <option value="/lang/ru" <?php if(\Yii::$app->session->get('lang')==''){ echo 'selected'; } ?>>RU</option>
              <option value="/lang/kz" <?php if(\Yii::$app->session->get('lang')=='_kz'){ echo 'selected'; } ?>>KZ</option>
              <option value="/lang/en" <?php if(\Yii::$app->session->get('lang')=='_en'){ echo 'selected'; } ?>>EN</option>
            </select>
            <form class="d-flex search-form align-items-center" action="/search">
                <input type="text" name="text">
                <button><img src="/image/header-search.png" alt=""></button>
            </form>
            <?= \frontend\widgets\MenuWidget::widget() ?>
    </div>
</div>
        <?= Alert::widget() ?>
        <?= $content ?> 
<div data-aos="fade-up" class="banners d-flex justify-content-center my-5">
    <img class="banner" src="<?=$banner->image?>" alt="">
</div>

<?= \frontend\widgets\FooterMenuWidget::widget() ?>
<p class="footer-copyright text-center">
    <?=Yii::t('main-title', '©2018. Все права защищены. Перепечатка и использование материалов данного сайта допускается только при условии
    активной гиперссылки на источник и только с письменного разрешения АО «КСЖ «Азия Life»');?>
</p>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="/frontend/web/image/close.png" alt="">
                </button>
            </div>
            <div class="modal-body">
                <h3>Заказать звонок</h3>
                <div class="callback-error" style="color:red;"></div>
                <form class="modal-form" action="">
                    <p>Введите номер телефона</p>
                    <input id="phone" class="input-call callback-phone" type="tel" name="call-phone">
                    <p class="mt-3">Введите ваше имя</p>
                    <input class="input-name callback-name" type="text" name="name">
                </form>
            </div>
            <div class="modal-footer">
                <button class="send-btn callback" type="submit" name="send-button">
                    Отправить
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog feedcall-dialog" role="document">
        <div class="modal-content feedcall-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/close.png" alt="">
                </button>
            </div>
            <div class="feedcall-blocks d-flex">
                <div class="feedcall__block1 col-lg-6">
                    <h3>Написать нам</h3>
                    <form class="modal-form" action="">
                        <p class="mt-3">Имя</p>
                        <input class="input-name" type="text" name="name">
                        <p class="mt-3">Телефон</p>
                        <input id="phone2"  class="input-call" type="tel" name="call-phone">
                        <p class="mt-3">Тема</p>
                        <input class="input-name" type="text" name="theme">
                        <p class="mt-3">Cообщение</p>
                        <textarea class="msg" name="msg"></textarea>
                    </form>

                    <div class="text-center">
                        <button class="send-btn2 mt-4" type="submit" name="send-button">
                            Отправить
                        </button>
                    </div>

                    <ul class="feedcall-social d-flex justify-content-between">
                        <li class="social-items">
                            <a href="#"><img src="img/messanger.png"></a>
                            <p>Messenger</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/viber.png"></a>
                            <p>Viber</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/whatsapp.png"></a>
                            <p>WhatsApp</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/telegram.png"></a>
                            <p>Telegram</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/skype.png"></a>
                            <p>Skype</p>
                        </li>
                    </ul>
                </div>
                <div class="feedcall__block2 col-lg-6">
                    <h3>Поделиться</h3>
                    <p class="feedcall__block2_txt">в социальных сетях</p>
                    <ul class="feedcall-social2 d-flex justify-content-between">
                        <li class="social-items">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=Yii::$app->params['sait']?>"><img src="img/vk.png"></a>
                            <p>Facebook</p>
                        </li>
                        <li class="social-items">
                            <a target="_blank" href="http://vk.com/share.php?url=<?=Yii::$app->params['sait']?>&noparse=true"><img src="img/fb.png"></a>
                            <p>Vk</p>
                        </li>
                        <li class="social-items">
                            <a target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?=Yii::$app->params['sait']?>"><img src="img/odnoklassniki.png"></a>
                            <p>Odnoklassniki</p>
                        </li>
                    </ul>
                    <h3 class="mt-5">Присоединиться</h3>
                    <p class="feedcall__block2_txt">к нам в социальных сетях</p>
                    <ul class="feedcall-social3 d-flex justify-content-between">
                        <li class="social-items">
                            <a href="#"><img src="img/messanger.png"></a>
                            <p>Messenger</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/viber.png"></a>
                            <p>Viber</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/whatsapp.png"></a>
                            <p>WhatsApp</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/telegram.png"></a>
                            <p>Telegram</p>
                        </li>
                        <li class="social-items">
                            <a href="#"><img src="img/skype.png"></a>
                            <p>Skype</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
