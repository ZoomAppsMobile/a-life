<?php
namespace common\models;

use Yii;

class Step2zastrahovanniy extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2zastrahovanniy';
    }

    public function rules()
    {
        return [
            [['iin', 'resident', 'familia', 'ima', 'otchetvo', 'pol'], 'required'],
            [['id', 'mst_id', 'resident', 'pol'], 'integer'],
            [['iin'], 'string', 'max' => 12],
            [['familia', 'ima', 'otchetvo'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_id' => 'Mst ID',
            'iin' => 'ИИН',
            'resident' => 'Резидент',
            'familia' => 'Фамилия',
            'ima' => 'Имя',
            'otchetvo' => 'Отчество',
            'pol' => 'Пол',
        ];
    }
}
