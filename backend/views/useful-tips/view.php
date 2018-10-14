<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UsefulTips */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Вопросы с полезныех советов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useful-tips-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'phone',
            'vopros:ntext',
            'city',
            'email:email',
        ],
    ]) ?>

</div>
