<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
  <div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-flat">
  			<div class="panel-body">

<div class="row">
  <div class="col-sm-6">
    <?= $form->field($model, 'type_id')->dropdownList($model->getTypeList()) ?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'contract_id')->dropdownList($model->getContractList()) ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <?= $form->field($model, 'title')->textInput() ?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'price')->textInput() ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <?= $form->field($model, 'summary')->textInput() ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <?= $form->field($model, 'zone')->dropdownList($model->getZoneList()) ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-3">
    <?= $form->field($model, 'area')->textInput() ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'rooms')->textInput() ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'toilets')->textInput() ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'garage')->textInput() ?>
  </div>
</div>



          <?= $form->field($model, 'featured')->checkbox() ?>

          <?= $form->field($model, 'taken')->checkbox() ?>

          <?= $form->field($model, 'status')->checkbox() ?>

          <?= $form->field($model, 'images[]')->widget(FileInput::classname(), [
              'language' => 'es',
              'options' => [
                'multiple' => true,
              ],
              'pluginOptions' => [
                'previewFileType' => 'image',
                'showCancel' => false,
                'showUpload' => false,
                'showDelete' => true,
                'allowedFileTypes' => ['image'],
                'allowedFileExtensions' => ['jpg', 'png'],
                'maxFileSize' => 2800,
                'maxFileCount' => 5,
                'overwriteInitial' => false,
                'initialPreview' => isset($previews) ? $previews : false,
                'initialPreviewAsData' => true,
                'initialPreviewShowDelete' => true,
                'initialPreviewConfig' => isset($previewsConfig) ? $previewsConfig : false,
              ]
          ]); ?>

          <div class="form-group">
              <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
          </div>

      </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
