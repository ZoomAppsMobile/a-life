<?php
$this->registerCssFile('/frontend/web/css/faq/style.css');
?>
<div class="link-anchors d-flex mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/clientsupport"><?=Yii::t('main-title', 'Клиентская поддержка')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Часто задаваемые вопросы')?></p>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?=Yii::t('main-title', 'Часто задаваемые вопросы')?></h3>
<?$i=1;foreach($model as $v){?>
    <?if($i==1){?>
        <div class="main-body1 d-flex flex-column">
            <div class="job-inside count<?=$i?> d-flex flex-md-row flex-column align-items-center justify-content-center py-3 px-5 mb-4">
                <div class="text-inside d-flex flex-column align-items-center align-items-md-start">
                    <h4><?=$v->setLang('title');?></h4>
                </div>
            </div>
        </div>
        <div class="accordion accordion-first2" id="accordion2">
            <div class="accordion-group">
        <style>
            .main-body1 .job-inside.count<?=$i?>{
                background-image: url(<?=$v->image?>);
            }
        </style>
    <?}else{?>
        <div class="main-body2 d-flex flex-column">
            <div class="job-inside count<?=$i?> d-flex flex-md-row flex-column align-items-center justify-content-center py-3 px-5 mb-4">
                <div class="text-inside d-flex flex-column align-items-center align-items-md-start">
                    <h4><?=$v->setLang('title');?></h4>
                </div>
            </div>
        </div>
        <style>
            .main-body2 .job-inside.count<?=$i?>{
                background-image: url(<?=$v->image?>);
            }
        </style>
    <?}?>
    <?foreach($v->faqs as $v1){ if($v->status==1){?>
        <div data-aos="fade-up" class="accordion-margin mb-3">
            <div class="accordion-heading accordion-heading8" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapse<?=$i?>">
                <a class="accordion-toggle">
                    <?=$v1->setLang('title');?>
                </a>
            </div>
            <div id="collapse<?=$i?>" class="accordion-body collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <p class="d-flex align-items-center"><?=$v1->answer?></p>
                </div>
            </div>
        </div>
    <?$i++;}}?>
<?}?>
            </div>
        </div>
