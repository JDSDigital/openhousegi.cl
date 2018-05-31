<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Open House';
?>

<div style="position:relative;height:100vh;background-image:url('<?= Yii::getAlias('@web') . '/images/blue-sky-building.jpg' ?>');background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
	<?= Html::img(Yii::getAlias('@web') . '/images/logo/logo-full.png', ['class' => 'logo-rev-slider wow fadeIn', 'data-wow-delay'=>'1s']) ?>
</div>

<div class="bg-white">

    <ul class="grid portfolio filterArea list-unstyled text-center wow fadeInUp">

				<!-- Portfolio Item 1 -->

				<li class="webdesign">
					<a href="#">
						<figure class="effect-3">
							<?= Html::img(Yii::getAlias('@web') . '/images/app-bg.jpg', ['class' => 'img-responsive']) ?>
							<figcaption>
								<div class="fig-caption-center">
									<div>
										<h3>Lorem Ipsum</h3>
									</div>
								</div>
							</figcaption>
						</figure>
				   </a>
				</li>

				<!-- Portfolio Item 2 -->

				<li class="appicon">
					<a href="#">
						<figure class="effect-3">
							<?= Html::img(Yii::getAlias('@web') . '/images/app-bg-2.jpg', ['class' => 'img-responsive']) ?>
							<figcaption>
								<div class="fig-caption-center">
									<div>
										<h3>Lorem Ipsum</h3>
									</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Portfolio Item 3 -->

				<li class="iosappui">
					<a href="#">
						<figure class="effect-3">
							<?= Html::img(Yii::getAlias('@web') . '/images/apple-products.jpg', ['class' => 'img-responsive']) ?>
							<figcaption>
								<div class="fig-caption-center">
									<div>
										<h3>Lorem Ipsum</h3>
									</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</li>

			</ul><!-- End of Portfolio 3 Grid -->
</div>

<div class="container mt50 mb50 bg-white">
  <div class="row wow fadeInUp">

		<!-- Related Products -->

		<div class="col-md-12 sidebar-products text-center">
			<h3 class="small-line text-center"><strong>Propiedades Destacadas</strong></h3>
			<br>
			<div class="row">
				<!-- Related Product 1 -->

				<div class="col-sm-3 col-xs-6">
					<div class="product-image">
						<?= Html::img(Yii::getAlias('@web') . '/images/properties/01.jpg', ['class' => 'img-responsive crop']) ?>
						<div class="thumbnail-btns">
							<a class="btn btn-small btn-theme" href="#"><i class="fa fa-bars"></i></a>
							<a class="btn btn-small btn-dark btn-theme" href="#"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<h4 class="name"><strong><a href="#">Apartamento 1</a></strong></h4>
					<h5 class="price">$<span>750</span></h5>
				</div> <!-- End of Related Product 1 -->

				<!-- Related Product 2 -->

				<div class="col-sm-3 col-xs-6">
					<div class="product-image">
						<?= Html::img(Yii::getAlias('@web') . '/images/properties/02.jpg', ['class' => 'img-responsive crop']) ?>
						<div class="thumbnail-btns">
							<a class="btn btn-small btn-theme" href="#"><i class="fa fa-bars"></i></a>
							<a class="btn btn-small btn-dark btn-theme" href="#"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<h4 class="name"><strong><a href="#">Apartamento 2</a></strong></h4>
					<h5 class="price">$<span>750</span></h5>
				</div> <!-- End of Related Product 2 -->

				<!-- Related Product 3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="product-image">
						<?= Html::img(Yii::getAlias('@web') . '/images/properties/03.jpg', ['class' => 'img-responsive crop']) ?>
						<div class="thumbnail-btns">
							<a class="btn btn-small btn-theme" href="#"><i class="fa fa-bars"></i></a>
							<a class="btn btn-small btn-dark btn-theme" href="#"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<h4 class="name"><strong><a href="#">Apartamento 3</a></strong></h4>
					<h5 class="price">$<span>750</span></h5>
				</div> <!-- End of Related Product 3 -->

				<!-- Related Product 4 -->

				<div class="col-sm-3 col-xs-6">
					<div class="product-image">
						<?= Html::img(Yii::getAlias('@web') . '/images/properties/04.jpg', ['class' => 'img-responsive crop']) ?>
						<div class="thumbnail-btns">
							<a class="btn btn-small btn-theme" href="#"><i class="fa fa-bars"></i></a>
							<a class="btn btn-small btn-dark btn-theme" href="#"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<h4 class="name"><strong><a href="#">Apartamento 4</a></strong></h4>
					<h5 class="price">$<span>750</span></h5>
				</div> <!-- End of Related Product 4 -->
			</div>
		</div> <!-- End of Related Products -->
	</div>
</div>
