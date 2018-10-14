<link href="/css/lk/style.css" rel="stylesheet" >
<div class="link-anchors d-flex mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Личный кабинет')?></p>
</div>

<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4"><?=Yii::t('main-title', 'Личный Кабинет')?></h3>
    <div data-aos="fade-up" class="main-blocks d-flex">
        <div class="block1">
            <div class="block1__row1 d-flex justify-content-between">
                <a class="block1-link edit" href="#"><?=Yii::t('main-title', 'Редактировать данные')?></a>
                <a class="block1-link password" href="#"><?=Yii::t('main-title', 'Сменить пароль')?></a>
            </div>

            <div class="block1__row2">
                <div class="message"></div>
                <div class="personal_data">
                    <p class="personal-data"><?=Yii::t('main-title', 'Персональные данные')?></p>
                    <div class="pasport d-flex justify-content-between">
                        <div class="pasport-row1">
                            <p class="initials"><?=Yii::t('main-title', 'ИИН')?></p>
                            <p class="initials"><?=Yii::t('main-title', 'ФИО')?></p>
                            <p class="initials"><?=Yii::t('main-title', 'Телефон:')?></p>
                            <p class="initials">E-mail:</p>
                        </div>
                        <div class="pasport-row2">
                            <p class="initials2 iin"><?=$profile->iin?></p>
                            <p class="initials2 fio"><?=$profile->fio?></p>
                            <p class="initials2 phone"><?=$profile->phone?></p>
                            <p class="initials2 email"><?=$profile->email?></p>
                        </div>
                    </div>
                </div>
                <div class="edit"style="display: none;">
                    <form class="edit-form">
                        <p class="personal-data"><?=Yii::t('main-title', 'Редактирование данных')?></p>
                        <div class="pasport d-flex justify-content-between">
                            <div class="pasport-row1">
                                <p class="initials"><?=Yii::t('main-title', 'ИИН')?></p>
                                <p class="initials"><?=Yii::t('main-title', 'ФИО')?></p>
                                <p class="initials"><?=Yii::t('main-title', 'Телефон:')?></p>
                                <p class="initials">E-mail:</p>
                            </div>
                            <div class="pasport-row2">
                                <p class="initials2" style="margin-top:-4px;"><input type="text" name="Profiles[iin]" value="<?=$profile->iin?>"></p>
                                <p class="initials2" style="margin-top:-5px;"><input type="text" name="Profiles[fio]" value="<?=$profile->fio?>"></p>
                                <p class="initials2" style="margin-top:-5px;"><input type="text" name="Profiles[phone]" value="<?=$profile->phone?>"></p>
                                <p class="initials2" style="margin-top:-6px;"><input type="text" name="Profiles[email]" value="<?=$profile->email?>"></p>
                            </div>
                        </div>
                        <div class="center_button_form">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
                <div class="password"style="display: none;">
                    <form class="password-form">
                        <p class="personal-data"><?=Yii::t('main-title', 'Смена пароля')?></p>
                        <div class="pasport d-flex justify-content-between">
                            <div class="pasport-row1">
                                <p class="initials"><?=Yii::t('main-title', 'Текущий пароль')?></p>
                                <p class="initials"><?=Yii::t('main-title', 'Новый пароль')?></p>
                                <p class="initials"><?=Yii::t('main-title', 'Повторите пароль')?></p>
                            </div>
                            <div class="pasport-row2">
                                <p class="initials2" style="margin-top:7px;"><input type="text" name="password" value=""></p>
                                <p class="initials2" style="margin-top:29px;"><input type="text" name="new_password" value=""></p>
                                <p class="initials2" style="margin-top:29px;"><input type="text" name="repeat_password" value=""></p>
                            </div>
                        </div>
                        <div class="center_button_form">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>

            <button id="btn-quest"><?=Yii::t('main-title', 'Задать вопрос:')?></button>
        </div>

        <div class="block2">
            <div class="block2__row1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false"><?=Yii::t('main-title', 'Заключенные')?><br> <?=Yii::t('main-title', 'договора')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?=Yii::t('main-title', 'Оплатить')?><br> <?=Yii::t('main-title', 'страховой взнос')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?=Yii::t('main-title', 'Начисленные')?><br> <?=Yii::t('main-title', 'бонусы')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="false"><?=Yii::t('main-title', 'Расчет')?><br> <?=Yii::t('main-title', 'суммы займа')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab1" data-toggle="modal" href="#profile1" data-target="#exampleModal2"><?=Yii::t('main-title', 'Сообщить')?><br> <?=Yii::t('main-title', 'о страховом случае')?></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="tab-row1 d-flex justify-content-between">
                            <a class="block1-link" href="#"><?=Yii::t('main-title', 'Продлить договор')?></a>
                            <a class="block1-link" href="#" data-toggle="modal" data-target="#exampleModal2"><?=Yii::t('main-title', 'Оформить договор')?></a>
                        </div>
                        <div class="tab-row2">
                            <div data-aos="fade-up" class="accordion accordion-second" id="accordion3">
                                <div class="accordion-group">
                                    <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion3"
                                         href="#collapseTwo">
                                        <a class="accordion-toggle">
                                            <?=Yii::t('main-title', 'Заключенные договора')?>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner d-flex flex-column">
                                            <p class="list-dogovor"><?=Yii::t('main-title', 'Список действующих договоров')?></p>

                                            <div class="accordion-row1">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор страхования от несчастных случаев и болезней лиц, выезжающих за рубеж</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 находится в работе</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ VZR  № VZR 000 00001  01.01.2017 – 01.01.2018</p>
                                            </div>

                                            <div class="accordion-row2">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор накопительного страхования «Азия Коргау»</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Причина: не страховой случай.</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 урегулирована.</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ VZR  № VZR 000 00001  01.01.2017 – 01.01.2023</p>
                                                <p class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма выплаты: <span class="red-price">25100 тенге<span></p>
                                            </div>

                                            <div class="accordion-row3">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор накопительного страхования «Азия Коргау»</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 отклонена</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ RGH  № GRG 000 225542  01.01.2017 – 01.01.2018</p>
                                                <p class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма накоплений на текущий момент: <span class="red-price">56000 тенге<span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div data-aos="fade-up" class="accordion accordion-second mt-3" id="accordion3">
                        <div class="accordion-group">
                            <div class="accordion-heading accordion-heading3" data-toggle="collapse" data-parent="#accordion3"
                                 href="#collapseThree">
                                <a class="accordion-toggle">
                                    <?=Yii::t('main-title', 'Оплатить страховой взнос')?>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner d-flex flex-column">
                                    <p class="name-1"><?=Yii::t('main-title', 'Уважаемый')?> Иван Иванович</p>
                                    <p class="name-2">До следующего страхового взноса по Договору страхования «Азия Коргау» <span>осталось 9 дней</span></p>
                                    <p class="name"><b>Рекомендуем оплатить до 01.04.2017 г.</b></p>
                                    <button id="btn-pay" onclick="window.location.href = '/subject/strahovoy-sluchay'">оплатить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    <div class="tab-pane fade" id="home1" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</div>
