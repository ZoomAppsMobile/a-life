<?php

namespace backend\controllers;

use Yii;
use backend\models\Widget;
use backend\models\Widgetitem;
use backend\models\WidgetSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class WidgetController extends BackendController
{
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

    public function actionIndex()
    {
        $searchModel = new WidgetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $widgetitem=Widgetitem::find()->where(['wid'=>$id])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'widgetitem' => $widgetitem
        ]);
    }

    public function actionCreate()
    {
        $model = new Widget();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionDeleteitem($id)
    {
        $modelid=$this->findModelitem($id)->wid;
        $this->findModelitem($id)->delete();

        return $this->redirect(['view', 'id' => $modelid]);
    }
    protected function findModel($id)
    {
        if (($model = Widget::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModelitem($id)
    {
        if (($model = Widgetitem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
