<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Apartamento 1';

$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos en Venta', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Apartamento 1';

?>
<div class="container pad-top-50">
	<div class="row">
		<div class="col-sm-6">

			<!-- Product Image Slider -->

			<div class="slider-wrapper theme-default shop-carousel">
				<div id="slider-shop" class="nivoSlider">
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/01.jpg', ['alt' => 'image', 'class' => 'img-responsive', 'data-thumb' => Yii::getAlias('@web') . '/images/properties/01.jpg']), Yii::getAlias('@web') . '/images/properties/01.jpg') ?>
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/02.jpg', ['alt' => 'image', 'class' => 'img-responsive', 'data-thumb' => Yii::getAlias('@web') . '/images/properties/02.jpg']), Yii::getAlias('@web') . '/images/properties/02.jpg') ?>
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/03.jpg', ['alt' => 'image', 'class' => 'img-responsive', 'data-thumb' => Yii::getAlias('@web') . '/images/properties/03.jpg']), Yii::getAlias('@web') . '/images/properties/03.jpg') ?>
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/04.jpg', ['alt' => 'image', 'class' => 'img-responsive', 'data-thumb' => Yii::getAlias('@web') . '/images/properties/04.jpg']), Yii::getAlias('@web') . '/images/properties/04.jpg') ?>
          <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/05.jpg', ['alt' => 'image', 'class' => 'img-responsive', 'data-thumb' => Yii::getAlias('@web') . '/images/properties/05.jpg']), Yii::getAlias('@web') . '/images/properties/05.jpg') ?>
				</div>
			</div> <!-- End of Product Image Slider -->
		</div>

		<!-- Product Info -->

		<div class="col-sm-6 product-header">
			<h3 class="no-margin-top text-uppercase"><strong>Apartamento 1</strong></h3>
			<h4 class="text-theme"><strong><?= Yii::$app->formatter->asCurrency(7500) ?></strong></h4>
			<p style="color:#999;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p class=""><strong>TIPO:</strong> <span style="color:#999;">Apartamento</span></p>
			<p><strong>CONTRATO:</strong> <span style="color:#999;">Venta</span></p>
			<p><strong>TAMAÑO:</strong> <span style="color:#999;">120 m2</span></p>

			<!-- Accordion -->

			<div class="panel-group no-border pad-top-20" id="accordion3">
				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-parent="#accordion3" data-target="#collapse3One">
						<h4 class="panel-title accordion-toggle text-uppercase">
							Descripción
						</h4>
					</div>
					<div id="collapse3One" class="panel-collapse collapse in">
						<div class="panel-body">
							Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#collapse3Two">
						<h4 class="panel-title accordion-toggle text-uppercase">
							Informacion Adicional
						</h4>
					</div>
					<div id="collapse3Two" class="panel-collapse collapse">
						<div class="panel-body">
							<p><strong>HABITACIONES:</strong> 3</p>
							<p><strong>BAÑOS:</strong> 2</p>
							<p><strong>ESTACIONAMIENTO:</strong> 2</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#collapse3Three">
						<h4 class="panel-title accordion-toggle text-uppercase">
							Contacto
						</h4>
					</div>
					<div id="collapse3Three" class="panel-collapse collapse">
						<div class="panel-body">
							<h5><strong>¿TE INTERESA ESTA PROPIEDAD? ¡ESCRÍBENOS!</strong></h5>

							<!-- Product Review Form -->

							<div class="form-theme form-md">
								<div class="form-group mt10">
									<label class="control-label">Nombre*</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group mt10">
									<label class="control-label">Correo*</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group mt10">
									<label class="control-label">Teléfono*</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group mt10">
									<label class="control-label">Comentarios Adicionales</label>
									<textarea class="form-control form-text-area"></textarea>
								</div>
								<a class="btn btn-hollow-dark mt10"><strong>ENVIAR</strong></a>
							</div> <!-- End of Product Review Form -->
						</div>
					</div>
				</div>
			</div> <!-- End of Accordion -->
		</div> <!-- End of Product Info -->
	</div>
	<div class="row">

		<!-- Related Products -->

		<div class="col-md-12 sidebar-products text-center">
			<h3><strong>Propiedades Relacionadas</strong></h3>
			<br/>
			<div class="row product">
				<?php for ($i=1; $i <= 4; $i++) : ?>
			  	<div class="col-sm-3">
			  		<div class="product-thumbnail">
			  			<div class="product-image">
			  				<?= Html::a(Html::img(Yii::getAlias('@web') . '/images/properties/0'.$i.'.jpg', ['alt' => 'image', 'class' => 'img-responsive crop']), ['/propiedades/view']) ?>
			  			</div>
			  			<div class="product-info text-left p20">
			          <p><span class="price"><?=Yii::$app->formatter->asCurrency(7500)?></span></p>
			  				<h3><?= Html::a('Apartamento ' . $i, ['/propiedades/view']) ?></h3>
			  				<p><span class="type">Apartamento en venta</span></p>
			  				<p><span class="address">Santiago de Chile</span></p>
			  			</div>
			  		</div>
			  	</div>
			  <?php endfor; ?>
			</div>
		</div> <!-- End of Related Products -->
	</div>
</div>
