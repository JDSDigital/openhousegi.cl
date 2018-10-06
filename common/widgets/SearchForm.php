<?php
namespace common\widgets;

use Yii;
use common\models\search\PropertiesSearch;

class SearchForm extends \yii\bootstrap\Widget
{
    public $propertiesSearch;

    public function init()
    {
        parent::init();
        $this->propertiesSearch = new PropertiesSearch;
        $this->propertiesSearch->load(Yii::$app->request->post());
    }

    public function run()
    {
      return $this->render('_searchform', [
          'propertiesSearch' => $this->propertiesSearch,
      ]);
    }

}
