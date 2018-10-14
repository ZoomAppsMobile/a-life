<link href="/about/style.css" rel="stylesheet">
<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company/documents-and-publications']))?>">Документы и публикации <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Правила страхования</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">ПРАВИЛА СТРАХОВАНИЯ</h3>

<div class="rules d-flex flex-column">
    <h4>В данном разделе Вы можете ознакомиться с действующие правилами страхования по видам страхования, с возможностью
        просмотра предыдущих редакций, внесенных изменений и дополнений</h4>

    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <? $i = 0; foreach($model as $v){ ?>
        <? if($i == 0){ ?>
            <div data-aos="fade-up" class="badges-row d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-around w-100">
        <? }if($i != 0 && $i % 6 == 0){ ?>
            <div data-aos="fade-up" class="badges-row d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-around w-100 mt-0 mt-md-4">
        <? } ?>

                <a href="<?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo $v['file'];
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo $v['file_kz'];
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo $v['file_en'];
                            }
                        ?>"
                    class="badge-pdf mt-2 mt-md-0 d-flex flex-column align-items-center p-2">
                    <img class="mr-4" src="/image/rules-download.png" alt="">
                    <p class="text-center mt-2">
                        <?php
                        if(\Yii::$app->session->get('lang')=='ru'){
                            echo $v['title'];
                        } else if(\Yii::$app->session->get('lang')=='kz'){
                            echo $v['title_kz'];
                        } else if(\Yii::$app->session->get('lang')=='en'){
                            echo $v['title_en'];
                        }
                        ?>
                    </p>
                </a>
            <? $i++;if($i % 6 == 0 || $i == count($model)){ ?></div><? } ?>
        <? } ?>
    </div>
</div>