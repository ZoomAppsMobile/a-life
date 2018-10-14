<?php
$this->registerCssFile('/frontend/web/new_style/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/">Главная<img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Url::to(['/about-company'])?>"><?=Yii::t('main-title', 'О компании')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Url::to(['/about-company/documents-and-publications'])?>"><?=Yii::t('main-title', 'Документы и публикации')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Финансовые показатели')?></p>
</div>


<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'Финансовые показатели')?></h3>
    <p class="text1"><?=Yii::t('main-text', 'В данном разделе Вашему вниманию предлагается финансовая отчетность, а также ежеквартальная финансовая отчетность АО «КСЖ «Азия Life».')?></p>

    <? $i = 1;$Oldyear = "";foreach($model as $v){ $year = $v['year'];?>
    <?if($year!=$Oldyear&&$Oldyear != ""){?>
        <p class="year<?if($i!=1) echo ' mt-5';?>"><?=$v['year']?></p>
    <?}?>
    <?if($year!=$Oldyear&&$Oldyear == ""){?>
        <p class="year"><?=$v['year']?></p>
    <?}?>
    <div class="finance-block">
        <a href="<?php
                        echo $v->setLang('file');
                    ?>">
            <div class="finance-row d-flex">
                <p class="finance-item"><img src="/images/icon.png" alt=""></p>
                <p class="finance-item2">
                    <?php
                        echo $v->setLang('title');
                    ?>
                </p>
            </div>
        </a>
    </div>
        <? $i++;$Oldyear = $v['year'];} ?>
</div>