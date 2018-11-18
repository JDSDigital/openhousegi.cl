<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use frontend\models\ContactForm;
use common\models\Properties;
use common\models\search\PropertiesSearch;

class PropiedadesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $propertiesSearch = new PropertiesSearch;
        $dataProvider = $propertiesSearch->search(Yii::$app->request->post());

        return $this->render('index', [
          'propertiesSearch' => $propertiesSearch,
          'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = new ContactForm;
        $url = Url::to(['propiedades/view', 'id' => $id], true);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail($url)) {
                Yii::$app->session->setFlash('success', 'Gracias por escribirnos. Te contactaremos lo mas pronto posible.');
            } else {
                Yii::$app->session->setFlash('error', 'Ocurrió un error enviando tu mensaje. Por favor intenta mas tarde.');
            }

            return $this->refresh();
        } else {
            $property = Properties::findOne($id);
            $property->updateCounters(['visits' => 1]);

            return $this->render('view', [
                'property' => $property,
                'model' => $model,
            ]);
        }

    }

    public function actionSearch($id)
    {
        $property = Properties::findOne($id);

        $propertiesSearch = new PropertiesSearch;
        $dataProvider = $propertiesSearch->search([
          'PropertiesSearch' => [
              'title' => '',
              'contract_id' => $property->contract_id,
              'type_id' => 0,
              'zone' => 0,
          ]
        ]);

        return $this->render('index', [
          'propertiesSearch' => $propertiesSearch,
          'dataProvider' => $dataProvider,
        ]);
    }

}
