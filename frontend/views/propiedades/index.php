<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Propiedades';

$this->params['breadcrumbs'][] = 'Propiedades';

?>
<?php $form = ActiveForm::begin(['id' => 'properties-search']); ?>
<div class="row">
  <div class="col-md-12">
    <div class="form-theme form-big">
      <div class="input-group">
        <?= Html::input('text', 'search', '', ['class' => 'form-control', 'placeholder' => 'Buscar...']) ?>
        <span class="input-group-btn">
          <button class="btn btn-theme" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div>
    </div>
  </div>
</div>

<div class="row mt30 mb30">
  <div class="col-md-4">
    <div class="form-theme form-md">
      <?= $form->field($propertiesSearch, 'contract_id')->dropDownList($propertiesSearch->getContractList(), ['class' => 'form-control'])->label(false) ?>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-theme form-md">
      <?= $form->field($propertiesSearch, 'type_id')->dropDownList($propertiesSearch->getTypeList(), ['class' => 'form-control'])->label(false) ?>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-theme form-md">
      <?= $form->field($propertiesSearch, 'zone')->dropDownList($propertiesSearch->getZoneList(), ['class' => 'form-control'])->label(false) ?>
    </div>
  </div>
</div>
<?php ActiveForm::end(); ?>
<!-- Product Grid -->

<div class="row product">

  <?php foreach ($properties as $property) : ?>
    <div class="col-sm-3">
      <div class="product-thumbnail">
        <div class="product-image">
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/' . $property->images[0]->file, ['alt' => 'image', 'class' => 'img-responsive crop']), ['/propiedades/view', 'id' => $property->id]) ?>
        </div>
        <div class="product-info text-left p20">
          <p><span class="price"><?=Yii::$app->formatter->asCurrency($property->price)?></span></p>
          <h3><?= Html::a($property->title, ['/propiedades/view', 'id' => $property->id]) ?></h3>
          <p><span class="type"><?= $property->type->name ?> en <?= strtolower($property->contract->name) ?></span></p>
          <p><span class="address"><?= $property->getZone($property->zone) ?></span></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div> <!-- End of Product Grid -->
