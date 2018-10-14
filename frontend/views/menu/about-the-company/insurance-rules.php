<link href="/about/style.css" rel="stylesheet">
<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/about-company"><?=Yii::t('main-title', 'О компании')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/about-company/documents-and-publications"><?=Yii::t('main-title', 'Документы и публикации')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Правила страхования')?></p>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold"><?=Yii::t('main-title', 'Правила страхования')?></h3>

<div class="rules d-flex flex-column">
    <h4><?=Yii::t('main-title', 'ВВ данном разделе Вы можете ознакомиться с действующие правилами страхования по видам страхования, с
        возможностью просмотра предыдущих редакций, внесенных изменений и дополнений')?></h4>

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th><?=Yii::t('main-title', 'ГОД')?></th>
            <th><?=Yii::t('main-title', 'ПРАВИЛА')?></th>
        </tr>
        </thead>
        <tbody>
        <? $Oldyear = "";foreach($model as $v){ $year = $v['year'];?>
        <?if($year!=$Oldyear&&$Oldyear != ""){?>
            </ul>
            </td>
            </tr>

            <tr>
            <td><?=$v['year']?> <?=Yii::t('main-title', 'год')?></td>
            <td>
            <ul>
        <? } ?>
        <?if($year!=$Oldyear&&$Oldyear == ""){?>
        <tr>
            <td><?=$v['year']?> <?=Yii::t('main-title', 'год')?></td>
            <td>
                <ul>
        <? } ?>
                    <li class="mb-3">
                        <a href="<?php
                                    echo $v->setLang('file');
                                 ?>
                    "><img src="/image/rules-download.png" alt="">
                                <?php
                                    echo $v->setLang('title');
                                ?>
                        </a>
                    </li>
        <? $Oldyear = $v['year'];} ?>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
</div>