<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "advise".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $status
 * @property integer $order
 */
class Advise extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'status', 'order'], 'required'],
            [['title', 'title_kz', 'title_en', 'status'], 'string'],
            [['order'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Совет',
            'title_kz' => 'Совет (Kz)',
            'title_en' => 'Совет (En)',
            'status' => 'Статус',
            'order' => 'Порядок',
        ];
    }
}
