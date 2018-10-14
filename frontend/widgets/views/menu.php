<a class="cabinet" href="/login" style="<?if(\Yii::$app->user->id){?>margin-top:-29px;<?}?>font-size:14px;"><img src="/image/header-cabinet.png" alt="">
        <span>
            <?php
                echo Yii::t('main-label', 'Личный кабинет');
            ?>
        </span>
</a>
<div style="position: relative;top:10px;left:-45px;font-size:14px;">
<a class="cabinet" href="/site/logout" style="">
    <?if(\Yii::$app->user->id){?>
        <span>
            <?php
                echo Yii::t('main-label', 'Выход');
            ?>

        </span>
    <?}?>
</a>
</div>
</div>
<div class="bottom-bar d-flex">
    <? foreach($model as $v){ ?>
        <a class="text-uppercase" href="/<?=\yii\helpers\Html::encode(\yii\helpers\Url::to($v['url']))?>">
            <?php
                echo $v->setLang('name');
            ?>
        </a>
    <? } ?>
</div>