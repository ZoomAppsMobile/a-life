<?php
namespace frontend\controllers;

use common\models\InsuranceCase;
use common\models\Metatags;
use common\models\Reviews;
use Yii;
use yii\web\Controller;

class SubjectController extends FrontendController
{
    public function actionOtzivi()
    {
        $model = new Reviews();

        $meta = Metatags::find()->where('url = "otzivi"')->one();
        $this->setMeta($meta);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success1', 'Спасибо за ваш отзыв');
            return $this->render('otzivi',  compact('model'));
        }

        return $this->render('otzivi',  compact('model'));
    }

    public function actionStrahovoySluchay()
    {
        $model = new InsuranceCase();

        $meta = Metatags::find()->where('url = "strahovoy-sluchay"')->one();
        $this->setMeta($meta);

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            Yii::$app->session->setFlash('success1', 'Спасибо за ваш отзыв');
            return $this->render('strahovoy-sluchay',  compact('model'));
        }

        return $this->render('strahovoy-sluchay',  compact('model'));
    }
}