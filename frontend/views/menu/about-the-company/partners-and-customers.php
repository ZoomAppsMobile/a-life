<link href="/partners_customers/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>"><?=Yii::t('main-title', 'О компании')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Партнеры и клиенты')?></p>
</div>

<div class="main-text mt-1 mt-md-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">клиенты</h3>
</div>


<div class="main-body d-flex flex-column">
    <? foreach($klients as $k => $v){ ?>

    <?if($k == 0){?>
    <div class="second-row d-flex flex-md-row flex-column mt-md-4 mt-0 justify-content-between">
        <?}elseif($k % 5 == 0){?>
    </div>
    <div class="second-row d-flex flex-md-row flex-column mt-md-3 mt-0 justify-content-between">
        <?}?>

        <div class="item-inside2 text-center">
            <img src="<?=$v->setLang('doc');?>" alt="" style="height:4rem;">
        </div>

    <?}?>
    </div>
</div>

<div class="main-text mt-1 mt-md-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">партнеры</h3>
</div>

<div class="main-body d-flex flex-column">
    <? foreach($partners as $k => $v){ ?>

        <?if($k == 0){?>
            <div class="second-row d-flex flex-md-row flex-column mt-md-4 mt-0 justify-content-between">
        <?}elseif($k % 4 == 0){?>
            </div>
            <div class="second-row d-flex flex-md-row flex-column mt-md-4 mt-0 justify-content-between">
        <?}?>
                <div class="item-inside text-center">
                    <img src="<?=$v->setLang('doc');?>" alt="">
                </div>
    <?}?>
        </div>
</div>

<?//=\yii\helpers\Url::to(['/about-company/partners-and-customers/'.$v['url']]);?>