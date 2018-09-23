<?php

namespace frontend\controllers;

use Yii;
use common\models\Properties;
use common\models\search\PropertiesSearch;
use yii\data\Pagination;

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

}
