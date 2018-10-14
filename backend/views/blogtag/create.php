<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Blogtag */

?>
<div class="blogtag-create">

    <h1>Добавить тег</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
