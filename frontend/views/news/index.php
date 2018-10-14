<?php
$this->registerCssFile('/frontend/web/css/news/style.css');
?>
<div data-aos="fade-up" class="about-stock d-flex flex-column mt-5">
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'Новости')?></h3>
<?php
    $newflex=true;
    foreach ($models as $key) {
        $data = strtotime($key->dating);
        $data = strtotime($key->dating);
        $newtitle=$key->setLang('title');
        $newdescription=$key->setLang('description');
        if($newflex){            
            echo '<div data-aos="fade-up" class="main d-flex justify-content-between">';
        }
?>
    <div data-aos="fade-up" class="main d-flex justify-content-between mt-5">
        <div class="news-block1 d-flex">
            <img class="" src="<?=$key->image?>" alt="">
            <div class="block-info">
                <h4 class="text-uppercase head-text"><?=$newtitle?></h4>
                <p class="pub-date"><?=date('d.m.Y', $data)?></p>
                <p class="block-info-text"><?=$newdescription?></p>
                <a class="more-info" href="/news/<?=$key->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
            </div>
        </div>
    </div>
    <?    if(!$newflex){
            echo '</div>';
        }
        if($newflex){
            $newflex=false;
        }else{
            $newflex=true;
        }
    }
     if(!$newflex){
            echo '</div>';
        }
?>
<?php
if(!$last){
        echo '<button data-aos="fade-up" class="old-news newsbut" id="" data-page="1">'.Yii::t('main-title', 'Ранние новости').'</button>';
    }
?>
</div>
