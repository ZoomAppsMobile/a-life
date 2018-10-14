<?php

namespace backend\controllers;

use Yii;
use common\models\Advantages;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * AdvantagesController implements the CRUD actions for Advantages model.
 */
class AdvantagesController extends Controller
{
    public function actionCreate($id)
    {
        $model = new Advantages();
        header('Content-Type: text/html; charset=utf-8');
        if ($model->load(Yii::$app->request->post())) {
            $model->files = UploadedFile::getInstances($model, 'files');

            foreach($model->files as $file) {
//                echo '<pre>'. print_r($file->extension, true). '</pre>';
                $model1 = new Advantages();
                $time = time();
                $file->saveAs($model1->path . $time . $file->baseName . '.' . $file->extension);

                $model1->img = $time . $file->baseName . '.' . $file->extension;
                $model1->title = "";
                $model1->title_kz = "";
                $model1->title_en = "";
                $model1->text = "";
                $model1->text_kz = "";
                $model1->text_en = "";
//                $model1->category_id = $id;
                $model1->save(false);
            }

        }
        $this->redirect(['menu/view', 'id' => $id]);
    }

    public function actionEdit($id)
    {
        if (Yii::$app->request->post()) {

            $post = Yii::$app->request->post();

            foreach($post['Advantages']['id'] as $k => $v){
                $model = Advantages::findOne($post['Advantages']['id'][$k]);
                $model->title = $post['Advantages']['title'][$k];
                $model->title_kz = $post['Advantages']['title_kz'][$k];
                $model->title_en = $post['Advantages']['title_en'][$k];
                $model->text = $post['Advantages']['text'][$k];
                $model->text_kz = $post['Advantages']['text_kz'][$k];
                $model->text_en = $post['Advantages']['text_en'][$k];
                $model->save(false);
            }

        }

        $this->redirect(['menu/view', 'id' => $id]);
    }

    public function actionMoveUp($id, $menu_id)
    {
        $model = Advantages::findOne($id);
        if ($model->sort != 1) {
            $sort = $model->sort - 1;
            $model_down = Advantages::find()->where("sort = $sort")->one();
            $model_down->sort += 1;
            $model_down->save();

            $model->sort -= 1;
            $model->save();
        }
        $this->redirect(['menu/view', 'id' => $menu_id]);
    }

    public function actionMoveDown($id, $menu_id)
    {
        $model = Advantages::findOne($id);
        $model_max_sort = Advantages::find()->orderBy("sort DESC")->one();

        if ($model->id != $model_max_sort->id) {
            $sort = $model->sort + 1;
            $model_up = Advantages::find()->where("sort = $sort")->one();
            $model_up->sort -= 1;
            $model_up->save();

            $model->sort += 1;
            $model->save();
        }
        $this->redirect(['menu/view', 'id' => $menu_id]);
    }

    public function actionDelete($id, $menu_id)
    {
        $model = Advantages::findOne($id);
        $models = Advantages::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        Advantages::deleteAll(['id' => $id]);

        $this->redirect(['menu/view', 'id' => $menu_id]);
    }
}
