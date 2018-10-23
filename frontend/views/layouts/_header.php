<div class="header">
    <div class="header__row">
        <div class="logo">
            <img class="logo-icon" src="/image/logo.png" alt="logo">
        </div>

        <div class="header__cell">
            <div class="header__contacts">
                <div class="phone-block">
                    <img src="/img/phone-icon.png" alt="" class="phone-icon">
                    <a class="contacts__text" href="tel:+77712280607">+7 (771) 228 06 07</a>
                    <p class="bell-block"><a class="order-bell" href=""><?=Yii::t('main-title', 'Заказать звонок');?></a></p>
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
                <div class="header__cell-2">
<!--                    <button class="btn-lang">-->
<!--                        RU-->
<!--                    </button>-->
                    <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
                        <option value="/lang/ru" <?php if(\Yii::$app->session->get('lang')==''){ echo 'selected'; } ?>>RU</option>
                        <option value="/lang/kz" <?php if(\Yii::$app->session->get('lang')=='_kz'){ echo 'selected'; } ?>>KZ</option>
                        <option value="/lang/en" <?php if(\Yii::$app->session->get('lang')=='_en'){ echo 'selected'; } ?>>EN</option>
                    </select>

                    <form class="d-flex search-form align-items-center" action="/search">
                        <input class="search" type="text" name="search" placeholder="Поиск">
                    </form>

                    <div class="signin">
                        <img src="img/pers-icon.png" alt="" class="pers-icon">
                        <a class="personal" href="#"><?=Yii::t('main-label', 'Личный кабинет')?></a>
                        <div style="position: relative;top:10px;left:-45px;font-size:14px;">
                            <a class="cabinet" href="/site/logout" style="">
                                <?if(\Yii::$app->user->id){?>
                                    <span>
                                        <?=Yii::t('main-label', 'Выход');?>
                                    </span>
                                <?}?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav__btn">
                    <button data-target="#nav_main" type="button" class="btn-nav">
                        <span class="btn-nav__line"></span>
                        <span class="btn-nav__line"></span>
                        <span class="btn-nav__line"></span>
                    </button>
                </div>
            </div>

            <?= \frontend\widgets\MenuWidget::widget() ?>
        </div>
    </div>
</div>