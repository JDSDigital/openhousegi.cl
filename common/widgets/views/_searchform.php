<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
  'id' => 'properties-search',
  'action' => ['/propiedades/index']
]);
?>

<div class="row">
  <div class="col-md-12">
    <div class="form-theme form-big">
      <div class="input-group">
        <?= $form->field($propertiesSearch, 'title')->textInput(['class' => 'form-control'])->label(false) ?>
        <span class="input-group-btn">
          <?= Html::submitButton('<i class="glyphicon glyphicon-search"></i>', [
              'class' => 'btn btn-theme mt10',
          ]) ?>
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
