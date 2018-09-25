<?php

namespace backend\modules\Properties\controllers;

use Yii;
use common\models\Properties;
use common\models\Images;
use common\models\search\PropertiesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * PropertiesController implements the CRUD actions for Properties model.
 */
class PropertiesController extends Controller
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
                    // 'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Properties models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PropertiesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Properties model.
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
     * Creates a new Properties model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Properties();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {

              $model->upload();

              return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Properties model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $uploadedImages = Images::find()->where(['property_id' => $id])->all();

        $previews = [];
        $previewsConfig = [];

        foreach ($uploadedImages as $image){
            $url = Url::to('@web/images/properties/thumbs/') . $image->file;
            $url = str_replace('backend', 'frontend', $url);
            $previews[] = $url;

            $previewsConfig[] = [
              'caption' => $image->file,
              'key' => $image->id,
              'url' => Url::to(["/Properties/properties/deleteimage?id=" . $image->id])
            ];
        }

        if ($model->load(Yii::$app->request->post())) {

          if ($model->save()) {

            $model->upload();

            return $this->redirect(['view', 'id' => $model->id]);
          }
        }

        return $this->render('update', [
            'model' => $model,
            'previews' => $previews,
            'previewsConfig' => $previewsConfig,
        ]);
    }

    /**
     * Deletes an existing Properties model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $images = Images::find()->where(['property_id' => $id])->all();

        foreach ($images as $image) {
          $this->actionDeleteimage($image->id);
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Deletes a single image
     * @param $id
     * @return bool
     */
    public function actionDeleteimage($id){

        $image = Images::findOne($id);

        $property_id = $image->property_id;

        $url = Url::to('@frontend/web/images/properties/') . $image->file;
        $urlThumb = Url::to('@frontend/web/images/properties/thumbs/') . $image->file;

        // Delete image from the database and the folder
        if (unlink($url) && unlink($urlThumb) && $image->delete())
            return true;
        else
            return false;
    }

    /**
     * Changes Status.
     *
     * @return string
     */
    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = Properties::findOne($data['id']);

            if ($model->status)
                $model->status = Properties::STATUS_DELETED;
            else
                $model->status = Properties::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Changes Featured Status.
     *
     * @return string
     */
    public function actionFeatured()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = Properties::findOne($data['id']);

            if ($model->featured)
                $model->featured = Properties::STATUS_DELETED;
            else
                $model->featured = Properties::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Finds the Properties model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Properties the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Properties::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
