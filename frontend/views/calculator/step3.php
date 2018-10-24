<link rel='stylesheet' href='/css/step2/style.css'/>
<div class="link-anchors d-flex mt-4">
    <a href="">Главная <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Личный кабинет <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Калькулятор <img src="public/images/link-arrow-right.png" alt=""></a>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">шаг 3. подтверждение </h3>
<div class=" d-flex flex-column align-items-center justify-content-center main-text">
    <div class="calc-block">
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                ИНФОРМАЦИЯ О ПОЛИСЕ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Программа страхования</span><br>
                    <?if($model->insuranceProgramm==2){?>
                        <span>Прод. страхования</span><br>
                        <span>Макс. кол-во дней за границей</span><br>
                    <?}?>
                    <span>Начало действия</span><br>
                    <span>Окончание действия</span><br>
                    <span>Страна</span><br>
                    <span>Страховая сумма, евро</span><br>
                    <span>Страховая сумма, тенге</span><br>
                    <span>Курс евро на сегодня</span><br>
                    <span>Страховая премия, евро</span><br>
                    <span>Страховая премия, тенге</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span>
                        <?if($model->insuranceProgramm==1) echo 'однократная поездка';else echo 'многократная поездка';?>
                    </span><br>
                    <?if($model->insuranceProgramm==2){?>
                        <?$rprogSrok = ['', 'до 6 месяцев', 'от 6 до 9 месяцев', 'от 9 до 12 месяцев'];?>
                        <span><?=$rprogSrok[$model->rprogSrok]?></span><br>
                        <?$rprogMaxDays = ['', 30, 60, 90, 180];?>
                        <span><?=$rprogMaxDays[$model->rprogMaxDays]?></span><br>
                    <?}?>
                    <span><?=date('d.m.Y', $model->beginDate)?></span><br>
                    <span><?=date('d.m.Y', $model->endDate)?></span><br>
                    <span><?=$country->name?></span><br>
                    <span><b><?=$mst->sumStrah?></b></span><br>
                    <span><b><?=$mst->sumStrahKz?></b></span><br>
                    <span><b><?=$mst->kurs?></b></span><br>
                    <span><b><?=$mst->premEur?></b></span><br>
                    <span><b><?=$mst->premKz?></b></span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1">
                СТРАХОВАТЕЛЬ
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Бин</span><br>
                    <span>Резидент</span><br>
                    <span>Наименование</span><br>
                    <span>Лицензия</span><br>
                    <span>Вид экономической деятельности</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$step2strahovatel->bin?></span><br>
                    <span><?if($step2strahovatel->resident==1) echo 'Не резидент';else echo 'Резидент'?></span><br>
                    <span><?=$step2strahovatel->naimenivanie?></span><br>
                    <span><?=$step2strahovatel->licenzia?></span><br>
                    <span><?=$step2strahovatel->vid_ec_deyat?></span><br>
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
                    <span>Код сект. эк.</span><br>
                    <span>Телефон</span><br>
                    <span>Email</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$step2kont_dannie_str->region?></span><br>
                    <span><?=$step2kont_dannie_str->address?></span><br>
                    <span><?=$step2kont_dannie_str->kod_sect_ec?></span><br>
                    <span><?=$step2kont_dannie_str->phone?></span><br>
                    <span><?=$step2kont_dannie_str->email?></span><br>
                </div>
            </div>
        </div>
        <div class="info-calc d-md-flex d-sm-table-row">
            <div class="text-calc1 text-uppercase">
                паспортные данные
            </div>
            <div class="calc-wrap-sec d-md-flex d-sm-table-row">
                <div class="text-calc2 flex-column">
                    <span>Наименование банка</span><br>
                    <span>БИК</span><br>
                    <span>Расчетный счет</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$step2kont_dannie_str->naim_banka?></span><br>
                    <span><?=$step2kont_dannie_str->bik?></span><br>
                    <span><?=$step2kont_dannie_str->rasch_kod?></span><br>
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
                    <span>Пол</span><br>
                    <span>Резидент</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$step2zastrahovanniy->familia?></span><br>
                    <span><?=$step2zastrahovanniy->ima?></span><br>
                    <span><?=$step2zastrahovanniy->otchetvo?></span><br>
                    <span><?if($step2zastrahovanniy->pol==1) echo 'Мужской';else echo 'Не резидент';?></span><br>
                    <span><?if($step2zastrahovanniy->resident==0) echo 'Резидент';else echo 'Не резидент';?></span><br>
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
                    <span><?=$step2kont_dannie_zas->region?></span><br>
                    <span><?=$step2kont_dannie_zas->address?></span><br>
                    <span><?=$step2kont_dannie_zas->phone?></span><br>
                    <span><?=$step2kont_dannie_zas->email?></span><br>
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
                    <span>Дата выдачи</span><br>
                    <span>ИИН</span><br>
                </div>
                <div class="text-calc3 flex-column">
                    <span><?=$step2kont_dannie_zas->vid_documenta?></span><br>
                    <span><?=$step2kont_dannie_zas->seria.' '.$step2kont_dannie_zas->nomer?></span><br>
                    <span><?=$step2kont_dannie_zas->kem_vidan?></span><br>
                    <span><?=date('d.m.Y', $step2kont_dannie_zas->data_vidachi)?></span><br>
                    <span><?=$step2zastrahovanniy->iin?></span><br>
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

    <div class="calc-button">Перейти к оплате</div>
</div>

