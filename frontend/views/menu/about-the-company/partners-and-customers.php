<link href="/partners_customers/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>"><?=Yii::t('main-title', 'О компании')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Партнеры и клиенты')?></p>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'партнеры и клиенты')?></h3>
</div>

<div class="main-body d-flex flex-column">
        <? $i = 0; foreach($model as $v){ ?>
        <? if($i == 0){ ?>
            <div class="d-flex flex-md-row flex-column justify-content-between">
        <? }if($i != 0 && $i % 4 == 0){ ?>
                <div class="second-row d-flex flex-md-row flex-column mt-md-4 mt-0 justify-content-between">
        <? } ?>

        <div class="item-inside d-flex flex-column align-items-center">
            <img src="<?php
                            echo $v->setLang('doc');
                       ?>
                       " alt="">
            <p class="text-center">
                <?php
                    echo $v->setLang('title');
                ?>
            </p>
            <a href="<?=\yii\helpers\Url::to(['/about-company/partners-and-customers/'.$v['url']]);?>"><?=Yii::t('main-title', 'Читать больше')?></a>
        </div>

        <? $i++;if($i % 4 == 0 || $i == count($model)){ ?></div><? } ?>
        <? } ?>
</div>