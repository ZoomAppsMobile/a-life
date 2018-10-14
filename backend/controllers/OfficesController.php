<?php

namespace backend\controllers;

use common\models\City;
use Yii;
use common\models\Offices;
use backend\models\search\OfficesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OfficesController implements the CRUD actions for Offices model.
 */
class OfficesController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
     * Lists all Offices models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OfficesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCity()
    {
        $model = City::find()->where("id = ".$_GET['id'])->one();

        echo $model->name;

        die;
    }

    /**
     * Displays a single Offices model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Offices model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Offices();

        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstances($model, 'img');

            $time = time();
            foreach($files as $file)
                $file->saveAs($model->path . $time . $file->baseName . '.' . $file->extension);

            if($file)
                $model->img =  $time . $file->baseName . '.' . $file->extension;

            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Offices model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_img = $model->img;

        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstances($model, 'img');

            $time = time();
            foreach($files as $file)
                $file->saveAs($model->path . $time . $file->baseName . '.' . $file->extension);

            if($file)
                $model->img =  $time . $file->baseName . '.' . $file->extension;
            else
                $model->img = $old_img;

            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Offices model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Offices model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Offices the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Offices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
