<?php
namespace backend\models;
use Yii;
class User extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public $new_password;
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'email', 'created_at', 'updated_at', 'role'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['dating'], 'safe'],
            ['new_password', 'string', 'min' => 6],
            [['username', 'password_hash', 'password_reset_token', 'email', 'surname'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['names'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Статус',
            'surname' => 'Фамилия',
            'new_password' => 'Новый пароль',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'names' => 'Имя',
            'role' => 'Роль пользователя',
           // 'dating' => 'Дата регистрации',
        ];
    }
    public function updatePassword($new_password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($new_password);
    }
}
