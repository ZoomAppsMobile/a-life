<link href="/css/style.css" rel="stylesheet">
<link href="/css/style-sanzh.css" rel="stylesheet">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $sl_i=0;
        $class='class="active"';
        foreach ($slider as $key) {
            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$sl_i.'" '.$class.'></li>';
            $sl_i++;
            $class='';
        }
        ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <?php
        $sl_class=' active';
        foreach ($slider as $key) {
            $more = Yii::t('main-label', 'ПОДРОБНЕЕ');
            $keytitle=$key->setLang('title');
            $keydescription=$key->setLang('description');

            echo '<div class="carousel-item'.$sl_class.'">
                    <img class="d-block w-100"
                         src="'.$key->image.'"
                         data-color="lightblue" alt='.$keytitle.'>
                    <div class="carousel-captions d-md-block">
                        <h5 class="text-uppercase">'.$keytitle.'</h5>
                        <p>'.$keydescription.'</p>
                        <button><a href="'.$key->url.'" style="color: #fff;">'.$more.'</a></button>
                    </div>
                </div>';
            $sl_class='';
        }
        ?>
    </div>
</div>
<div class="products-mobile mt-4 d-flex d-md-none flex-column align-items-center">
    <img class="absolute-logo" src="/image/absolute-logo.png" alt="" data-toggle="modal" data-target="#exampleModal2">
    <h3 data-aos="fade-up" class="text-uppercase text-center mb-3"><?php
        echo Yii::t('main-label', 'СТРАХОВЫЕ ПРОДУКТЫ');
        ?></h3>
    <a href="/<?$banner1->url?>">
        <div data-aos="fade-up" class="item1 mb-2">
            <h4 class="text-uppercase text-center"><?php
                echo $banner1->setLang('title');
                ?> <br><span><?php
                    echo $banner1->setLang('description');
                    ?></span></h4>
        </div>
    </a>
    <a href="/<?$banner2->url?>">
        <div data-aos="fade-up" class="item2 mb-2">
            <h4 class="text-uppercase text-center"><?php
                echo $banner2->setLang('title');
                ?><br><span><?php
                    echo $banner2->setLang('description');
                    ?></span></h4>
        </div>
    </a>
    <a data-aos="fade-up" class="item3 mb-2 d-flex align-items-center justify-content-end pr-4" href="/<?$banner4->url?>">
        <h4 class="text-uppercase text-center"><?php
            echo $banner4->setLang('title');
            ?>
            <br><span><?php
                echo $banner4->setLang('description');
                ?></span></h4>
    </a>
    <a data-aos="fade-up" class="item4 mb-2" href="/<?$banner3->url?>">
        <h4 class="text-uppercase text-center"><?php
            echo $banner3->setLang('title');
            ?><br><span><?php
                echo $banner3->setLang('description');
                ?></span></h4>
    </a>
    <div data-aos="fade-up" class="item5 mb-2 d-flex flex-column justify-content-around w-100">
        <div class="item-inside  align-items-center d-flex">
            <img src="/image/products-item5.png" alt="">
            <h4 class="text-uppercase"><a href="/subject/strahovoy-sluchay" style="color:#9f074f;"><?=Yii::t('main-label', 'Произошел страховой случай');?></a></h4>
        </div>
        <div class="item-inside  align-items-center my-2 d-flex">
            <img style="margin: 0 1rem;" src="/image/products-item6.png" alt="">
            <h4 class="text-uppercase"><a href="/calculator" style="color:#9f074f;"><?=Yii::t('main-label', 'КАЛЬКУЛЯТОР онлайн');?></a></h4>
        </div>
        <div class="item-inside  align-items-center d-flex">
            <img src="/image/products-item7.png" alt="">
            <h4 class="text-uppercase"><a href="/calculator/online" style="color:#9f074f;"><?=Yii::t('main-label', 'Оформление договора страхования онлайн');?></a></h4>
        </div>
    </div>
