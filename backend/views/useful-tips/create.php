<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UsefulTips */

$this->title = 'Create Useful Tips';
$this->params['breadcrumbs'][] = ['label' => 'Useful Tips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useful-tips-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
