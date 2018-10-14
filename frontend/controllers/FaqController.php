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
use yii\web\Controller;

class FaqController extends FrontendController
{
    public function actionIndex()
    {
        $model = Faqcategory::find()->where('status = 1')->all();

        $meta = Metatags::find()->where('url = "faq"')->one();
        $this->setMeta($meta);

        return $this->render('index', compact('model'));
    }
}