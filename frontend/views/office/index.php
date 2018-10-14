<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="link-anchors d-flex mt-4 flex-column flex-md-row">
    <a href=""><?=Yii::t('main-title', 'Главная')?> <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'О компании')?> <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Документы и публикации')?> <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'Правила страхования')?></a>
</div>

<div class="main-text mt-1 mt-md-3 mb-3 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'офисы в нашем городе')?></h3>
</div>
<div class="main-text d-flex justify-content-center">
    <div class="map-wrap">

        <div id="map" style="width: 100%; height: 650px"></div>
        <script>
            document.getElementById("office-city").innerHTML="<?=$city->name?>";
            ymaps.ready(init);
            var center_map = [0, 0];
            var map = "";
            function init() {
                map = new ymaps.Map('map', {
                    center: center_map,
                    zoom: 8,
                });

                var myGeocoder = ymaps.geocode("<?=$city->name?>");
                myGeocoder.then(
                    function (res) {
//                        map.geoObjects.add(res.geoObjects);
                        var street = res.geoObjects.get(0);
                        var coords = street.geometry.getCoordinates();
                        map.setCenter(coords);
                    },
                    function (err) {

                    }
                );

                <?foreach($model as $v){?>
                    map.geoObjects.add(new ymaps.Placemark([<?=$v->latitude?>, <?=$v->longitude?>], {
                        balloonContent: '<div class="d-flex justify-content-between p-2"><div class="img-adres-wrap"><img src="<?='/'.@backend.'/web/'.$v->path.$v->img?>" alt=""></div><div class="adress-map-text flex-column"><span><?=$v->setLang('address')?></span><p><img src="/images/call-adress.png" alt=""><?=$v->setLang('phone')?></p><p><img src="/images/mail-adress.png" alt=""><?=$v->email?></p><p><img src="/images/time-adress.png" alt=""><?=$v->time?></p></div></div>'
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/frontend/web/images/absolute-logo.png',
                        preset: 'islands#icon',
                        iconColor: '#0095b6'
                    }));
                <?}?>
            }
        </script>


    </div>
</div>