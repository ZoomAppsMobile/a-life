<?php
namespace console\controllers;

use app\models\Post;
use app\rbac\AuthorRule;
use app\rbac\NewRule;
use Yii;
use yii\console\Controller;
use app\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Console;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $client = $auth->createRole('manager');
        $auth->add($client);

        $client = $auth->createRole('client');
        $auth->add($client);

        $auth->addChild($admin, $client);

        $this->stdout('Done!' . PHP_EOL);
    }
}