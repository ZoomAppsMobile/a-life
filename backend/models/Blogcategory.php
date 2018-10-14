<?php

namespace backend\models;

use Yii;

class Blogcategory extends \common\models\CommonModel
{
    public static function tableName()
    {
        return 'blogcategory';
    }

    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'order', 'status', 'type'], 'required'],
            [['order'], 'integer'],
            [['status', 'type'], 'string'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'image', 'url'], 'string', 'max' => 512],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'description' => 'Описание',
            'description_kz' => 'Описание Kz',
            'description_en' => 'Описание En',
            'image' => 'Картинка',
            'order' => 'Порядок',
            'status' => 'Статус',
            'type' => 'Тип',
            'url' => 'Url',
        ];
    }
}
