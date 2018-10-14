<?php

namespace common\models;

use backend\models\Blog;
use Yii;

/**
 * This is the model class for table "additional_protection_insurer".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $blog_id
 */
class AdditionalProtectionInsurer extends \common\models\CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'additional_protection_insurer';
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

    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }
}
