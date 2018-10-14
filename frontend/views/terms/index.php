<?php
$this->registerCssFile('/frontend/web/css/term/style.css');
?>
<div class="link-anchors d-flex mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Клиентская поддержка')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="#"><?=Yii::t('main-title', 'Термины')?></a>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?=Yii::t('main-title', 'ТЕРМИНЫ')?></h3>

<div class="accordion accordion-first" id="accordion2">
    <div class="accordion-group">

        <?php
            if($terms)
                foreach ($terms as $key) {
                    $keytitle=$key->setLang('title');
                    $keydescription=$key->setLang('description');
                    echo '<div data-aos="fade-up" class="accordion-margin mb-3">
                <div class="accordion-heading accordion-heading'.$key->id.'" data-toggle="collapse" data-parent="#accordion'.$key->id.'"
                     href="#collapse'.$key->id.'">
                    <a class="accordion-toggle">
                        '.$keytitle.'
                    </a>
                </div>
                <div id="collapse'.$key->id.'" class="accordion-body collapse p-3">
                    <div class="accordion-inner d-flex flex-column">
                        <p class="d-flex align-items-center">'.$keydescription.'</p>
                    </div>
                </div>
            </div>';
                }
        ?>
        
    </div>
</div>

<script>
    jQuery(document).ready(function($){

        AOS.init({
            offset: 0,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
        });

        $('.accordion-heading').click(function () {
            $(this).toggleClass('accordion-opened');
        });

    });

</script>