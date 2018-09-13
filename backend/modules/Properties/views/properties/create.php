<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = 'Crear Propiedades';
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
