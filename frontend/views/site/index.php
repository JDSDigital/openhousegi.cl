<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Open House';
?>
<div class="uncover-footer-content">
  <!-- Revolution Slider -->

		<div id="rev_slider_88_1_wrapper" class="rev_slider_wrapper" data-alias="youtube-hero" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
			<div id="rev_slider_88_1" class="rev_slider" style="display:none;" data-version="5.0.7">
				<ul>	<!-- SLIDE  -->
					<li data-index="rs-270" data-transition="zoomout" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="3000"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
						<!-- MAIN IMAGE -->
            <?= Html::img(Yii::getAlias('@web') . '/images/blue-sky-building.jpg', [
              'data-bgposition' => 'center center',
              'data-bgfit' => 'cover',
              'data-bgrepeat' => 'no-repeat',
              'data-bgparallax' => '10',
              'class' => 'rev-slidebg',
              'data-no-retina',
            ]) ?>
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
							 id="slide-270-layer-10"
							 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
										data-width="full"
							data-height="full"
							data-whitespace="nowrap"
							data-transform_idle="o:1;"

							 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="s:300;s:300;"
							data-start="750"
							data-basealign="slide"
							data-responsive_offset="on"
							data-responsive="off"

							style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);">
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption NotGeneric-Title text-secondary tp-resizeme rs-parallaxlevel-0"
							 id="slide-270-layer-1"
							 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-22','-29']"
							data-fontsize="['70','70','50','30']"
							data-lineheight="['70','70','50','30']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-transform_idle="o:1;"

							 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
							 data-mask_in="x:0px;y:0px;"
							 data-mask_out="x:inherit;y:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on"
							style="z-index: 8; white-space: nowrap;"><?= Html::img(Yii::getAlias('@web') . '/images/logo/logo-full.png', ['class' => 'logo-rev-slider']) ?>
						</div>

					</li>
				</ul>
				<div class="tp-static-layers">
				</div>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div><!-- End of Revolution Slider -->

		<div class="bg-white animated fadeInUp">

    <ul class="grid portfolio filterArea list-unstyled text-center">

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
        <div class="row">

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
</div>
