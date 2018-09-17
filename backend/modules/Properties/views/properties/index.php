<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Properties;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propiedades';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="panel">
    <header class="panel-heading">
      <?= Html::a('<i class="fa fa-plus mr5"></i>Crear Propiedad', ['create'], ['class' => 'btn bg-success btn-xs']) ?>
    </header>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'        => [
  				'class' => 'grid-view table-responsive',
  			],
  			'tableOptions'   => [
  				'class' => 'table table-striped table-hover',
  			],
  			'pager'          => [
  				'options' => ['class' => 'pagination ml20 mt10'],
  			],
  			'summaryOptions' => [
  				'class' => 'summary ml20 mt25',
  			],
  			'layout'         => '{items}{pager}{summary}',
        'columns' => [
            [
              'attribute' => 'id',
              'format' => 'raw',
            ],
            [
              'attribute' => 'status',
              'format' => 'raw',
              'value' => function ($model) {
                $check = ($model->status == Properties::STATUS_ACTIVE) ? "checked='checked'" : null;
                return "<div class='switchery-xs m0'>
                  <input id='status-$model->id' type='checkbox' class='switchery switchStatus' $check>
                </div>";
              }
            ],
            [
              'attribute' => 'featured',
              'format' => 'raw',
              'value' => function ($model) {
                $check = ($model->featured == Properties::STATUS_ACTIVE) ? "checked='checked'" : null;
                return "<div class='switchery-xs m0'>
                  <input id='featured-$model->id' type='checkbox' class='switchery switchFeatured' $check>
                </div>";
              }
            ],
            [
              'attribute' => 'type_id',
              'format' => 'raw',
              'value' => function ($model) {
                  return $model->type->name;
              }
            ],
            [
              'attribute' => 'contract_id',
              'format' => 'raw',
              'value' => function ($model) {
                  return $model->contract->name;
              }
            ],
            [
              'attribute' => 'title',
              'format' => 'raw',
            ],
            [
              'attribute' => 'price',
              'format' => 'raw',
              'value' => function ($model) {
                  return Yii::$app->formatter->asCurrency($model->price);
              }
            ],
            [
              'attribute' => 'zone',
              'format' => 'raw',
              'value' => function ($model) {
                  return $model->getZone($model->zone);
              }
            ],
            //'summary',
            //'description:ntext',
            //'area',
            //'rooms',
            //'toilets',
            //'garage',
            //'address',
            //'long',
            //'lat',
            //'visits',
            //'taken',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php $this->registerJs('listenerChangeStatus("'.Url::to(["//Properties/properties/status"]).'");'); ?>
<?php $this->registerJs('listenerChangeFeatured("'.Url::to(["//Properties/properties/featured"]).'");'); ?>
