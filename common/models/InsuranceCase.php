<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "insurance_case".
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $Last_name
 * @property string $number
 * @property string $phone
 * @property string $email
 * @property string $iin
 * @property string $text
 */
class InsuranceCase extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insurance_case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'first_name', 'Last_name', 'number', 'phone', 'email', 'iin', 'text'], 'required'],
            [['text'], 'string'],
            [['name', 'first_name', 'Last_name', 'number', 'phone', 'email', 'iin'], 'string', 'max' => 255],
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
            'first_name' => 'Фамилия',
            'Last_name' => 'Отчество',
            'number' => 'Номер',
            'phone' => 'Телефон',
            'email' => 'Email',
            'iin' => 'ИИН',
            'text' => 'Текст',
        ];
    }
}
