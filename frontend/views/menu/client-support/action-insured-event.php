<div class="link-anchors d-flex mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/clientsupport"><?=Yii::t('main-title', 'Клиентская поддержка')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Действия при наступлении страхового случая')?></p>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?=Yii::t('main-title', 'Действия при наступлении страхового случая')?></h3>
<div class="rules d-flex flex-column">
    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <div data-aos="fade-up" class="badges-row d-flex flex-column align-items-center justify-content-around w-100">
            <?foreach($model as $v){?>
                <a href="<?=$v->doc?>" class="badge-pdf mt-4 d-flex align-items-center p-4">
                    <img class="mr-4" src="/images/rules-download.png" alt="">
                    <p class="text-center mt-2"><?=$v->setLang('title')?></p>
                </a>
            <?}?>
        </div>

    </div>
</div>