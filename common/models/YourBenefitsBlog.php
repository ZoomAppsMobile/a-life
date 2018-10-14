<?php

namespace common\models;

use backend\models\Blog;
use Yii;

/**
 * This is the model class for table "your_benefits_blog".
 *
 * @property integer $id
 * @property integer $your_benefits_id
 * @property integer $blog_id
 *
 * @property Blog $blog
 * @property YourBenefits $yourBenefits
 */
class YourBenefitsBlog extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'your_benefits_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['your_benefits_id', 'blog_id'], 'required'],
            [['your_benefits_id', 'blog_id', 'sort'], 'integer'],
            ['text', 'string'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
            [['your_benefits_id'], 'exist', 'skipOnError' => true, 'targetClass' => YourBenefits::className(), 'targetAttribute' => ['your_benefits_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'your_benefits_id' => 'Your Benefits ID',
            'blog_id' => 'Blog ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYourBenefits()
    {
        return $this->hasOne(YourBenefits::className(), ['id' => 'your_benefits_id']);
    }
}
