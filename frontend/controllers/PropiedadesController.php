<?php

namespace frontend\controllers;

use common\models\Properties;

class PropiedadesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $properties = Properties::find()
          ->where(['status' => Properties::STATUS_ACTIVE])
          ->andWhere(['taken' => Properties::STATUS_DELETED])
          ->orderBy([
            'featured' => SORT_DESC,
            'created_at' => SORT_DESC,
          ])
          ->all();

        return $this->render('index', [
          'properties' => $properties,
        ]);
    }

    public function actionView($id)
    {
        $property = Properties::findOne($id);

        $related = Properties::find()
          ->where(['status' => Properties::STATUS_ACTIVE])
          ->andWhere(['taken' => Properties::STATUS_DELETED])
          ->andWhere(['type_id' => $property->type_id])
          ->andWhere(['contract_id' => $property->contract_id])
          ->orderBy([
            // 'featured' => SORT_DESC,
            'created_at' => SORT_DESC,
          ])
          ->limit(4)
          ->all();

        return $this->render('view', [
          'property' => $property,
          'related' => $related,
        ]);
    }

}
