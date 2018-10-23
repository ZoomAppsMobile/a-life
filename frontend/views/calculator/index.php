<link href="/calc/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href=""><?=Yii::t('main-title', 'Главная')?> <img src="public/images/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Калькуляторы')?></p>
</div>

<h3 class="mt-1 mt-md-5 mb-2 main-text">&nbsp;&nbsp;&nbsp;&nbsp;<?=Yii::t('main-title', 'Уважаемые клиенты!')?><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<?=Yii::t('main-title', 'Воспользуйтесь страховым калькулятором, чтобы произвести расчет и узнать стоимость договора
    страхования. ')?><br>
    <?=Yii::t('main-title', 'Вам необходимо выбрать интересующую программу страхования и внести персональную информацию
    по основным параметрам.')?>
    <br>
    <?=Yii::t('main-title', 'Обращаем Ваше внимание, что расчёт, производимый калькулятором, носит предварительный
    характер. Окончательные расчёты производятся только после заполнения заявления на страхование')?>
    &nbsp;&nbsp;&nbsp;&nbsp;</h3>

<div class="calculators d-flex flex-column align-items-md-start align-items-center">
    <h3 class="text-uppercase my-3"><?=Yii::t('main-title', 'Калькуляторы')?></h3>
    <div class="d-flex flex-md-row flex-column justify-content-between align-items-center w-100">
<!--        <a data-aos="fade-up" href="#" class="calculator d-flex flex-column mt-3 mt-md-0 justify-content-between align-items-center">-->
<!--            <div class="d-flex flex-column align-items-center">-->
<!--                <img src="/image/calculators-3.png" alt="">-->
<!--                <h4 class="text-uppercase text-center">--><?//=Yii::t('main-title', 'Азия Валютный')?><!--</h4>-->
<!--                <p class="text-center">--><?//=Yii::t('main-title', 'Ваша защита накоплений от корректировки курса')?><!--</p>-->
<!---->
<!--            </div>-->
<!--            <button class="text-uppercase">--><?//=Yii::t('main-title', 'рассчитать')?><!--</button>-->
<!--        </a>-->
    </div>

    <div class="d-flex flex-md-row flex-column align-items-center mt-md-4 mt-0 w-100">
        <a data-aos="fade-up" href="/calculator/bolashak" class="calculator d-flex flex-column ml-4 mt-3 mt-md-0 justify-content-between align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="/image/calculators-1.png" alt="">
                <h4 class="text-uppercase text-center"><?=Yii::t('main-title', 'АЗИЯ БОЛАШАҚ')?></h4>
                <p class="text-center"><?=Yii::t('main-title', 'Программа для умных родителей.')?></p>

            </div>
            <button class="text-uppercase"><?=Yii::t('main-title', 'рассчитать')?></button>
        </a>
        <a data-aos="fade-up" href="/calculator/kazina" class="calculator d-flex flex-column ml-4 mt-3 mt-md-0 justify-content-between align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="/image/calculators-2.png" alt="">
                <h4 class="text-uppercase text-center"><?=Yii::t('main-title', 'АЗИЯ ҚАЗЫНА')?></h4>
                <p class="text-center"><?=Yii::t('main-title', 'Программа «Азия Қазына».')?></p>

            </div>
            <button class="text-uppercase"><?=Yii::t('main-title', 'рассчитать')?></button>
        </a>
        <a data-aos="fade-up" href="/calculator/mst" class="calculator d-flex flex-column ml-4 mt-3 mt-md-0 justify-content-between align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="/image/calculators-5.png" alt="">
                <h4 class="text-uppercase text-center"><?=Yii::t('main-title', 'Медицинское страхование туристов')?></h4>
                <p class="text-center"><?=Yii::t('main-title', 'Компенсация Ваших экстренных медицинских расходов  при поездке за границу')?></p>

            </div>
            <button class="text-uppercase"><?=Yii::t('main-title', 'рассчитать')?></button>
        </a>
        <a data-aos="fade-up" href="/calculator/osrns" class="calculator d-flex flex-column ml-4 mt-3 mt-md-0 justify-content-between align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="/image/calculators-6.png" alt="">
                <h4 class="text-uppercase text-center"><?=Yii::t('main-title', 'Обязательное страхование работника от несчастных Cлучаев')?></h4>
                <p class="text-center"><?=Yii::t('main-title', 'Социальная ответственность и обязанность работодателя')?></p>

            </div>
            <button class="text-uppercase"><?=Yii::t('main-title', 'рассчитать')?></button>
        </a>
    </div>
</div>