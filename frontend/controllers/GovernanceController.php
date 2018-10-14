<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2018
 * Time: 9:44
 */

namespace frontend\controllers;

use backend\models\Faqcategory;
use common\models\Metatags;
use common\models\Pravlenie;
use yii\web\Controller;

class GovernanceController extends FrontendController
{
    public function actionIndex()
    {
        $model = Pravlenie::find()->where('status = 1')->all();

        return $this->render('index', compact('model'));
    }
}