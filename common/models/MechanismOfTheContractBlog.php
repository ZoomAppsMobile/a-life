<?php

namespace common\models;

use backend\models\Blog;
use Yii;

/**
 * This is the model class for table "mechanism_of_the_contract_blog".
 *
 * @property integer $id
 * @property integer $mechanism_of_the_contract_id
 * @property integer $blog_id
 *
 * @property Blog $blog
 * @property MechanismOfTheContract $mechanismOfTheContract
 */
class MechanismOfTheContractBlog extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mechanism_of_the_contract_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mechanism_of_the_contract_id', 'blog_id'], 'required'],
            [['mechanism_of_the_contract_id', 'blog_id', 'sort'], 'integer'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
            [['mechanism_of_the_contract_id'], 'exist', 'skipOnError' => true, 'targetClass' => MechanismOfTheContract::className(), 'targetAttribute' => ['mechanism_of_the_contract_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mechanism_of_the_contract_id' => 'Mechanism Of The Contract ID',
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
    public function getMechanismOfTheContract()
    {
        return $this->hasOne(MechanismOfTheContract::className(), ['id' => 'mechanism_of_the_contract_id']);
    }
}
