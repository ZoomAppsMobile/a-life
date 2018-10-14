<link href="/bolashak1/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator"><?=Yii::t('main-title', 'Калькуляторы')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Азия Болашак')?></p>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'Шаг 1. Рассчитать стоимость полиса')?></h3>
    <a href="#"><?=Yii::t('main-title', 'Важно')?></a>
</div>

<div class="main-text d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h4 class="text-main my-3"><?=Yii::t('main-title', 'Данные о Застрахованном')?></h4>
</div>

<form action="" class="form-asia d-flex flex-column bolashak-response">
    <div id="first-row" class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div>
            <label for="input1"><?=Yii::t('main-title', 'Ф.И.О.')?></label>
            <input id="name-control" class="form-control" type="text" name="Bolashak[name]" value="">
        </div>
        <div>
            <label for="input2"><?=Yii::t('main-title', 'Телефон')?></label>
            <input id="tel-control" class="form-control" type="tel" name="Bolashak[phone_number]" value="">
        </div>
        <div>
            <label for="input3">E-mail</label>
            <input id="email-control" class="form-control" type="text" name="Bolashak[email]" value="">
        </div>
    </div>

    <div class="second-row d-flex flex-md-row flex-column mb-4">
        <div>
            <label for="input5"><?=Yii::t('main-title', 'Дата рождения')?>*</label>
            <input class="form-control" type="date" id="born-control"   name="Bolashak[clnYears]">
        </div>
        <div class="gender-block">
            <label for="input6"><?=Yii::t('main-title', 'Пол')?></label>
            <div class="gender">
                <label><input type="radio" name="Bolashak[gender]" value="1"> <?=Yii::t('main-title', 'Мужской')?></label>
                <label><input type="radio" name="Bolashak[gender]" value="2"> <?=Yii::t('main-title', 'Женский')?></label>
            </div>
        </div>
    </div>

    <h4 class="text-main my-3"><?=Yii::t('main-title', 'ОСНОВНЫЕ ПАРАМЕТРЫ СТРАХОВАНИЯ')?></h4>
    <div class="third-row d-flex flex-md-row flex-column mb-4">
        <div>
            <label for="input8"><?=Yii::t('main-title', 'Дата расчетa')?></label>
            <input class="form-control" type="date" id="input8"  name="Bolashak[data_rascheta]">
        </div>
        <div class="select-block">
            <label for="input9"><?=Yii::t('main-title', 'Срок страхования')?>*</label>
            <select id="select1" class="form-control" name="Bolashak[srokYears]">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="select-block">
            <label for="input10"><?=Yii::t('main-title', 'Периодичность взносов')?>*</label>
            <select id="select1" class="form-control" name="Bolashak[periodichnost]">
                <option></option>
                <option value="1"><?=Yii::t('main-title', 'ежегодно')?></option>
                <option value="2"><?=Yii::t('main-title', 'единовременно')?></option>
                <option value="3"><?=Yii::t('main-title', 'раз в пол года')?></option>
                <option value="4"><?=Yii::t('main-title', 'ежеквартально')?></option>
                <option value="5"><?=Yii::t('main-title', 'ежемесячно')?></option>
            </select>
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column mb-4 p-3">
        <div class="last-dynamic">
            <label for="input14"><?=Yii::t('main-title', 'Страховая сумма, тенге')?></label>
            <input class="form-control" type="text" id="input5" name="Bolashak[strSum]">
        </div>
        <div class="last-dynamic dynamic2">
            <label for="input14"><?=Yii::t('main-title', 'Страховой взнос, тенге')?></label>
            <input id="input-nums" class="form-control number" type="number" name="Bolashak[strVznos]" value="">
        </div>
    </div>
    <p class="sometext"><?=Yii::t('main-title', 'Укажите страховую сумму или желаемую сумму взноса. По второму полю расчет будет произведен автоматически')?></p>

    <h4 class="text-main my-3"><?=Yii::t('main-title', 'Дополнительные покрытия Застрахованного')?></h4>

    <p class="sometext"><?=Yii::t('main-title', 'Выберите по желанию виды дополнительного покрытия и размеры страховых сумм')?></p>

    <div class="d-flex flex-column mb-4 response">
        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text"><?=Yii::t('main-title', 'Смерть в результате НС')?></p>
            <div class="select-block">
                <label for="input9"><?=Yii::t('main-title', 'Срок страхования')?>*</label>
                <select id="select2" class="form-control" name="Bolashak[ADB]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <label for="input14"><?=Yii::t('main-title', 'Страховой взнос, тенге')?></label>
                <input id="input-nums" class="form-control OutADB" type="number" name="Bolashak[OutADB]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Телесная травма в результате')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[TT]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTT" type="number" name="Bolashak[OutTT]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Установление временой нетрудоспособности')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[TD]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTD" type="number" name="Bolashak[OutTD]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Госпитализация в результате НС')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[HD]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutHD" type="number" name="Bolashak[OutHD]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Инвалидность в результате НС')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[ATPD]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutATPD" type="number" name="Bolashak[OutATPD]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Критическое заболевание')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[CI]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutCI" type="number" name="Bolashak[OutCI]" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Освобождение от уплаты взносов. Инвалидность в результате НС в первые 2 года. НС/заболевания с 3-го года.')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="Bolashak[os_ot_uplaty]">
                    <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTPD" type="number" name="Bolashak[OutTPD]" value="">
            </div>
        </div>
    </div>

    <h4 class="text-main"><?=Yii::t('main-title', 'Дополнительные покрытия Выгодоприобретателя')?></h4>

    <div class="first-row d-flex flex-md-row flex-column mb-4">
        <p class="dop-text2"><?=Yii::t('main-title', 'Телесная травма в результате НС')?></p>
        <div class="select-block">
            <select id="select2" class="form-control" name="Bolashak[TTV]">
                <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                <option value="100000">100000</option>
                <option value="200000">200000</option>
                <option value="300000">300000</option>
                <option value="400000">400000</option>
                <option value="500000">500000</option>
            </select>
        </div>
        <div class="last-dynamic dynamic2">
            <input id="input-nums" class="form-control OutTTV" type="number" name="Bolashak[OutTTV]" value="">
        </div>
    </div>

    <h4 class="text-main"><?=Yii::t('main-title', 'Дополнительные покрытия  Страхователя')?></h4>
    <p class="sometext"><?=Yii::t('main-title', 'выберите в случае, если Застрахованный и Страхователь не является одним и тем же лицом')?></p>

    <div class="first-row d-flex flex-md-row flex-column mb-4">
        <p class="dop-text2"><?=Yii::t('main-title', 'Освобождение от уплаты взносов в случае смерти Застрахованного')?></p>
        <div class="select-block">
            <select id="select2" class="form-control" name="Bolashak[DB]">
                <option value="0"><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                <option value="100000">100000</option>
                <option value="200000">200000</option>
                <option value="300000">300000</option>
                <option value="400000">400000</option>
                <option value="500000">500000</option>
            </select>
        </div>
        <div class="last-dynamic dynamic2">
            <input id="input-nums" class="form-control OutDB" type="number" name="Bolashak[OutDB]" value="">
        </div>
    </div>

    <h4 class="text-main"><?=Yii::t('main-title', 'Данные Страхователя')?></h4>

    <div class="second-row d-flex flex-md-row flex-column mb-4">
        <div>
            <label for="input5"><?=Yii::t('main-title', 'Дата рождения')?>*</label>
            <input class="form-control" type="date" id="born-control"  name="Bolashak[data_rozhdenia]">
        </div>
        <div class="gender-block">
            <label for="input6"><?=Yii::t('main-title', 'Пол')?></label>
            <div class="gender">
                <label><input type="radio" name="Bolashak[gender_str]" value="1"> <?=Yii::t('main-title', 'Мужской')?></label>
                <label><input type="radio" name="Bolashak[gender_str]" value="2"> <?=Yii::t('main-title', 'Женский')?></label>
            </div>
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column justify-content-between mb-4 p-3">
        <div class="dynamic-item d-flex">
            <p class="dynamic-sum"><?=Yii::t('main-title', 'Сумма, тенге')?></p>
            <div class="last-dynamic dynamic3">
                <p class="form-control">&nbsp;</p>
            </div>
        </div>
        <div style="color: red;padding-left: 20px;" class="errors"></div>
        <button class="text-uppercase sum-btn"><?=Yii::t('main-title', 'Рассчитать')?></button>
    </div>
    <div style="text-align: right; color: #fff;">
        <a class="text-uppercase sum-btn dalee" href="/calculator/bolashak/step2"><?=Yii::t('main-title', 'Далее')?></a>
    </div>
</form>



