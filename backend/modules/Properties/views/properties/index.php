<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Properties';
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
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_id',
            'contract_id',
            'title',
            'summary',
            //'description:ntext',
            //'price',
            //'featured',
            //'area',
            //'rooms',
            //'toilets',
            //'garage',
            //'address',
            //'city',
            //'long',
            //'lat',
            //'visits',
            //'taken',
            //'status',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
