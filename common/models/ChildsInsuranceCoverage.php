<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "childs_insurance_coverage".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $blog_id
 */
class ChildsInsuranceCoverage extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'childs_insurance_coverage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'blog_id'], 'required'],
            [['text'], 'string'],
            [['blog_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'blog_id' => 'Blog ID',
        ];
    }
}
