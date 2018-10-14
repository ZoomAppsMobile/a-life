<?php
$this->registerCssFile('/frontend/web/css/vacancy/style.css');
?>
<link href="/vacancy/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href=""><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Вакансии')?></p>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'Работа в «Азия Life»')?></h3>
</div>

<div class="main-body d-flex flex-column">
    <div class="job-inside d-flex flex-md-row flex-column align-items-center justify-content-center py-3 px-5 mb-4">
        <img src="/image/job-item1.png" alt="">
        <div class="text-inside d-flex flex-column align-items-center align-items-md-start">
            <h4><?=Yii::t('main-title', 'Наши вакансии')?></h4>
            <p><?=Yii::t('main-title', 'Мы всегда рады новым и отличным специалистам! Изучите перспективные возможности карьеры в «Азия Life» и
                присоединяйтесь к нам')?>.</p>
            <a href="/careers/our-vacancies" class="text-uppercase text-center"><?=Yii::t('main-title', 'Узнать больше')?></a>
        </div>
    </div>
    <?php
    foreach ($vacancy as $key) {
        if(\Yii::$app->session->get('lang')=='ru'){
            $newtitle=$key->title;
            $newdescription=$key->description;
        } else if(\Yii::$app->session->get('lang')=='en'){
            $newtitle=$key->title_en;
            $newdescription=$key->description_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            $newtitle=$key->title_kz;
            $newdescription=$key->description_kz;
        }
        echo '
            <div class="job-inside d-flex flex-md-row flex-column align-items-center justify-content-center py-3 px-5 mb-4">
        <img src="'.$key->image.'" alt="'.$newtitle.'">
        <div class="text-inside d-flex flex-column align-items-center align-items-md-start">
            <h4>'.$newtitle.'</h4>
            <p>'.$newdescription.'</p>
            <a href="/careers/'.$key->id.'" class="text-uppercase text-center">'.Yii::t('main-title', 'Узнать больше').'</a>
        </div>
    </div>
        ';
    }
    ?>
    
    <p><?=Yii::t('main-title', 'Если Вы не нашли подходящую должность, Вы можете подать заявку, отправив свое резюме к нам на электронную почту')?>. <span><a
            href=""><?=Yii::t('main-title', 'Подать заявку')?></a></span></p>
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