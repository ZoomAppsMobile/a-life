<link href="/client_support/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/clientsupport']))?>"><?=Yii::t('main-title', 'Клиентская поддержка')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Заявления')?></a>
</div>


<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?=Yii::t('main-title', 'заявления')?> </h3>
<div class="accordion accordion-first2" id="accordion2">
    <div class="accordion-group">
        <? foreach($model as $v){ ?>
        <div class="accordion-margin mb-3">
            <div class="accordion-heading accordion-heading<?=$v->id?>" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapse<?=$v->id?>">
                <a class="accordion-toggle">
                    <?php
                        echo $v->setLang('title');
                    ?>:
                </a>
            </div>
            <?if(!$v->docs){?>
                <div id="collapse<?=$v->id?>" class="accordion-body active collapse p-3">
                    <div class="accordion-inner d-flex flex-column">
                        <p class="d-flex align-items-center"><?=$v->setLang('title')?></p>
                    </div>
                </div>
            <?}else{?>
                <div id="collapse<?=$v->id?>" class="accordion-body active collapse p-3">
                    <div class="accordion-inner d-flex flex-column">
                        <div class="badges-row1 d-flex flex-column justify-content-around w-100">
                            <? foreach($v->docs as $doc){ ?>
                                <a href="
                                <?php
                                    echo $doc->setLang('doc');
                                ?>
                                            " class="badge-pdf mt-4 d-flex align-items-center p-4">
                                    <img class="mr-4" src="/image/rules-download.png" alt="">
                                    <p class="text-center mt-2">
                                        <?php
                                            echo $doc->setLang('title');
                                        ?>
                                    </p>
                                </a>
                            <?}?>
                        </div>
                    </div>
                </div>
            <?}?>
        </div>
        <? } ?>
    </div>
</div>