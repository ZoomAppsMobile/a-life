<?php
namespace common\models;

use Yii;

class Step2polis extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2polis';
    }

    public function rules()
    {
        return [
            [['tipe_lica', 'insuranceProgramm', 'beginDate', 'endDate', 'country1', 'country2', 'country3'], 'required'],
            [['mst_id', 'tipe_lica', 'insuranceProgramm', 'rprogSrok', 'rprogMaxDays', 'country1', 'country2', 'country3'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_id' => 'Mst ID',
            'tipe_lica' => 'Тип лица',
            'insuranceProgramm' => 'Программа страхования',
            'rprogSrok' => 'Продолжительность страхования',
            'rprogMaxDays' => 'Макс. кол-во дней за границей',
            'beginDate' => 'Начало действия',
            'endDate' => 'Окончание действия',
            'country1' => 'Страна 1',
            'country2' => 'Страна 2',
            'country3' => 'Страна 3',
        ];
    }
}
