<link href="/css/documents_and_publications/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>"><?=Yii::t('main-title', 'О компании')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Документы и публикации')?></p>
</div>

<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'документы и публикации')?></h3>

    <div class="main-img">
        <img class="big-image" src="/images/main-img.png" alt="">
    </div>

    <div class="list mt-5">
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/financial-indicators" class="list-link"><?=Yii::t('main-title', 'ФИНАНСОВЫЕ ПОКАЗАТЕЛИ')?></a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/register-of-insurance-agents" class="list-link"><?=Yii::t('main-title', 'РЕЕСТР СТРАХОВЫХ АГЕНТОВ')?></a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/insurance-tariffs" class="list-link"><?=Yii::t('main-title', 'СТРАХОВЫЕ ТАРИФЫ')?></a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="" class="list-link"><?=Yii::t('main-title', 'ПРЕЗЕНТАЦИИ')?></a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/insurance-rules" class="list-link"><?=Yii::t('main-title', 'ПРАВИЛА СТРАХОВАНИЯ')?></a>
        </div>
    </div>
</div>
