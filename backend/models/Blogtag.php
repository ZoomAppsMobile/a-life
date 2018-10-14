<?php
namespace backend\models;
use Yii;
class Blogtag extends \common\models\CommonModel
{
    public static function tableName()
    {
        return 'blogtag';
    }
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'order', 'blogid', 'status'], 'required'],
            [['order', 'blogid'], 'integer'],
            [['status'], 'string'],
            [['title', 'title_kz', 'title_en', 'icon', 'file', 'file_kz', 'file_en', 'url'], 'string', 'max' => 512],
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
            'file'=>'Файл',
            'file_kz'=>'Файл Kz',
            'file_en'=>'Файл En',
            'order' => 'Порядок',
            'blogid' => 'Blog id',
            'status' => 'Статус',
        ];
    }
}
