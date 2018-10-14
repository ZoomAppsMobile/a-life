<?php
$this->registerCssFile('/frontend/web/style_busines/style.css');
?>
<div data-aos="fade-up" class="about-stock d-flex flex-column mt-5">
    <h3 class="text-uppercase mb-4">
        <?=Yii::t('main-title', 'Бизнесу')?>
<?php
//        if(count($blogs)>0){
//            foreach ($blogs as $key) {
//                if(\Yii::$app->session->get('lang')=='ru'){
//                    $keydes=$key->description;
//                    $keytitle=$key->title;
//                } else if(\Yii::$app->session->get('lang')=='en'){
//                    $keydes=$key->description_en;
//                    $keytitle=$key->title_en;
//                } else if(\Yii::$app->session->get('lang')=='kz'){
//                    $keydes=$key->description_kz;
//                    $keytitle=$key->title_kz;
//                }
//                echo '<div class="busines-customers-wrap"><a href="/business/'.$key->url.'">
//                    <img src="'.$key->thumb.'" alt="">
//                    <h4 class="text-uppercase font-weight-bold">'.$keytitle.'</h4>
//                    <div class="mgb">'.$keydes.' 
//                    </div></a>
//                </div>';
//            }
//        }
//        ?>
    </h3>

    <div class="main d-flex justify-content-between flex-md-row flex-column">
        <div class="row1 flex-column">
            <a href="/private-clients/compulsory_employee_insurance" class="text1">
                <img src="/images/image1.png" alt="">
                <p class="text1 mt-4" style="cursor:pointer;"><?=Yii::t('main-label', 'Обязательное страхование работника от несчастных случаев')?></p>
            </a>
            <p class="text2"><?=Yii::t('main-title', 'Социальная ответственность и обязанность работодателя')?></p>
        </div>

        <div class="row2">
            <a href="/private-clients/dgs" class="text1">
                <img src="/images/image2.png" alt="">
                <p class="text1 mt-4" style="cursor:pointer;"><?=Yii::t('main-title', 'Добровольное групповое страхование')?></p>
            </a>
            <p class="text22"><?=Yii::t('main-title', 'Лучший способ финансовой защиты сотрудников')?></p>
        </div>
    </div>
</div>