<?php
$this->registerCssFile('/frontend/web/style_busines/style.css');
$this->registerCssFile('/frontend/web/css/news/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Результаты поиска')?></p>
</div>
<div data-aos="fade-up" class="about-stock d-flex flex-column aos-init aos-animate">
    <h3 class="text-uppercase mb-4">
        <?=Yii::t('main-title', 'Результаты поиска')?>
    </h3>

    <?foreach ($model_blog as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>

    <?$menu_id = [];foreach ($model_news as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?$menu_id[] = $v->id;}?>

    <?foreach ($AdditionalInsuranceCoverage as $v){ if(array_search($v->blog->id, $menu_id)===FALSE){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->blog->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->blog->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->blog->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->blog->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}$menu_id[] = $v->blog->id;}?>

    <?foreach ($AdditionalProtectionInsurer as $v){ if(array_search($v->blog->id, $menu_id)===FALSE){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->blog->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->blog->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->blog->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->blog->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}$menu_id[] = $v->blog->id;}?>

    <?foreach ($BasicInsuranceCoverage as $v){ if(array_search($v->blog->id, $menu_id)===FALSE){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->blog->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->blog->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->blog->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->blog->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}$menu_id[] = $v->blog->id;}?>

    <?foreach ($ChildsInsuranceCoverage as $v){ if(array_search($v->blog->id, $menu_id)===FALSE){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->blog->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->blog->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->blog->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->blog->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}$menu_id[] = $v->blog->id;}?>

    <?foreach ($Faq as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('answer'), 800)?></p>
                    <a class="more-info" href="/faq"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>

    <?foreach ($Menu as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('name')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('text'), 800)?></p>
                    <a class="more-info" href="/<?=$v->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>

    <?foreach ($NewVacancy as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('content'), 800)?></p>
                    <a class="more-info" href="/careers/<?=$v->id?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>

    <?foreach ($Pravlenie as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->img?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('name')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('position'), 800)?></p>
                    <a class="more-info" href="/governance"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?break;}?>

    <?foreach ($Term as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('description'), 800)?></p>
                    <a class="more-info" href="/terms"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>
</div>