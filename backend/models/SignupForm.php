<?php
namespace backend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $names;
	public $surname;
    public $password;
    public $role;
    public $status;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['names', 'required'],
            ['names', 'string', 'min' => 2, 'max' => 255],

			['surname', 'required'],
            ['surname', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['role', 'required'],

            ['status', 'required'],
        ];
    }
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->names = $this->names;
			$user->surname = $this->surname;
            $user->role = $this->role;
            $user->status = $this->status;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }

    public function getRole($role, $user_id, $new){
        $auth = Yii::$app->authManager;

        if(!$new){
            foreach(\Yii::$app->authManager->getRolesByUser($user_id) as $k => $v)
                foreach($v as $k1 => $v1)
                    if($k1=='name')
                        $oldRole = $v1;

            $auth->revoke($auth->getRole($oldRole), $user_id);
        }

        if($role == 1)
            $auth->assign($auth->getRole('admin'), $user_id);
        if($role == 2)
            $auth->assign($auth->getRole('manager'), $user_id);
        if($role == 3)
            $auth->assign($auth->getRole('client'), $user_id);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'email' => 'Email',
            'status' => 'Статус',
			'surname'=>'Фамилия',
            'names' => 'Имя',
            'password' => 'Пароль',
            //'dating' => 'Дата регистрации',
        ];
    }
}