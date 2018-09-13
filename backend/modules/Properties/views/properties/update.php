<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = 'Actualizar Propiedades: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="properties-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
