<link href="/styles/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>"><?=Yii::t('main-title', 'О компании')?></a>
</div>
<div data-aos="fade-up" class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'О компании')?></h3>
    <div class="about-stock-wrap d-flex flex-md-row flex-column">
        <?=$model->setLang('text')?>
    </div>
</div>

<div data-aos="fade-up" class="accordion accordion-first" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion2"
             href="#collapseOne">
            <a class="accordion-toggle">
                <?=Yii::t('main-title', 'На сегодняшний день мы осуществляем')?>:
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse p-3">
            <div class="accordion-inner d-flex flex-column">
                <?=$model->setLang('dop_text')?>
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-up" class="your-profit d-flex flex-column my-4">
    <h3 data-aos="fade-up" class="text-uppercase my-3"><?=Yii::t('main-title', 'НАШИ ПРЕИМУЩЕСТВА')?>:</h3>
    <div data-aos="fade-up" class="items d-flex flex-md-row flex-column align-items-center justify-content-center px-3 py-4">
        <? $advantages = \common\models\Advantages::find()->orderBy('sort')->all(); ?>
        <?foreach($advantages as $v){?>
            <div id="card-size" class="flip-container">
                <div  ontouchstart="this.classList.toggle('hover');" class="flipper">
                    <div class="front d-flex flex-column align-items-center justify-content-center">
                        <img src="/backend/web/<?=$v->path.$v->img?>" alt="">
                        <h5 class="text-uppercase text-center"><?=$v->setLang('title')?></h5>
                    </div>
                    <div class="back d-flex flex-column align-items-center justify-content-center">
                        <?=$v->text?>
                    </div>
                </div>
            </div>
        <?}?>
    </div>
</div>

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
<div class="rules d-flex flex-column">
    <a href="/about-company/documents-and-publications"><?=Yii::t('main-title', 'Документы и публикации')?></a>
    <a href="/about-company/partners-and-customers"><?=Yii::t('main-title', 'Партнеры и клиенты')?></a>
</div>
