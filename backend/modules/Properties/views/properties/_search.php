<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\PropertiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="properties-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'contract_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'featured') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'rooms') ?>

    <?php // echo $form->field($model, 'toilets') ?>

    <?php // echo $form->field($model, 'garage') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'long') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'visits') ?>

    <?php // echo $form->field($model, 'taken') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
