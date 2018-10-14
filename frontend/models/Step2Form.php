<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

class Step2Form extends Model
{
    public $box1, $box2, $box3, $box4;

    public function rules()
    {
        return [
            [['box1', 'box2', 'box3', 'box4'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'email' => 'Почта',
            'password' => 'Пароль',
            'status'=>'Статус',
            'verifyCode' => 'Капча',
        ];
    }
}
