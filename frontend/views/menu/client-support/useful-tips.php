<?
$this->registerCssFile('/frontend/web/css/clientsupport/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?><img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/clientsupport"><?=Yii::t('main-title', 'Клиентская поддержка')?><img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Полезные советы')?></p>
</div>


<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <div style="color:red;margin-bottom:20px;">
        <?=Yii::$app->session->getFlash('success1')?>
    </div>
    <h3 class="text-uppercase mb-4"><?=Yii::t('main-title', 'Полезные советы')?></h3>

    <?$i=1;foreach($model as $v){?>
        <div class="sovet-block d-flex">
            <p class="krug"><?=$i?></p>
            <p class="sovet-txt2"><?=$v->setLang('title')?></p>
        </div>
    <?$i++;}?>

    <div class="d-flex flex-column">
        <p class="sovet-txt"><?=Yii::t('main-title', 'Уважаемые клиенты АО "КСЖ "Asia Life", мы рады, что вы выбрали нашу компанию как надежного партнера и готовы ответить на любые ваши вопросы.')?></p>
        <h4 class="question"><?=Yii::t('main-title', 'Задать вопрос')?></h4>
        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
        <div class="question-row1 d-flex justify-content-between">
            <div class="question-cell1">
                <?= $form->field($UsefulTips, 'name')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="question-cell2">
                <?= $form->field($UsefulTips, 'city')->dropDownList([1 => 'Алматы', 2 => 'Астана']) ?>
            </div>
        </div>

        <div class="question-row2 d-flex justify-content-between">
            <div class="question-cell1">
                <?= $form->field($UsefulTips, 'phone')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="question-cell2">
                <?= $form->field($UsefulTips, 'email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="question-row3 d-flex justify-content-between">
            <div class="question-area">
                <?= $form->field($UsefulTips, 'vopros')->textarea(['rows' => 6, 'class' => 'quest-textarea']) ?>
            </div>
            <button class="btn-send">Отправить</button>
        </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div>
</div>