</div>
<div class="products mt-4 d-md-flex d-none flex-column align-items-center">
    <img data-aos="fade-up" class="absolute-logo" src="/image/absolute-logo.png" alt="" data-toggle="modal" data-target="#exampleModal2">
    <h3 data-aos="fade-up" class="text-uppercase text-center mb-3"><?php
        echo Yii::t('main-label', 'СТРАХОВЫЕ ПРОДУКТЫ');
        ?></h3>
    <div class="d-flex flex-column">
        <div class="d-flex product-main-block">
            <div class="d-flex flex-column">
                <div class="d-flex product-blocks">
                    <a href="/<?$banner1->url?>">
                        <div data-aos="fade-right" class="item1" style="background-image: url(<?=$banner1->image?>)">
                            <h4 class="text-uppercase text-center"><?php
                                echo $banner1->setLang('title');
                                ?><br><span><?php
                                    echo $banner1->setLang('description');
                                    ?></span></h4>
                        </div>
                    </a>
                    <a href="/<?$banner2->url?>">
                        <div data-aos="fade-right" class="item2" style="background-image: url(<?=$banner2->image?>);background-position: 100% 50%;">
                            <h4 class="text-uppercase text-center"><?php
                                echo $banner2->setLang('title');
                                ?> <br/><span><?php
                                    echo $banner2->setLang('description');
                                    ?></span></h4>
                        </div>
                    </a>
                </div>
                <a href="/<?$banner4->url?>">
                    <div data-aos="fade-up" class="item3 d-flex align-items-center justify-content-end pr-4" style="background-image: url(<?=$banner4->image?>)">
                        <h4 class="text-uppercase text-center"><?php
                            echo $banner4->setLang('title');
                            ?>
                            <br><span><?php
                                echo $banner4->setLang('description');
                                ?></span></h4>
                    </div>
                </a>
            </div>
            <a data-aos="fade-left" class="item4" href="/<?$banner3->url?>" style="background-image: url(<?=$banner3->image?>);background-position: 70% 50%;">
                <h4 class="text-uppercase text-center"><?php
                    echo $banner3->setLang('title');
                    ?>  <br><span><?php
                        echo $banner3->setLang('description');
                        ?></span></h4>
            </a>

        </div>
        <div data-aos="fade-up" class="item5 d-flex justify-content-around w-100">
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item5.png" alt="">
                <h4 class="text-uppercase"><a href="/subject/strahovoy-sluchay" style="color:#9f074f;"><?=Yii::t('main-label', 'Произошел страховой случай');?></a></h4>
            </div>
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item6.png" alt="">
                <h4 class="text-uppercase"><a href="/calculator" style="color:#9f074f;"><?=Yii::t('main-label', 'КАЛЬКУЛЯТОР онлайн');?></a></h4>
            </div>
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item7.png" alt="">
                <h4 class="text-uppercase"><a href="/calculator/online" style="color:#9f074f;"><?=Yii::t('main-label', 'Оформление договора страхования онлайн');?></a></h4>
            </div>
        </div>
    </div>
</div>

<div class="news d-flex flex-column mt-5 align-items-center">
    <h3 data-aos="fade-up" class="mb-4 text-uppercase text-center"><?=Yii::t('main-label', 'Новости компании');?></h3>
    <div data-aos="fade-up" class="carousel-wrap">
        <div class="owl-carousel">

            <?php
            foreach ($news as $key) {

                $newtitle=$key->setLang('title');
                $newdescription=$key->setLang('description');
                echo '<div class="item"><img src="'.$key->image.'">
                <h4 class="text-uppercase mt-3">'.$newtitle.'</h4>
                <p>'.$key->dating.'7</p>
                <h6>'.$newdescription.'</h6>
            </div>';
            }
            ?>

        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
            //disable: window.innerWidth < 768
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,

            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            },
            nav: true
        })

        $('.carousel').carousel({
            interval: 3000,
            pause: "false"
        });
    });
</script>