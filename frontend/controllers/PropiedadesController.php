<?php

namespace frontend\controllers;

use Yii;
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
        $property = Properties::findOne($id);

        return $this->render('view', [
          'property' => $property,
        ]);
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
