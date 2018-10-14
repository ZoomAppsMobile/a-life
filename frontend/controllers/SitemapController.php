<?php
namespace frontend\controllers;
use common\models\Metatags;
use yii\web\Controller;

class SitemapController extends FrontendController
{
	public function actionIndex()
    {
        $meta = Metatags::find()->where('url = "sitemap"')->one();
        $this->setMeta($meta);

        return $this->render('index');
    }
  
}
?>