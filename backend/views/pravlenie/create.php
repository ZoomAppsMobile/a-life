<?php

use yii\helpers\Html;

$this->title = 'Создание Pravlenie';
$this->params['breadcrumbs'][] = ['label' => 'Pravlenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pravlenie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
