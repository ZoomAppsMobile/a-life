<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Offices */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="offices-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12 pl-0 pr-0">
        <div style="float:right;">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <ul id="myTab" role="tablist" class="nav nav-tabs">
            <li class="nav-item active">
                <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">Основное</a>
            </li>
            <li class="nav-item">
                <a id="home-tab" data-toggle="tab" href="#home-kaz" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Основное Казахский</a>
            </li>
            <li class="nav-item">
                <a id="home-tab" data-toggle="tab" href="#home-eng" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Основное Английский</a>
            </li>
        </ul>

        <div id="myTabContent" class="tab-content bg-white box-shadow p-4 mb-4">
            <div id="home-eng" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'address_en')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div id="home-kaz" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                <?= $form->field($model, 'address_kz')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone_kz')->textInput(['maxlength' => true]) ?>
            </div>
            <div id="home" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade show active in">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'status')->dropDownList([0=>'Закрыто', 1=>'Активно'], ['prompt' => '']) ?>

                <img src="<?='/'.@backend.'/web/'.$model->path.$model->img?>" alt="">

                <?= $form->field($model, 'img')->label(false)->widget(FileInput::className(), [
                    'options' => [
                        'accept' => 'image/*',
                        'multiple' => false,
                    ]
                ]) ?>

                <?= $form->field($model, 'city_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'), ['prompt' => '']) ?>
                <div id="map" style="width: 100%; height: 250px"></div>
            </div>
        </div>
    </div>
    <script>
        ymaps.ready(init);
        var center_map = [0, 0];
        var map = "";
        function init() {
            map = new ymaps.Map('map', {
                center: center_map,
                zoom: 8,
            });

            <?php if(empty($model->longitude)&&empty($model->latitude)){ ?>
            var myGeocoder = ymaps.geocode("<?=$model->city->name?>");
            myGeocoder.then(
                function (res) {
//                    map.geoObjects.add(res.geoObjects);
                    var street = res.geoObjects.get(0);
                    var coords = street.geometry.getCoordinates();
                    map.setCenter(coords);
                },
                function (err) {

                }
            );
            <?php }else{ ?>
            map.setCenter([<?=$model->latitude?>, <?=$model->longitude?>]);

            map.geoObjects.add(new ymaps.Placemark([<?=$model->latitude?>, <?=$model->longitude?>], {
                balloonContent: ''
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }));
            <?php } ?>
            $('#offices-city_id').change(function(){
                $.ajax({
                    type: "GET",
                    url: "/admin/offices/city",
                    data: {id: $(this).val()},
                    success: function(rez){
                        map.geoObjects.removeAll();
                        var myGeocoder = ymaps.geocode(rez);
                        myGeocoder.then(
                            function (res) {
//                                map.geoObjects.add(res.geoObjects);
                                var street = res.geoObjects.get(0);
                                var coords = street.geometry.getCoordinates();
                                map.setCenter(coords);
                            },
                            function (err) {

                            }
                        );
                    }
                });
            });
            map.events.add('click', function (e) {
                map.geoObjects.removeAll();
                var coords = e.get('coords');
                map.geoObjects.add(new ymaps.Placemark(coords, {
                    balloonContent: ''
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }));
//                            map.setCenter(coords);
                $("#offices-latitude").val(coords[0].toPrecision(9));
                $("#offices-longitude").val(coords[1].toPrecision(9));
            });
        }
    </script>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
