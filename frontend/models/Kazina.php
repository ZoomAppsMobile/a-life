<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kazina".
 *
 * @property int $id
 * @property string $name
 * @property string $phone-number
 * @property string $email
 * @property int $clnYears
 * @property int $sex
 * @property int $srokYears
 * @property int $periodichnost
 * @property int $strSum
 * @property int $strVz
 * @property int $ADB
 * @property int $OutADB
 * @property int $TT
 * @property int $OutTT
 * @property int $TD
 * @property int $OutTD
 * @property int $HD
 * @property int $OutHD
 * @property int $ATPD
 * @property int $OutATPD
 * @property int $CI
 * @property int $OutCI
 * @property int $os_ot_uplaty
 * @property int $OutTPD
 */
class Kazina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kazina';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone-number', 'email', 'clnYears', 'sex', 'srokYears', 'periodichnost', 'strSum', 'data_rascheta', 'ADB', 'TT', 'TD', 'HD', 'ATPD', 'CI', 'os_ot_uplaty'], 'required'],
//            [['clnYears', 'sex', 'srokYears', 'periodichnost', 'strSum', 'strVz', 'ADB', 'OutADB', 'TT', 'OutTT', 'TD', 'OutTD', 'HD', 'OutHD', 'ATPD', 'OutATPD', 'CI', 'OutCI', 'os_ot_uplaty', 'OutTPD'], 'integer'],
            [[ 'OutADB', 'OutTT', 'OutTD', 'OutHD', 'OutATPD', 'OutCI', 'OutTPD', 'strVz'], 'safe'],
            [['name'], 'string', 'max' => 256],
            [['phone-number'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 100],
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
            'name' => 'Ф.И.О.',
            'phone-number' => 'Телефон',
            'email' => 'E-mail',
            'clnYears' => 'Дата рождения',
            'sex' => 'Пол',
            'srokYears' => 'Срок страхования',
            'periodichnost' => 'Периодичность',
            'data_rascheta' => 'Дата расчета',
            'strSum' => 'Страховая сумма',
            'strVz' => 'Страховой взнос',
            'ADB' => 'Смерть в результате НС',
            'OutADB' => 'Страховой взнос смерть в результате НС',
            'TT' => 'Телесная травма в результате',
            'OutTT' => 'Страховой взнос телесная травма в результате',
            'TD' => 'Установление временой нетрудоспособности',
            'OutTD' => 'Страховой взнос установление временой нетрудоспособности',
            'HD' => 'Госпитализация в результате НС',
            'OutHD' => 'Страховой взнос госпитализация в результате НС',
            'ATPD' => 'Инвалидность в результате НС',
            'OutATPD' => 'Страховой взнос инвалидность в результате НС',
            'CI' => 'Критическое заболевание',
            'OutCI' => 'Страховой взнос критическое заболевание',
            'os_ot_uplaty' => 'Освобождение от уплаты взносов',
            'OutTPD' => 'Страховой взнос освобождение от уплаты взносов',
        ];
    }
}
