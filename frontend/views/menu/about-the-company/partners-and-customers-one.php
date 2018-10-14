<link href="/about/style.css" rel="stylesheet">
<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>"><?=Yii::t('main-title', 'О компании')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company/partners-and-customers']))?>"><?=Yii::t('main-title', 'Партнеры и клиенты')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=$model->setLang('title');?></p>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold"><?=Yii::t('main-title', 'РЕЕСТР СТРАХОВЫХ АГЕНТОВ')?></h3>

<div class="rules d-flex flex-column">
    <?=$model->setLang('text');?>
</div>