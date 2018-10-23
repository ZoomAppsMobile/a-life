<?php
namespace common\models;

use Yii;

class Step2kontDannie extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2kont_dannie';
    }

    public function rules()
    {
        return [
            [['region', 'address', 'kod_sect_ec', 'phone', 'email', 'naim_banka', 'bik', 'rasch_kod'], 'required'],
            [['address'], 'string'],
            [['region', 'kod_sect_ec', 'email', 'naim_banka', 'rasch_kod'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['bik'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
            'address' => 'Address',
            'kod_sect_ec' => 'Kod Sect Ec',
            'phone' => 'Phone',
            'email' => 'Email',
            'naim_banka' => 'Naim Banka',
            'bik' => 'Bik',
            'rasch_kod' => 'Rasch Kod',
        ];
    }
}
