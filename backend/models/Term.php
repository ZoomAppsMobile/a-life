<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "term".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $description
 * @property string $description_kz
 * @property string $description_en
 * @property string $status
 */
class Term extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'term';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'status'], 'required'],
            [['description', 'description_kz', 'description_en', 'status'], 'string'],
            [['title', 'title_kz', 'title_en'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок (Kz)',
            'title_en' => 'заголовок (En)',
            'description' => 'Описание',
            'description_kz' => 'Описание (Kz)',
            'description_en' => 'Описание (En)',
            'status' => 'Статус',
        ];
    }
}
