<?php

namespace backend\controllers;

use common\models\MechanismOfTheContract;
use common\models\MechanismOfTheContractBlog;
use common\models\YourBenefitsBlog;
use Yii;
use backend\models\Blog;
use backend\models\Blogtag;
use backend\models\BlogSearch;
use backend\models\Privatewidget;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;
use Imagine\Image\Box;
/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends BackendController
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
    public function behaviors()
    {
        define(ROLE_USER, 'admin, manager');
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ]
        );
    }
    /**
     * Lists all Blog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $blogtags=Blogtag::find()->where(['blogid'=>$id])->all();
        $privatewidget=Privatewidget::find()->where(['pid'=>$id])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'blogtags' => $blogtags,
            'privatewidget'=>$privatewidget,
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Blog();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Image::thumbnail($_SERVER['DOCUMENT_ROOT'].$model->thumb, 380, 380)
                ->resize(new Box(380,380))
                ->save($_SERVER['DOCUMENT_ROOT'].$model->thumb,
                    ['quality' => 100]);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Image::thumbnail($_SERVER['DOCUMENT_ROOT'].$model->thumb, 380, 380)
                ->resize(new Box(380,380))
                ->save($_SERVER['DOCUMENT_ROOT'].$model->thumb,
                    ['quality' => 100]);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionDeleteblogtag($id)
    {
        $modelid=$this->findBlogTag($id)->blogid;
        $this->findBlogTag($id)->delete();

        return $this->redirect(['view', 'id' => $modelid]);
    }
    public function actionDeletepw($id)
    {
        $modelid=$this->findPw($id)->pid;
        $this->findPw($id)->delete();

        return $this->redirect(['view', 'id' => $modelid]);
    }
    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findBlogTag($id)
    {
        if (($model = Blogtag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findPw($id)
    {
        if (($model = Privatewidget::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
