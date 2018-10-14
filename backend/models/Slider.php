<?php

namespace backend\models;

use Yii;


class Slider extends \common\models\CommonModel
{

    public static function tableName()
    {
        return 'slider';
    }

    public function rules()
    {
        return [
            [['image', 'order', 'status'], 'required'],
            [['order'], 'integer'],
            [['status', 'type'], 'string'],
            [['title', 'title_kz', 'title_en', 'image', 'description', 'description_kz', 'description_en', 'url'], 'string', 'max' => 512],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок (Kz)',
            'title_en' => 'Заголовок (En)',
            'image' => 'Картинка',
            'description' => 'Описание',
            'description_kz' => 'Описание (Kz)',
            'description_en' => 'Описание (En)',
            'url' => 'Ссылка',
            'order' => 'Порядок',
            'status' => 'Статус',
            'type' => 'Тип',
        ];
    }
}
