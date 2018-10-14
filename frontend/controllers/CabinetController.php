<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 10:29
 */

namespace frontend\controllers;

use common\models\Metatags;
use common\models\Profile;
use common\models\Profiles;
use common\models\User;
use yii\web\Controller;
use Yii;

class CabinetController extends FrontendController
{

    public function actionIndex(){
        if(!Yii::$app->user->id)
            return $this->redirect('/login');

        $profile = Profiles::findOne(Yii::$app->user->id);

        $meta = Metatags::find()->where('url = "cabinet"')->one();
        $this->setMeta($meta);

        return $this->render('index', compact('profile'));
    }

    public function actionEdit(){
        $profile = Profiles::findOne(Yii::$app->user->id);
        if($profile->load(Yii::$app->request->get()) && $profile->save(false))
            return json_encode($profile->toArray());
        else
            return 0;
    }

    public function actionPassword(){
        $user = User::findOne(Yii::$app->user->id);
        $get = Yii::$app->request->get();

        $message = [];
        if($user->validatePassword($get['password'])){
            if($get['new_password'] == $get['repeat_password']){
                $user->setPassword($get['new_password']);
                $user->save(false);

                $message['error'] = 0;
                $message['message'] = "Пароль успешно изменен!";
            } else{
                if(iconv_strlen($get['new_password'])<6){
                    $message['error'] = 1;
                    $message['message'] = "Поле новый пароль должно содержать шесть или более символов.";
                }else {
                    $message['error'] = 1;
                    $message['message'] = "Поля новый пароль и повторите пароль не совпадают.";
                }
            }
        }
        else{
            $message['error'] = 1;
            $message['message'] = "Неверный пароль.";
        }

        return json_encode($message);
    }
}