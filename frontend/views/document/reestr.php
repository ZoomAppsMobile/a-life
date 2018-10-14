<?php
$this->registerCssFile('/frontend/web/css/doc2/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href=""><?=Yii::t('main-title', 'Главная')?> <img src="/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'О компании')?> <img src="/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Документы и публикации')?> <img src="/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Реестр страховых агентов')?></a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold"><?=Yii::t('main-title', 'РЕЕСТР СТРАХОВЫХ АГЕНТОВ')?></h3>

<div class="rules d-flex flex-column">
    <h4><?=Yii::t('main-title', 'В Данном разделе Вы можете ознакомиться со страховыми тарифами, применяемыми в АО «КСЖ «Азия Life».')?></h4>

    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <div data-aos="fade-up" class="badges-row d-flex flex-md-row row justify-content-around flex-column align-items-md-start align-items-center w-100 mt-0 mt-md-4">

            <?php
                 
                foreach ($docs as $key) {
                    $keyfile=$key->setLang('file');
                    $keytitle=$key->setLang('title');
                    echo '<a href="'.$keyfile.'" class="badge-pdf mt-2 mt-md-0 d-flex flex-column justify-content-center align-items-center p-2">
                <img src="/image/rules-download.png" alt="">
                <p class="text-center mt-2">'.$keytitle.'</p>
            </a>';
                }
            ?>
\
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 0,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
//            disable: window.innerWidth < 768
        });
    });

</script>
