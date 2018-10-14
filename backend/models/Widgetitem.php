<?php

namespace backend\models;

use Yii;

class Widgetitem extends \common\models\CommonModel
{
    public static function tableName()
    {
        return 'widgetitem';
    }
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'order'], 'required'],
            [['wid', 'order'], 'integer'],
            [['text', 'text_en', 'text_kz', 'listtype'], 'string'],
            [['title', 'title_kz', 'title_en', 'icon', 'url', 'description', 'description_kz', 'description_en'], 'string', 'max' => 512],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'icon' => 'Иконка',
            'url' => 'Ссылка',
            'description' => 'Описание',
            'description_kz' => 'Описание Kz',
            'description_en' => 'Описание En',
            'wid' => 'id виджета',
            'order' => 'Порядок',
            'text' => 'Содержимое',
            'text_en' => 'Содержимое En',
            'text_kz' => 'Содержимое Kz',
            'listtype'=>'Тип списка'
        ];
    }
    public function getItems()
    {
        return $this->hasMany(Tableitem::className(), ['itemid' => 'id']);
    }
}
