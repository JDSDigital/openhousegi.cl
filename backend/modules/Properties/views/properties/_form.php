<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */
/* @var $form yii\widgets\ActiveForm */
$cover = Url::to(['//Properties/properties/cover?id=']);
$btn = "<button type='button' class='kv-file-cover btn btn-sm btn-kv btn-default btn-outline-secondary' title='Portada' data-url='$cover{key}' data-key='{key}'><i class='glyphicon glyphicon-star'></i></button>";
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
            <div class="col-sm-3">
              <?= $form->field($model, 'price')->textInput() ?>
            </div>
            <div class="col-sm-3">
              <?= $form->field($model, 'uf')->textInput() ?>
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
            <div class="col-sm-6">
              <?= $form->field($model, 'region')->dropdownList($model->getRegionsList()) ?>
            </div>
            <div class="col-sm-6">
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
                'maxFileCount' => 9,
                'overwriteInitial' => false,
                'initialPreview' => isset($previews) ? $previews : false,
                'initialPreviewAsData' => true,
                'initialPreviewShowDelete' => true,
                'initialPreviewConfig' => isset($previewsConfig) ? $previewsConfig : false,
                'otherActionButtons' => $btn,
              ]
          ]); ?>

          <div class="form-group">
              <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
          </div>

      </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS
  listenerRegionsSelect();
  listenerCover();
JS;
$this->registerJs($js);
?>
