<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AreDistinguished */

$this->title = 'Create Are Distinguished';
$this->params['breadcrumbs'][] = ['label' => 'Are Distinguisheds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="are-distinguished-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
