<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partners_and_customers".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $title_kz
 * @property string $text
 * @property string $text_en
 * @property string $text_kz
 * @property string $doc
 * @property string $doc_en
 * @property string $doc_kz
 * @property string $keywords
 * @property string $description
 * @property string $url
 * @property integer $status
 */
class PartnersAndCustomers extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners_and_customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'text_en', 'text_kz'], 'string'],
            [['status', 'type'], 'integer'],
            [['title', 'title_en', 'title_kz', 'doc', 'doc_en', 'doc_kz', 'keywords', 'description', 'url'], 'string', 'max' => 255],
            [['url'], 'unique'],
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
            'title_en' => 'Заголовок En',
            'title_kz' => 'Заголовок Kz',
            'text' => 'Текст',
            'text_en' => 'Текст En',
            'text_kz' => 'Текст Kz',
            'doc' => 'Документ',
            'doc_en' => 'Документ En',
            'doc_kz' => 'Документ Kz',
            'keywords' => 'Keywords',
            'description' => 'Описание',
            'url' => 'Url',
            'status' => 'Статус',
        ];
    }
}
