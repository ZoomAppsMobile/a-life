<?php
namespace frontend\controllers;
use common\models\Menu;
use common\models\Metatags;
use yii\web\Controller;
use backend\models\Blogcategory;
use backend\models\Blog;
use backend\models\Blogtag;
use backend\models\Privatewidget;
use yii\web\HttpException;

class PrivateController extends FrontendController
{
	public function actionIndex()
    {
        $model = Metatags::find()->where('url = "private-clients"')->one();
        $this->setMeta($model);

    	$blogcategory=Blogcategory::find()->where(['status'=>'1'])->all();
        return $this->render('index',['blogcategory'=>$blogcategory]);
    }
    public function actionDetail($url)
    {
    	$blog=Blog::find()->where(['status'=>'1', 'url'=>$url])->one();
        $this->setMeta($blog);
    	if(!$blog)
            throw new HttpException(404 ,'Not found');
    	$blogtags=Blogtag::find()->where(['blogid'=>$blog->id])->all();
        $privatewidget=Privatewidget::find()->where(['status'=>'1', 'pid'=>$blog->id])->orderBy(['order' => SORT_ASC])->all();
        return $this->render('detail', ['blog'=>$blog, 'blogtags'=>$blogtags, 'privatewidget'=>$privatewidget]);
    }
}
?>