<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator"><?=Yii::t('main-title', 'Калькуляторы')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator/bolashak"><?=Yii::t('main-title', 'Азия Болашак')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Шаг 2')?></p>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">шаг 2. подтверждение </h3>
<div class=" d-flex flex-column align-items-center justify-content-center main-text">
    <div class="calc-block">
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                ИНФОРМАЦИЯ О ПОЛИСЕ
                <?=$model->id?>
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Программа страхования</span><br>
                    <span>Начало действия</span><br>
                    <span>Окончание действия</span><br>
                    <span>Макс кол-во дней за границей</span><br>
                    <span>Страна</span><br>
                    <span>Страховая сумма, евро</span><br>
                    <span>Страховая сумма, тенге</span><br>
                    <span>Страховая сумма, евро</span><br>
                    <span>Страховая сумма, тенге</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>однократная поездка</span><br>
                    <span>01.01.2018</span><br>
                    <span>01.01.2018</span><br>
                    <span>15</span><br>
                    <span>Греция</span><br>
                    <span><b>320</b></span><br>
                    <span><b>125 125</b></span><br>
                    <span><b>320</b></span><br>
                    <span><b>125 125</b></span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                СТРАХОВАТЕЛЬ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Фамилия (латиница)</span><br>
                    <span>Имя (латиница)</span><br>
                    <span>Отчество (латиница)</span><br>
                    <span>Фамилия (латиница)</span><br>
                    <span>Имя (латиница)</span><br>
                    <span>Отчество (латиница)</span><br>
                    <span>Пол</span><br>
                    <span>Резидент</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Иванов</span><br>
                    <span>Иван</span><br>
                    <span>Иванович</span><br>
                    <span>Ivanov</span><br>
                    <span>Ivan</span><br>
                    <span>Ivanovich</span><br>
                    <span>Мужской</span><br>
                    <span>Резидент</span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1 text-uppercase">
                контактные данные
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Регион</span><br>
                    <span>Адрес места жительства</span><br>
                    <span>Телефон</span><br>
                    <span>Email</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Регион</span><br>
                    <span>Ул. Иванова 24</span><br>
                    <span>123-456-789</span><br>
                    <span>email@emeail.ru</span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1 text-uppercase">
                паспортные данные
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Вид документа</span><br>
                    <span>Серия и номер паспорта</span><br>
                    <span>Кем выдан</span><br>
                    <span>ИИН</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Паспорт</span><br>
                    <span>1245 785962</span><br>
                    <span>23.05.2004</span><br>
                    <span>124578963542</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="calc-block">
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                ЗАСТРАХОВАННЫЙ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Фамилия (латиница)</span><br>
                    <span>Имя (латиница)</span><br>
                    <span>Отчество (латиница)</span><br>
                    <span>Фамилия (латиница)</span><br>
                    <span>Имя (латиница)</span><br>
                    <span>Отчество (латиница)</span><br>
                    <span>Пол</span><br>
                    <span>Резидент</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Петров</span><br>
                    <span>Олег</span><br>
                    <span>Иванович</span><br>
                    <span>Petrov</span><br>
                    <span>Oleg</span><br>
                    <span>Ivanovich</span><br>
                    <span>Мужской</span><br>
                    <span>Резидент</span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1 text-uppercase">
                контактные данные
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Регион</span><br>
                    <span>Адрес места жительства</span><br>
                    <span>Телефон</span><br>
                    <span>Email</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Регион</span><br>
                    <span>Ул. Иванова 24</span><br>
                    <span>123-456-789</span><br>
                    <span>email@emeail.ru</span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1 text-uppercase">
                паспортные данные
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Вид документа</span><br>
                    <span>Серия и номер паспорта</span><br>
                    <span>Кем выдан</span><br>
                    <span>ИИН</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>Паспорт</span><br>
                    <span>1245 785962</span><br>
                    <span>23.05.2004</span><br>
                    <span>124578963542</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="check-wrap">
        <label>
            <input class="checkbox" type="checkbox" name="checkbox-test">
            <span class="checkbox-custom"></span>
            <span class="label">С информацией о полисе согласен и ознакомлен</span>
        </label><br>

        <label>
            <input class="checkbox" type="checkbox" name="checkbox-test">
            <span class="checkbox-custom"></span>
            <span class="label">С <a href="">Правилами страхования</a> ознакомлен и согласен</span>
        </label><br>

        <label>
            <input class="checkbox" type="checkbox" name="checkbox-test">
            <span class="checkbox-custom"></span>
            <span class="label">Выражаю свое согласие АО "КСЖ «Азия Life" на обработку моих персональных данных</span>
        </label><br>

        <label>
            <input class="checkbox" type="checkbox" name="checkbox-test">
            <span class="checkbox-custom"></span>
            <span class="label">Выражаю свое согласие АО "КСЖ «Азия Life" на информационное сопровождение по страховым и сопутствующим услугам</span>
        </label>
    </div>

    <div class="calc-button">перейсти к оплате</div>
</div>