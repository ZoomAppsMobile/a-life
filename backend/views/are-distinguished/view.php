<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AreDistinguished */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'отклики на вакансию', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="are-distinguished-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fio',
            'date_of_birth',
            'city',
            'phone',
            'email:email',
            'doc',
            'vacancy_id',
            'opit_1',
            'opit_2',
        ],
    ]) ?>

</div>
