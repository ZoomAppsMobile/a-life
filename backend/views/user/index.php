<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
  
    <p>
        <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'email:email',
            'names',
           /* [
                'options' => ['width'=> '140'],
                'format' => 'html',    
                'value' => function ($data) {                       
                        return '<a href="/admin/user/password?id='.$data['id'].'">изменить пароль</a>';
                },
                'label'=>false,
                'filter'=>false,
            ],*/
        //     'dating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
