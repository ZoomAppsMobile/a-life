<?php

namespace backend\models;

use Yii;

class Vacancy extends \common\models\CommonModel
{
    public static function tableName()
    {
        return 'vacancy';
    }

    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'main', 'content', 'content_kz', 'content_en', 'city', 'status'], 'required'],
            [['main', 'content', 'content_kz', 'content_en', 'status'], 'string'],
            [['salary'], 'integer'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'image', 'city', 'data'], 'string', 'max' => 512],
        ];
    }

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
            'main' => 'На главную',
            'content' => 'Контент',
            'content_kz' => 'Контент (Kz)',
            'content_en' => 'Контент (En)',
            'salary' => 'Зарплата',
            'city' => 'Город',
            'status' => 'Статус',
            'data' => 'Дата'
        ];
    }
}
