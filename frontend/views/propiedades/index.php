<?php
/* @var $this yii\web\View */
use common\models\Properties;
use common\widgets\SearchForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = 'Propiedades';

$this->params['breadcrumbs'][] = 'Propiedades';
?>

<?= SearchForm::widget()  ?>


<!-- Product Grid -->

<div class="row product">

  <?php foreach ($dataProvider->getModels() as $property) : ?>
    <?php
      $url = ($property->cover)
      ? Yii::getAlias('@web') . '/images/properties/thumbs/' . $property->cover->file
      : Yii::getAlias('@web') . '/images/logo/logo.jpg';
    ?>
    <div class="col-md-3 col-sm-6">
      <div class="product-thumbnail">
        <div class="product-image <?= ($property->taken) ? 'taken' : '' ?>">
          <div class="watermark"><h2><?= ($property->contract_id == Properties::CONTRACT_SALE) ? 'Vendida' : 'Alquilada' ?></h2></div>
          <?= Html::a(Html::img($url, ['alt' => 'image', 'class' => 'img-responsive crop']), ['/propiedades/view', 'id' => $property->id]) ?>
        </div>
        <div class="product-info text-left p20">
          <div class="price-box">
            <p class="mb0"><span class="price"><?= Yii::$app->formatter->asCurrency($property->price) ?></span></p>
            <p><span class="price uf">
              <?= ($property->contract_id == Properties::CONTRACT_SALE && $property->uf)
              ? Yii::$app->formatter->asDecimal($property->uf) . ' U.F.'
              : '' ?>
            </span></p>
          </div>
          <h3 class="fit-text">
            <?= Html::a($property->title, ['/propiedades/view', 'id' => $property->id], ['data-placement' => 'top', 'data-toggle' => 'tooltip', 'class' => 'tip-top', 'data-original-title' => $property->title]) ?>
          </h3>
          <p><span class="type"><?= $property->type->name ?> en <?= strtolower($property->contract->name) ?></span></p>
          <div class="row">
            <div class="col-xs-6 text-left">
              <p><span class="address"><?= $property->area . ' m2.' ?></span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><span class="address"><?= $property->getZone($property->zone) ?></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div> <!-- End of Product Grid -->

<!-- Paginador -->
<div class="text-center mb30">
  <?= LinkPager::widget([
      'pagination' => $dataProvider->getPagination(),
  ]); ?>
</div><!-- /.paginador -->
<?php
$js = <<<JS
  $('.price-box').SameHeight();
JS;
$this->registerJs($js);
?>
