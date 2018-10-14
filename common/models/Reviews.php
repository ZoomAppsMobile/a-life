<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $text
 * @property string $fio
 * @property string $phone
 * @property string $email
 */
class Reviews extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'fio', 'phone', 'email'], 'required'],
            [['text'], 'string'],
            [['fio', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Текст',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'Email',
        ];
    }
}
