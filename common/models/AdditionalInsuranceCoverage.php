<?php

namespace common\models;

use backend\models\Blog;
use Yii;

/**
 * This is the model class for table "additional_insurance_coverage".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $blog_id
 */
class AdditionalInsuranceCoverage extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'additional_insurance_coverage';
    }

    /**
     * @inheritdoc
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
     * @inheritdoc
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

    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }
}
