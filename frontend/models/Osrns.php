<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "osrns".
 *
 * @property int $id
 * @property int $name
 * @property int $oked
 * @property string $phone
 * @property string $email
 * @property int $d_rascheta
 * @property string $yearFond
 * @property string $skpr
 * @property string $kpr
 * @property string $kol_sotr
 * @property int $premKz
 * @property int $sumStrahKz
 */
class Osrns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'osrns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'oked', 'phone', 'email', 'd_rascheta', 'yearFond', 'col_sotr'], 'required'],
            [['premKz', 'sumStrahKz'], 'safe'],
            [['phone'], 'string', 'max' => 30],
            [['email', 'yearFond', 'col_sotr'], 'string', 'max' => 100],
            ['email', 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ф.И.О./Наименование юр. лица',
            'oked' => ' ОКЭД',
            'phone' => 'Контактный телефон',
            'email' => 'E-mail',
            'd_rascheta' => 'Дата расчетa',
            'yearFond' => 'Годовой ФОТ',
            'skpr' => 'СКПР',
            'kpr' => 'КПР',
            'col_sotr' => 'Кол. сотрудников',
            'premKz' => 'Страховая сумма',
            'sumStrahKz' => 'Страховой взнос',
        ];
    }
}
