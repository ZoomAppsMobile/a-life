<?php
use backend\models\Widget;
use backend\models\Widgetitem;
use backend\models\Tableitem;
$this->registerCssFile('/frontend/web/kapital/style.css');
$this->registerCssFile('/frontend/web/css/stahovanie-zaem-v/style.css');
$this->registerCssFile('/frontend/web/css/m_s_t/style.css');
$this->registerCssFile('/frontend/web/css/ob_st_sotr/style.css');
?>
<link href="/bolashak/style.css" rel="stylesheet">
<link href="/asiaLife_capital/style.css" rel="stylesheet">
<link href="/pension/style.css" rel="stylesheet">
<div class="link-anchors d-flex my-4">
    <a href="/"><?php
            echo Yii::t('main-title', 'Главная');
            ?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/private-clients"><?php
            echo Yii::t('main-title', 'Частным клиентам');
            ?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p>
        <?php
            echo $blog->setLang('title');
            ?>
    </p>
</div>
<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4"><?php
            echo $blog->setLang('title');
        ?></h3>
    <div data-aos="fade-up" class="photo-and-information d-flex flex-md-row flex-column">
        <img class="main-pic" src="<?=$blog->image?>" alt="" style="width:40rem;height:40rem;">
        <div class="space-between"></div>
        <div class="ml-3 d-flex flex-column p-4">
            <?
            if(count($blogtags)>0){
                echo '<div class="pink-links align-items-md-center mt-4 mt-md-0 d-flex flex-md-row flex-column">';
                foreach ($blogtags as $tagkey) {
                    $tagkeytitle=$tagkey->setLang('title');
                    if(isset($tagkey->file)){
                        $tagkeyurl=$tagkey->setLang('file');
                    }else{
                        $tagkeyurl=$tagkey->url;
                    }
                    if($tagkey->order==1)
                        echo '<a class="text-uppercase" target="_blank" href="'.$tagkeyurl.'"><img class="mr-3" src="'.$tagkey->icon.'" alt="">'.$tagkeytitle.'</a>';
                    else
                        echo '<a class="text-uppercase ml-md-5 ml-0 mt-4 mt-md-0" target="_blank" href="'.$tagkeyurl.'"><img class="mr-3" src="'.$tagkey->icon.'" alt="">'.$tagkeytitle.'</a>';
                }
                echo '</div>';
            }
            ?>
            <?=$blog->content?>
        </div>
    </div>
