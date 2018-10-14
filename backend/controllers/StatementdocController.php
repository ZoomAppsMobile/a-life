<?php

namespace backend\controllers;

use Yii;
use backend\models\Statementdoc;
use backend\models\StatementdocSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Statement;
/**
 * StatementdocController implements the CRUD actions for Statementdoc model.
 */
class StatementdocController extends Controller
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
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Statementdoc models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $searchModel = new StatementdocSearch();
        $searchModel->state_id=$id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $statement=Statement::findOne($id);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'statement'=>$statement
        ]);
    }

    /**
     * Displays a single Statementdoc model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Statementdoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Statementdoc();

        if ($model->load(Yii::$app->request->post())) {
            $model->state_id=$id;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $statement=Statement::findOne($id);
            return $this->render('create', [
                'model' => $model,
                'statement'=>$statement,
            ]);
        }
    }

    /**
     * Updates an existing Statementdoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
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

    /**
     * Deletes an existing Statementdoc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Statementdoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Statementdoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Statementdoc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
