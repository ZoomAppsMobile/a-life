<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property int $user_id
 * @property string $iin
 * @property string $fio
 * @property string $phone
 * @property string $email
 */
class Profiles extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'iin', 'fio', 'phone', 'email'], 'required'],
            [['user_id'], 'integer'],
            [['iin', 'email'], 'string', 'max' => 50],
            [['fio'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 30],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'iin' => 'Iin',
            'fio' => 'Fio',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
