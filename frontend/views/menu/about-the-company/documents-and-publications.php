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
    <style>
        .document-link>a {
            color: #ae4872 !important;
            font-family: 'Pragmatica', sans-serif;
            font-size: 1.2rem;
            font-weight: 300;
        }
        .document-link {
            margin: 1.4rem 0.5rem;
        }
        .document-item {
            padding: 0.5rem 1rem;
            width: 270px;
            height: 90px;
            border: 3px solid #d9dde1;
            border-radius: 0.4rem;
        }
        .your-profit h3 {
            font-family: 'pragmatica-cyrillic', sans-serif;
            font-size: 1.5rem;
            color: #9f074f;
            font-weight: 100;
        }
    </style>
    <div data-aos="fade-up" class="your-profit d-flex flex-column my-4">
        <h3 data-aos="fade-up" class="text-uppercase my-3"><?=Yii::t('main-title', 'Документы')?>:</h3>
        <div class="d-flex justify-content-between flex-md-row flex-column">
            <? $i = 1;$docs = \common\models\Docs::find()->orderBy('sort')->all(); ?>
            <?foreach($docs as $v){?>
                <div class="document-item d-flex">
                    <div class="img-block"><img class="document-img" src="/images/doc<?=$i?>.png" alt=""></div>
                    <p class="document-link" <?if($i==3){echo "style='margin-top:8px;'";}?>>
                        <a href="/backend/web/<?=$v->path.$v->file?>" style="font-size: 1.1rem;"><?=$v->setLang('title')?></a>
                    </p>
                </div>
                <?$i++;}?>
        </div>
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
