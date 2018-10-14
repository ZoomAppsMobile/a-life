<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metatags".
 *
 * @property int $id
 * @property int $menu_id
 * @property string $url
 * @property string $title
 * @property string $description
 */
class Metatags extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metatags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'title', 'description', 'title_kz', 'title_en', 'description_kz', 'description_en'], 'required'],
            [['menu_id'], 'integer'],
            [['description'], 'string'],
            [['url', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Меню',
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'title_kz' => 'Title Kz',
            'title_en' => 'Title En',
            'description_kz' => 'Description Kz',
            'description_en' => 'Description En',
        ];
    }
}