</div>
<?php
//if(count($privatewidget)>0){
//    foreach ($privatewidget as $wkey) {
//        $widget=Widget::findOne($wkey->wid);
//        if(\Yii::$app->session->get('lang')=='ru'){
//            $widgettitle=$widget->title;
//        } else if(\Yii::$app->session->get('lang')=='en'){
//            $widgettitle=$widget->title_en;
//        } else if(\Yii::$app->session->get('lang')=='kz'){
//            $widgettitle=$widget->title_kz;
//        }
//        if($widget->type==0){
//            echo '<div class="your-profit d-flex flex-column my-4">
//                    <h3 data-aos="fade-up" class="text-uppercase my-3">'.$widgettitle.'</h3>
//                    <div data-aos="fade-up" class="items d-flex flex-md-row flex-column align-items-center justify-content-center p-3">
//                        ';
//                    $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
//                    foreach ($widgetitem as $walue) {
//                        if(\Yii::$app->session->get('lang')=='ru'){
//                            $widgetitemtitle=$walue->title;
//                        } else if(\Yii::$app->session->get('lang')=='en'){
//                            $widgetitemtitle=$walue->title_en;
//                        } else if(\Yii::$app->session->get('lang')=='kz'){
//                            $widgetitemtitle=$walue->title_kz;
//                        }
//                        if(isset($walue->icon)){
//                           echo '<div data-aos="fade-up" class="item d-flex flex-column align-items-center justify-content-center">
//                                <img src="'.$walue->icon.'" alt="">
//                                <h5 class="text-uppercase text-center">'.$widgetitemtitle.'</h5>
//                            </div>';
//                        }else{
//                            echo '<div data-aos="fade-up" class="item d-flex flex-column align-items-center justify-content-center">
//                                <h5 class="text-uppercase text-center">'.$widgetitemtitle.'</h5>
//                            </div>';
//                        }
//                    }
//            echo         '</div>
//                </div>';
//        }else if($widget->type==1){
//            echo '<div data-aos="fade-up" class="accordion accordion-second mt-5" id="accordion'.$widget->id.'">
//                        <div class="accordion-group">
//                            <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion'.$widget->id.'"
//                                 href="#collapseDiv'.$widget->id.'">
//                                <a class="accordion-toggle">
//                                    '.$widgettitle.'
//                                </a>
//                            </div>
//                            <div id="collapseDiv'.$widget->id.'" class="accordion-body collapse">
//                                <div class="accordion-inner d-flex flex-column">';
//                                $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
//                                foreach ($widgetitem as $walue) {
//                                    if(\Yii::$app->session->get('lang')=='ru'){
//                                        $widgetitem1=$walue->title;
//                                        $widgetitem2=$walue->description;
//                                    } else if(\Yii::$app->session->get('lang')=='en'){
//                                        $widgetitem1=$walue->title_en;
//                                        $widgetitem2=$walue->description_en;
//                                    } else if(\Yii::$app->session->get('lang')=='kz'){
//                                        $widgetitem1=$walue->title_kz;
//                                        $widgetitem2=$walue->description_kz;
//                                    }
//                                    echo '<div class="first-table d-flex flex-column mt-5">
//                                        <div class="d-flex align-items-center">
//                                            <h5 class="text-uppercase p-3 mb-0 w-50">'.$widgetitem1.'</h5>
//                                            <h5 class="text-uppercase p-3 mb-0 w-50">'.$widgetitem2.'</h5>
//                                        </div>';
//                                        $tableitem=Tableitem::find()->where(['itemid'=>$walue->id])->orderBy(['order' => SORT_ASC])->all();
//                                        foreach ($tableitem as $tableitemkey) {
//                                            if(\Yii::$app->session->get('lang')=='ru'){
//                                                $table1=$tableitemkey->names;
//                                                $table2=$tableitemkey->value;
//                                            } else if(\Yii::$app->session->get('lang')=='en'){
//                                                $table1=$tableitemkey->names_en;
//                                                $table2=$tableitemkey->value_en;
//                                            } else if(\Yii::$app->session->get('lang')=='kz'){
//                                                $table1=$tableitemkey->names_kz;
//                                                $table2=$tableitemkey->value_kz;
//                                            }
//                                            echo '<div class="d-flex align-items-center">
//                                                <p class="mb-0 p-3 w-50">'.$table1.'</p>
//                                                <p class="mb-0 p-3 w-50">'.$table2.'</p>
//                                            </div>';
//                                        }
//                                echo '</div>';
//                                }
//
//            echo '              </div>
//                            </div>
//                        </div>
//                    </div>';
//        }else if($widget->type==2){
//            echo '<div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion'.$widget->id.'">
//                    <div class="accordion-group">
//                        <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion'.$widget->id.'"
//                             href="#collapseDiv'.$widget->id.'">
//                            <a class="accordion-toggle">
//                                '.$widgettitle.'
//                            </a>
//                        </div>
//                        <div id="collapseDiv'.$widget->id.'" class="accordion-body collapse p-3">
//                            <div class="accordion-inner d-flex flex-column">';
//                                 $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
//                                foreach ($widgetitem as $walue) {
//                                    if(\Yii::$app->session->get('lang')=='ru'){
//                                        $widgetitemtitle=$walue->title;
//                                    } else if(\Yii::$app->session->get('lang')=='en'){
//                                        $widgetitemtitle=$walue->title_en;
//                                    } else if(\Yii::$app->session->get('lang')=='kz'){
//                                        $widgetitemtitle=$walue->title_kz;
//                                    }
//                                    echo '<p class="d-flex align-items-center"><span>•</span>'.$widgetitemtitle.'</p>';
//                                    }
//                         echo   '</div>
//                        </div>
//                    </div>
//                </div>' ;
//        }else if($widget->type==3){
//            echo '<div class="mechanism d-flex flex-column mt-5">
//                <h3 data-aos="fade-up" class="text-uppercase mb-3">'.$widgettitle.'</h3>';
//                $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
//                $check=100;
//                foreach ($widgetitem as $walue) {
//                    if(\Yii::$app->session->get('lang')=='ru'){
//                        $widgetitemtitle=$walue->title;
//                        $widgetitemdescription=$walue->description;
//                    } else if(\Yii::$app->session->get('lang')=='en'){
//                        $widgetitemtitle=$walue->title_en;
//                        $widgetitemdescription=$walue->description_en;
//                    } else if(\Yii::$app->session->get('lang')=='kz'){
//                        $widgetitemtitle=$walue->title_kz;
//                        $widgetitemdescription=$walue->description_kz;
//                    }
//                    if($check==100){
//                        echo '<div class="d-flex flex-md-row flex-column justify-content-between align-items-center">';
//                        $check=0;
//                    }else if($check==0){
//                        echo '<div class="d-flex flex-md-row flex-column justify-content-between align-items-center mt-md-3 mt-0">';
//                    }
//                    echo   '<div data-aos="fade-up" class="item d-flex flex-column py-1 px-2 mt-3 mt-md-0">
//                                <div class="d-flex align-items-center justify-content-between">
//                                    <div class="d-flex align-items-center">
//                                        <img src="'.$walue->icon.'" alt="">
//                                        <h5 class="text-uppercase ml-2">'.$widgetitemtitle.'</h5>
//                                    </div>
//                                    <h4>'.$walue->order.'</h4>
//                                </div>
//                                <p class="mt-3">
//                                    '.$widgetitemdescription.'
//                                </p>
//                            </div>';
//                    $check++;
//                    if($check==3){
//                        echo '</div>';
//                        $check=0;
//                    }
//                }
//                if($check!=3){
//                    echo '</div>';
//                }
//        }
//    }
//}
?>

