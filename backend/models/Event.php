<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $doc
 * @property string $doc_kz
 * @property string $doc_en
 * @property integer $order
 * @property string $status
 */
class Event extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'doc', 'doc_kz', 'doc_en', 'order', 'status'], 'required'],
            [['order'], 'integer'],
            [['status'], 'string'],
            [['title', 'title_kz', 'title_en', 'doc', 'doc_kz', 'doc_en'], 'string', 'max' => 512],
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
            'doc' => 'Документ',
            'doc_kz' => 'Документ (Kz)',
            'doc_en' => 'Документ (En)',
            'order' => 'Порядок',
            'status' => 'Статус',
        ];
    }
}
