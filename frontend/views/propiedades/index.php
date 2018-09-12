<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Propiedades';

$this->params['breadcrumbs'][] = 'Propiedades';

?>

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
      <select class="form-control">
        <option>Alquiler</option>
        <option>Venta</option>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-theme form-md">
      <select class="form-control">
        <option>Apartamentos</option>
        <option>Casas</option>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-theme form-md">
      <select class="form-control">
        <option>Todas las zonas</option>
        <option>Alhué</option>
        <option>Buin</option>
        <option>Calera de Tango</option>
        <option>Cerrillos</option>
        <option>Cerro Navia</option>
        <option>Colina</option>
        <option>Conchalí</option>
        <option>Curacaví</option>
        <option>El Bosque</option>
        <option>El Monte</option>
        <option>Estación Central</option>
        <option>Huechuraba</option>
        <option>Independencia</option>
        <option>Isla de Maipo</option>
        <option>La Cisterna</option>
        <option>La Florida</option>
        <option>La Granja</option>
        <option>La Pintana</option>
        <option>La Reina</option>
        <option>Lampa</option>
        <option>Las Condes</option>
        <option>Lo Barnechea</option>
        <option>Lo Espejo</option>
        <option>Lo Prado</option>
        <option>Macul</option>
        <option>Maipú</option>
        <option>María Pinto</option>
        <option>Melipilla</option>
        <option>Ñuñoa</option>
        <option>Padre Hurtado</option>
        <option>Paine</option>
        <option>Pedro Aguirre Cerda</option>
        <option>Peñaflor</option>
        <option>Peñalolén</option>
        <option>Pirque</option>
        <option>Providencia</option>
        <option>Pudahuel</option>
        <option>Puente Alto</option>
        <option>Quilicura</option>
        <option>Quinta Normal</option>
        <option>Recoleta</option>
        <option>Renca</option>
        <option>San Bernardo</option>
        <option>San Joaquín</option>
        <option>San José de Maipo</option>
        <option>San Miguel</option>
        <option>San Pedro</option>
        <option>San Ramón</option>
        <option>Santiago</option>
        <option>Talagante</option>
        <option>Til Til</option>
        <option>Vitacura</option>
      </select>
    </div>
  </div>
</div>

<!-- Product Grid -->

<div class="row product">

  <?php for ($i=1; $i <= 8; $i++) : ?>
  	<div class="col-sm-3">
  		<div class="product-thumbnail">
  			<div class="product-image">
  				<?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/0'.$i.'.jpg', ['alt' => 'image', 'class' => 'img-responsive crop']), ['/propiedades/view']) ?>
  			</div>
  			<div class="product-info p20">
          <p><span class="price"><?=Yii::$app->formatter->asCurrency(7500)?></span></p>
  				<h3><?= Html::a('Apartamento ' . $i, ['/propiedades/view']) ?></h3>
  				<p><span class="type">Apartamento en venta</span></p>
  				<p><span class="address">Santiago de Chile</span></p>
  			</div>
  		</div>
  	</div>
  <?php endfor; ?>

</div> <!-- End of Product Grid -->
