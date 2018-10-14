<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AreDistinguished */

$this->title = 'Update Are Distinguished: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Are Distinguisheds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="are-distinguished-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