<div class="your-profit d-flex flex-column my-4">
    <h3  class="text-uppercase my-3"><?=Yii::t('main-title', 'Ваши выгоды')?>:</h3>
    <div  class="items d-flex flex-md-row flex-column align-items-center justify-content-center px-3 py-4">
        <?
        $YourBenefits = \common\models\YourBenefitsBlog::find()->alias('t')->with('yourBenefits')->orderBy('sort')->where('t.blog_id = '.$blog->id)->asArray()->all();
        //            echo '<pre>'. print_r($v['yourBenefits'], true). '</pre>';die;
        $count_yourBenefits = count($YourBenefits);
        if($count_yourBenefits){
        $count_yourBenefits = 100 / $count_yourBenefits;
        ?>
        <style>
            .your-profit .flip-container{
                width: <?=$count_yourBenefits?>%;
            }
        </style>
        <?}foreach($YourBenefits as $v){?>
        <div class="flip-container">
            <div ontouchstart="this.classList.toggle('hover');" class="flipper">
                <div class="front d-flex flex-column align-items-center justify-content-center">
                    <img src="<?=$v['yourBenefits']['img']?>" alt="">
                    <h5 class="text-uppercase text-center"><?=$v['yourBenefits']['title']?></h5>
                </div>
                <div class="back d-flex flex-column align-items-center justify-content-center">
                    <p class="ml-4 mt-2"><?=$v['text']?></p>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>

<?if(!empty($blog->vig_banka)){?>
<div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading accordion-heading3" data-toggle="collapse" data-parent="#accordion2"
             href="#collapseOne11">
            <a class="accordion-toggle">
                <?=Yii::t('main-title', 'Выгоды банка')?>:
            </a>
        </div>
        <div id="collapseOne11" class="accordion-body collapse p-3">
            <div class="accordion-inner d-flex flex-column">
                <?=$blog->vig_banka?>
            </div>
        </div>
    </div>
</div>
<?}?>

<?if(!empty($blog->k_r_p)){?>
    <div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapseOne22">
                <a class="accordion-toggle">
                    <?=Yii::t('main-title', 'Какие риски покрываются полисом страхования')?>:
                </a>
            </div>
            <div id="collapseOne22" class="accordion-body collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <?=$blog->k_r_p?>
                </div>
            </div>
        </div>
    </div>
<?}?>

<? if($blog->bellowing_conditions){ ?>
<div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion2"
             href="#collapseOne">
            <a class="accordion-toggle">
                <?=Yii::t('main-title', 'Условия страхования')?>:
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse p-3">
            <div class="accordion-inner d-flex flex-column">
<!--                <p class="d-flex align-items-center"><span>•</span>Застрахованный – физическое лицо в возрасте от 2 до-->
<!--                    65 лет</p>-->
<!--                <p class="d-flex align-items-center"><span>•</span>Страхователь – физическое лицо старше 18 лет-->
<!--                </p>-->
<!--                <p class="d-flex align-items-center"><span>•</span>Выгодоприобретатель – назначается Страхователем с-->
<!--                    согласия Застрахованного, если Страхователь не является Застрахованным</p>-->
<!--                <p class="d-flex align-items-center"><span>•</span>Срок накоплений/страхования – от 5 лет</p>-->
<!--                <p class="d-flex align-items-center"><span>•</span>Максимальная страховая сумма – 10 годовых заработных-->
<!--                    плат</p>-->
<!--                <p class="d-flex align-items-center"><span>•</span>Минимальный взнос – 5 000 тенге в месяц</p>-->
                <?php
                    echo $blog->setLang('bellowing_conditions');
               ?>
            </div>
        </div>
    </div>
</div>
<? } ?>

<?if(!empty($blog->v_zn)){?>
    <div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion5">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion5"
                 href="#collapsTwo">
                <a class="accordion-toggle">
                    <?=Yii::t('main-title', 'Важно знать')?>:
                </a>
            </div>
            <div id="collapsTwo" class="accordion-body collapse p-3">
                <?=$blog->v_zn?>
            </div>
        </div>
    </div>
<? } ?>
<style>
    .variant-item{
        border-top: 2px solid #d9dde1;
    }
</style>
<?if(!empty($blog->v_s_m_s)){?>
    <div data-aos="fade-up" class="your-profit d-flex flex-column my-4">
        <h3 data-aos="fade-up" class="text-uppercase my-3"><?=Yii::t('main-title', 'Варианты сумм страховой защиты в зависимости от территории')?><br>
            <?=Yii::t('main-title', 'действия полиса')?>:</h3>
        <div class="variants-block d-flex">
            <?=$blog->v_s_m_s?>
        </div>
    </div>
<? } ?>

<?$temsblog = $blog->itemsblog($blog->id);if(!empty($temsblog)){?>
    <div class="mechanism d-flex flex-column mt-5">
        <h3 data-aos="fade-up" class="text-uppercase mb-3"><?=Yii::t('main-title', 'механизм действия договора')?>:</h3>
        <? $i = 1; foreach($temsblog as $v){ ?>
        <?php if($i==1){ ?>
            <div class="d-flex flex-md-row flex-column justify-content-between align-items-center">
        <? } ?>
        <?php if(($i-1)%3==0){ ?>
            </div>
            <div class="d-flex flex-md-row flex-column justify-content-between align-items-center mt-md-3 mt-0">
        <? } ?>
            <div data-aos="fade-up" class="item d-flex flex-column py-1 px-3 mt-3 mt-md-0 <? if(($i+1)%3==0){echo 'mx-2';}?>">
                <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="<?=$v['img']?>" alt="">
                            <h5 class="text-uppercase ml-2"><?=$v['title']?></h5>
                        </div>
                        <h4><?=$i?></h4>
                </div>
                <?=$v['text']?>
            </div>
        <? $i++;} ?>
        </div>
    </div>
<? } ?>
<?
    $items = [];
    foreach($blog->additionalInsuranceCoverage as $v){
        if(!$v->text){
           $items[] = '<p class="d-flex align-items-center"><span>•</span>'.$v->title.'</p>';
        }
    }
?>
<?if(count($items)!=0){?>
<div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion2"
             href="#collapseTwo">
            <a class="accordion-toggle">
                <?=Yii::t('main-title', 'ВИДЫ СТРАХОВОЙ ЗАЩИТЫ')?>:
            </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse p-3">
            <div class="accordion-inner d-flex flex-column">
                <?=implode($items, '')?>
            </div>
        </div>
    </div>
</div>
<? }else{ ?>
<? if($blog->additionalInsuranceCoverage||$blog->basicInsuranceCoverage||$blog->childsInsuranceCoverage||$blog->additionalProtectionInsurer){ ?>
<div data-aos="fade-up" class="accordion accordion-second mt-5" id="accordion3">
    <div class="accordion-group">
        <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion3"
             href="#collapseTwo">
            <a class="accordion-toggle">
                <?=Yii::t('main-title', 'ВИДЫ СТРАХОВОЙ ЗАЩИТЫ')?>:
            </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner d-flex flex-column">

                <? if($blog->additionalInsuranceCoverage){ ?>
                    <div class="first-table d-flex flex-column mt-5">
                        <div class="d-flex align-items-center">
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'ОСНОВНАЯ СТРАХОВАЯ ЗАЩИТА')?></h5>
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'РАЗМЕР ВЫПЛАТЫ')?></h5>
                        </div>
                        <? foreach($blog->additionalInsuranceCoverage as $v){ ?>
                            <? if($v->text){ ?>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 p-3 w-50"><?=$v['title']?></p>
                                    <p class="mb-0 p-3 w-50"><?=$v['text']?></p>
                                </div>
                            <? }else{ ?>
                                <? $items[] = '<p class="d-flex align-items-center"><span>•</span>Страховым случаем является смерть Застрахованного, наступившая в период действия страховой защиты или дожитие Застрахованного до конца срока страхования</p>'; ?>
                            <? } ?>
                        <? } ?>
                        <? if(isset($items)){ ?>
                            <div class="accordion-inner d-flex flex-column"><?=implode($items, '')?></div>
                        <? } ?>
                    </div>
                <? } ?>

                <? if($blog->basicInsuranceCoverage){ ?>
                    <div class="first-table d-flex flex-column mt-5">
                        <div class="d-flex align-items-center">
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'ДОПОЛНИТЕЛЬНЫЕ ВИДЫ СТРАХОВОЙ ЗАЩИТЫ')?>
                            </h5>
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'РАЗМЕР ВЫПЛАТЫ')?>
                            </h5>
                        </div>
                        <? foreach($blog->basicInsuranceCoverage as $v){ ?>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 p-3 w-50"><?=$v['title']?></p>
                                <p class="mb-0 p-3 w-50"><?=$v['text']?></p>
                            </div>
                        <? } ?>
                    </div>
                <? } ?>

                <? if($blog->childsInsuranceCoverage){ ?>
                    <div class="first-table d-flex flex-column mt-5">
                        <div class="d-flex align-items-center">
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'ДОПОЛНИТЕЛЬНАЯ ЗАЩИТА ДЛЯ РЕБЕНКА')?></h5>
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'РАЗМЕР ВЫПЛАТЫ')?></h5>
                        </div>
                        <? foreach($blog->childsInsuranceCoverage as $v){ ?>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 p-3 w-50"><?=$v['title']?></p>
                                <p class="mb-0 p-3 w-50"><?=$v['text']?></p>
                            </div>
                        <? } ?>
                    </div>
                <? } ?>

                <? if($blog->additionalProtectionInsurer){ ?>
                    <div class="first-table d-flex flex-column mt-5">
                        <div class="d-flex align-items-center">
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'ДОПОЛНИТЕЛЬНАЯ ЗАЩИТА ДЛЯ СТРАХОВАТЕЛЯ')?></h5>
                            <h5 class="text-uppercase p-3 mb-0 w-50"><?=Yii::t('main-title', 'РАЗМЕР ВЫПЛАТЫ')?></h5>
                        </div>
                        <? foreach($blog->additionalProtectionInsurer as $v){ ?>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 p-3 w-50"><?=$v['title']?></p>
                                <p class="mb-0 p-3 w-50"><?=$v['text']?></p>
                            </div>
                        <? } ?>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>
