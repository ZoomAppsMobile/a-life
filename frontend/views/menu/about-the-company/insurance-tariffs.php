<link href="/css/strahovye-tarify/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href=""><?=Yii::t('main-title', 'Главная')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'О компании')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Документы и публикации')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Страховые тарифы')?></p>
</div>


<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'СТРАХОВЫе тарифы')?></h3>
    <p class="text1"><?=Yii::t('main-title', 'В Данном разделе Вы можете ознакомиться со страховыми тарифами, применяемыми в АО «КСЖ «Азия Life».')?></p>
    <div class="finance-block d-flex">
        <?$i = 1;foreach($model as $v){?>
            <a href="<?=$v->setLang('file');?>">
                <div class="tarif-item<?if($i!=1) echo 2;?>">
                    <div class="tarif-cell">
                        <img class="tarif-icon" src="/images/icon.png" alt="">
                        <p class="tarif-text"><?=$v->setLang('title');?></p>
                    </div>
                </div>
            </a>
        <?$i++;}?>
    </div>
</div>
