<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-md-12">

    <div class="panel panel-flat">
  			<div class="panel-body">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Seguro desea eliminar esta propiedad?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            'title',
            'summary',
            'description:ntext',
            [
              'attribute' => 'price',
              'format' => 'raw',
              'value' => function ($model) {
                  return Yii::$app->formatter->asCurrency($model->price);
              }
            ],
            [
              'attribute' => 'featured',
              'format' => 'raw',
              'value' => function ($model) {
                  return ($model->featured) ? 'Activado' : 'Desactivado';
              }
            ],
            'area',
            'rooms',
            'toilets',
            'garage',
            'address',
            [
              'attribute' => 'zone',
              'format' => 'raw',
              'value' => function ($model) {
                  return $model->region->name . ', ' . $model->commune->name;
              }
            ],
            // 'long',
            // 'lat',
            'visits',
            [
              'attribute' => 'taken',
              'format' => 'raw',
              'value' => function ($model) {
                  return ($model->taken) ? 'Activado' : 'Desactivado';
              }
            ],
            [
              'attribute' => 'status',
              'format' => 'raw',
              'value' => function ($model) {
                  return ($model->status) ? 'Activado' : 'Desactivado';
              }
            ],
            // 'created_at',
            // 'updated_at',
        ],
    ]) ?>

</div>
</div>
</div>
</div>
