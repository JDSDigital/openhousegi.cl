<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="properties-form">

    <?php $form = ActiveForm::begin(); ?>

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

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'contract_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'summary')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'featured')->checkbox() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'rooms')->textInput() ?>

    <?= $form->field($model, 'toilets')->textInput() ?>

    <?= $form->field($model, 'garage')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'long')->textInput() ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'taken')->checkbox() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
