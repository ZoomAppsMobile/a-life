<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "new_vacancy".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $city
 * @property string $zp
 * @property integer $data
 * @property integer $created_at
 * @property integer $updated_at
 */
class NewVacancy extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'new_vacancy';
    }

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
//                // если вместо метки времени UNIX используется datetime:
//                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'city', 'data'], 'required'],
            [['text'], 'string'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['title', 'city', 'data'], 'string', 'max' => 255],
            [['zp'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Вакансия',
            'text' => 'Текст',
            'city' => 'Город',
            'zp' => 'Зарплата',
            'data' => 'Дата',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Статус',
        ];
    }
}
