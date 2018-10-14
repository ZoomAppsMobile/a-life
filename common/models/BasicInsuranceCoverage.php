<?php

namespace common\models;

use backend\models\Blog;
use Yii;

/**
 * This is the model class for table "basic_insurance_coverage".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $blog_id
 */
class BasicInsuranceCoverage extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_insurance_coverage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'text', 'blog_id'], 'required'],
            [['id', 'blog_id'], 'integer'],
            [['text'], 'string'],
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