<? }} ?>

<?if($blog->kase){?>
    <div data-aos="fade-up" class="mechanism d-flex flex-column mt-5">
        <h3 class="text-uppercase mb-3"><?=Yii::t('main-title', 'Информация по Фондам')?>:</h3>
    </div>
    <div data-aos="fade-up" class="accordion accordion-second mt-4" id="accordion3">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading3" data-toggle="collapse" data-parent="#accordion3"
                 href="#collapseThree">
                <a id="fond" class="accordion-toggle">
                    Kase
                </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-group">
                    <?=$blog->kase?>
                </div>
            </div>
        </div>
    </div>
<? } ?>

<?if($blog->spy){?>
    <div data-aos="fade-up" class="accordion accordion-second mt-4" id="accordion3">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading4" data-toggle="collapse" data-parent="#accordion3"
                 href="#collapseFour">
                <a id="fond" class="accordion-toggle">
                    Spy
                </a>
            </div>
            <div id="collapseFour" class="accordion-body collapse">
                <div class="accordion-group">
                    <?=$blog->spy?>
                </div>
            </div>
        </div>
    </div>
<? } ?>

<?if($blog->pens1){?>
    <div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapseOne1">
                <a class="accordion-toggle">
                    <?=Yii::t('main-title', 'Минимальный возраст и сумма пенсионных накоплений')?><br>
                    <?=Yii::t('main-title', 'для заключения договора пенсионного аннуитета')?>:
                </a>
            </div>
            <div id="collapseOne1" class="accordion-body collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <?=$blog->pens1?>
                </div>
            </div>
        </div>
    </div>
<? } ?>

<?if($blog->pens2){?>
    <div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion3">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion3"
                 href="#collapseTwo1">
                <a class="accordion-toggle">
                    Справка:
                </a>
            </div>
            <div id="collapseTwo1" class="accordion-body collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <?=$blog->pens2?>
                </div>
            </div>
        </div>
    </div>
<? } ?>

<div data-aos="fade-up" class="button-with-text d-flex flex-column align-items-center my-5">
    <button><a href="/calculator/bolashak">оформить сейчас</a></button>
    <p class="text-left w-100">
        <?php
            echo $blog->setLang('note');
        ?>
    </p>
</div>
<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
        });
    });
</script>