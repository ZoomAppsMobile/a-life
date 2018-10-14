<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2018
 * Time: 15:31
 */

namespace frontend\controllers;

use backend\models\Advise;
use backend\models\Event;
use common\models\Metatags;
use common\models\UsefulTips;
use yii\web\Controller;
use Yii;

class ClientsupportController extends FrontendController
{
        public function actionUsefulTips()
        {
            $model = Advise::find()->orderBy('order')->all();

            $UsefulTips = new UsefulTips();

            $meta = Metatags::find()->where('url = "useful-tips"')->one();
            $this->setMeta($meta);

            if ($UsefulTips->load(Yii::$app->request->post()) && $UsefulTips->save())
                Yii::$app->session->setFlash('success1', 'Спасибо за Ваш вопрос');

            return $this->render('/menu/client-support/useful-tips', compact('model', 'UsefulTips'));
        }

        public function actionActionInsuredEvent()
        {
            $model = Event::find()->orderBy('order')->all();

            $meta = Metatags::find()->where('url = "action-insured-event"')->one();
            $this->setMeta($meta);

            return $this->render('/menu/client-support/action-insured-event', compact('model'));
        }
}