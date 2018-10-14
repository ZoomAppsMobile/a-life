<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "statementdoc".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $doc
 * @property string $doc_kz
 * @property string $doc_en
 * @property string $status
 * @property integer $order
 * @property integer $state_id
 */
class Statementdoc extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statementdoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'doc', 'doc_kz', 'doc_en', 'status', 'order',], 'required'],
            [['status'], 'string'],
            [['order', 'state_id'], 'integer'],
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
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'doc' => 'Документ',
            'doc_kz' => 'Документ Kz',
            'doc_en' => 'Документ En',
            'status' => 'Статус',
            'order' => 'Порядок',
            'state_id' => 'State ID',
        ];
    }
}
