<div data-aos="fade-up" class="footer d-flex flex-md-row flex-column align-items-center align-items-md-start text-center text-md-left justify-content-between">
    <? $i = 0;foreach($model as $v){ ?>
        <?
            if($i==3) echo '<div class="links d-flex flex-column mx-md-3 mx-0">';
            else if($i==0||$i%3==0) echo '<div class="links d-flex flex-column">';;
        ?>
            <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/'.$v['url']]))?>"><?=$v->setLang('name');?></a>
        <? if(($i+1)%3==0) echo '</div>'; ?>
    <? $i++;} ?>
    <div class="contacts my-4 my-md-0">
        <div class="mobile-phone d-flex align-items-center">
            <img src="/image/footer-phone.png" alt="">
            <a href="tel:+77712280607">+7 (771) 228 06 07</a>
        </div>
        <p style="cursor:pointer;" data-toggle="modal" data-target="#exampleModal"><?=Yii::t('main-title', 'Заказать звонок');?></p>
        <div class="email d-flex align-items-center">
            <img src="/image/footer-email.png" alt="">
            <a href="mailto:Info@mail.com">Info@mail.com</a>
        </div>
<!--        <div class="mobile-app d-flex">-->
<!--            <img src="/image/footer-mobile-app.png" alt="">-->
<!--            <a href="">--><?//=Yii::t('main-title', 'Мобильное приложение')?><!--</a>-->
<!--        </div>-->
    </div>

    <div class="social-media d-flex flex-column align-items-center align-items-md-start justify-content-between">
        <div class="social d-flex align-items-center mb-4 mb-md-0">
            <a href=""><img src="/image/footer-social1.png" alt=""></a>
<!--            <a href=""><img src="/image/footer-social2.png" alt=""></a>-->
<!--            <a href=""><img src="/image/footer-social3.png" alt=""></a>-->
<!--            <a href=""><img src="/image/footer-social4.png" alt=""></a>-->
<!--            <a href=""><img src="/image/footer-social5.png" alt=""></a>-->
<!--            <a href=""><img src="/image/footer-social6.png" alt=""></a>-->
            <a href=""><img src="/image/footer-social7.png" alt=""></a>
        </div>
<!--        <div class="second-row d-flex mt-md-5 mt-0">-->
<!--            <a href=""><img src="/image/footer-social8.png" alt=""></a>-->
<!--            <a href=""><img src="/image/footer-social9.png" alt=""></a>-->
<!--        </div>-->
    </div>
</div>