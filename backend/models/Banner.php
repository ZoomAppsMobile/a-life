<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $description
 * @property string $description_kz
 * @property string $description_en
 * @property string $image
 * @property string $url
 * @property string $main
 * @property string $status
 */
class Banner extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'url', 'status'], 'required'],
            [['main', 'status'], 'string'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'image', 'url'], 'string', 'max' => 512],
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
            'title_en' => 'Заголовок (En)',
            'description' => 'Описание',
            'description_kz' => 'Описание (Kz)',
            'description_en' => 'Описание (En)',
            'image' => 'Картинка',
            'url' => 'Ссылка',
            'main' => 'Статичный',
            'status' => 'Статус',
        ];
    }
}
