<?php
namespace common\models;

use Yii;

class Step2strahovatel extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2strahovatel';
    }

    public function rules()
    {
        return [
            [['bin', 'resident', 'naimenivanie', 'licenzia', 'vid_ec_deyat'], 'required'],
            [['mst_id', 'resident'], 'integer'],
            [['bin'], 'string', 'max' => 30],
            [['naimenivanie', 'licenzia', 'vid_ec_deyat'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_id' => 'Mst ID',
            'bin' => 'Бин',
            'resident' => 'Резидент',
            'naimenivanie' => 'Наименование',
            'licenzia' => 'Лицензия',
            'vid_ec_deyat' => 'Вид экономической деятельности',
        ];
    }
}
