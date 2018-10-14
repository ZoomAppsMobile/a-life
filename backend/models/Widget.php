<?php

namespace backend\models;

use Yii;

class Widget extends \common\models\CommonModel
{

    public static function tableName()
    {
        return 'widget';
    }

    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'type', 'status'], 'required'],
            [['type', 'status'], 'string'],
            [['title', 'title_kz', 'title_en', 'forblog'], 'string', 'max' => 512],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'forblog' => 'Название',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'type' => 'Тип',
            'status' => 'Статус',
        ];
    }
}
