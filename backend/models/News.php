<?php

namespace backend\models;

use Yii;

class News extends \common\models\CommonModel
{

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'image', 'description', 'description_kz', 'description_en', 'status'], 'required'],
            [['dating'], 'safe'],
            [['content', 'content_kz', 'content_en', 'status'], 'string'],
            [['title', 'title_kz', 'title_en', 'image', 'image2', 'image3', 'description', 'description_kz', 'description_en', 'url'], 'string', 'max' => 512],
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
            'image' => 'Главная картинка',
            'image2' => 'Картинка',
            'image3' => 'Картинка',
            'dating' => 'Дата',
            'description' => 'Описание',
            'description_kz' => 'Описание (Kz)',
            'description_en' => 'Описание (En)',
            'content' => 'Содержимое',
            'content_kz' => 'Содержимое (Kz)',
            'content_en' => 'Содержимое (En)',
            'status' => 'Статус',
        ];
    }
}
