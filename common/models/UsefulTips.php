<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "useful_tips".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $vopros
 * @property string $city
 * @property string $email
 */
class UsefulTips extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'useful_tips';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'vopros', 'city', 'email'], 'required'],
            [['vopros'], 'string'],
            ['email', 'email'],
            [['name', 'phone', 'city', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Контактный телефон',
            'vopros' => 'Ваш вопрос',
            'city' => 'Город',
            'email' => 'E-mail',
        ];
    }
}
