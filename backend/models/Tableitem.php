<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tableitem".
 *
 * @property integer $id
 * @property string $names
 * @property string $value
 * @property integer $order
 * @property integer $itemid
 *
 * @property Widgetitem $item
 */
class Tableitem extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tableitem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['names', 'names_kz', 'names_en', 'value', 'value_kz', 'value_en', 'order'], 'required'],
            [['order', 'itemid'], 'integer'],
            [['names', 'names_kz', 'names_en', 'value', 'value_kz', 'value_en'], 'string', 'max' => 512],
            [['itemid'], 'unique'],
            [['itemid'], 'exist', 'skipOnError' => true, 'targetClass' => Widgetitem::className(), 'targetAttribute' => ['itemid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'names' => 'Атрибут',
            'names_en' => 'Атрибут En',
            'names_kz' => 'Атрибут Kz',
            'value' => 'Значение',
            'value_kz' => 'Значение Kz',
            'value_en' => 'Значение En',
            'order' => 'Порядок',
            'itemid' => 'Itemid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Widgetitem::className(), ['id' => 'itemid']);
    }
}
