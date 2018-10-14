<link href="/our-vacancies/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/careers"><?=Yii::t('main-title', 'Вакансии')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Перечень вакансий')?></a>
</div>

<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4"><?=Yii::t('main-title', 'Наши вакансии')?></h3>


    <? foreach($vacancy as $v){ ?>
        <div data-aos="fade-up" class="job d-flex flex-md-row flex-column align-items-center p-4">
                <div class="d-flex flex-column">
                    <h5><?=$v['title']?></h5>
                    <p class="ml-0"><?=$v['data']?></p>
                </div>
                <? if(!$v['salary']){ ?>
                    <p><?=Yii::t('main-title', 'зп не указана')?></p>
                <? }else{ ?>
                    <p><?=$v['salary']?></p>
                <? } ?>
                <p><?=$v['city']?></p>

            <a href="/careers/<?=$v->id?>"><?=Yii::t('main-title', 'Подробнее')?></a>
        </div>
    <?}?>
</div>