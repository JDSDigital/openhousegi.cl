<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\RevolutionAsset;
use common\widgets\SearchForm;
use common\models\Properties;

RevolutionAsset::register($this);

$this->title = 'Open Housse';
?>

<div id="rev_slider_110_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="rotating-words82" style="background-color:#e5e5e5;padding:0px;">
	<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
	<div id="rev_slider_110_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.0.7">
		<ul class="js-scroll-nav">	<!-- SLIDE  -->
			<li data-index="rs-333" data-transition="fade" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?= Yii::getAlias('@web') . '/video/office_cover.jpg' ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- BACKGROUND VIDEO LAYER -->
				<div class="rs-background-video-layer"
					data-forcerewind="on"
					data-volume="mute"
					data-muted="true"
					data-videowidth="100%"
					data-videoheight="100%"
					data-videomp4="<?= Yii::getAlias('@web') . '/video/Working-Space.mp4' ?>"
					data-videopreload="preload"
					data-videoloop="loopandnoslidestop"
					data-forceCover="1"
					data-aspectratio="16:9"
					data-autoplay="true"
					data-nextslideatend="true"
				></div>
				<!-- LAYER NR. 1 -->
				<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
					 id="slide-333-layer-10"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-width="full"
					data-height="full"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"

					 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="s:300;s:300;"
					data-start="0"
					data-basealign="slide"
					data-responsive_offset="on"
					data-responsive="off"

					style="z-index: 5;background-color:rgba(41, 46, 49, 0.5);border-color:rgba(0, 0, 0, 0.50);">
				</div>

				<!-- LAYER NR. 2 -->
				<div class="tp-caption RotatingWords-TitleWhite text-main tp-resizeme toblur rs-parallaxlevel-0"
					 id="slide-333-layer-1"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-100']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"

					 data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="s:300;s:300;"
					data-start="750"
					data-splitin="none"
					data-splitout="none"
					data-responsive_offset="on"


					style="z-index: 6; white-space: nowrap;">
					<?= Html::img(Yii::getAlias('@web') . '/images/logo/logo-full.png', ['class' => 'logo-rev-slider']) ?>
				</div>

				<!-- LAYER NR. 7 -->
				<div class="tp-caption RotatingWords-Button rev-btn bg-color1 text-main rs-parallaxlevel-0"
					 id="slide-333-layer-7"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['127','97','90','90']"
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"
						data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
						data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

					 data-transform_in="sX:1;sY:1;opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
					data-start="2000"
					data-splitin="none"
					data-splitout="none"
					data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
					data-responsive_offset="on"
					data-responsive="off"

					style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">VER MAS
				</div>
			</li>
			<li data-index="rs-334" data-transition="fade" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?= Yii::getAlias('@web') . '/video/santiago-cover.jpg' ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- LAYER NR. 1 -->
				<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
					 id="slide-334-layer-10"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-width="full"
					data-height="full"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"

					 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="s:300;s:300;"
					data-start="0"
					data-basealign="slide"
					data-responsive_offset="on"
					data-responsive="off"

					style="z-index: 5;background-color:rgba(41, 46, 49, 0.5);border-color:rgba(0, 0, 0, 0.50);">
				</div>

				<!-- LAYER NR. 2 -->
				<div class="tp-caption text-main rs-parallaxlevel-0"
					 id="slide-334-layer-1"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-100']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"

					 data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="s:300;s:300;"
					data-start="750"
					data-splitin="none"
					data-splitout="none"
					data-responsive_offset="on"


					style="z-index: 6; white-space: nowrap;">
					<?= Html::img(Yii::getAlias('@web') . '/images/logo/logo-full.png', ['class' => 'logo-rev-slider']) ?>
				</div>

				<!-- LAYER NR. 7 -->
				<div class="tp-caption RotatingWords-Button rev-btn bg-color1 text-main rs-parallaxlevel-0"
					 id="slide-334-layer-7"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['127','97','90','90']"
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"
						data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
						data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

					 data-transform_in="sX:1;sY:1;opacity:0;s:1500;e:Power3.easeInOut;"
					 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
					data-start="2000"
					data-splitin="none"
					data-splitout="none"
					data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
					data-responsive_offset="on"
					data-responsive="off"

					style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">VER MAS
				</div>
			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="height: 5px; background: #fff;"></div>
	</div>
</div><!-- END REVOLUTION SLIDER -->

<div class="container mt50 mb50 bg-white">

	<?= SearchForm::widget() ?>

  <div class="row wow fadeInUp">

		<!-- Related Products -->

		<div class="col-md-12 sidebar-products text-center">
			<h3 class="small-line text-center"><strong>Propiedades Destacadas</strong></h3>
			<br>
			<div class="row product">
				<?php foreach ($featured as $property) : ?>
				<?php
			      $url = ($property->cover)
			      ? Yii::getAlias('@web') . '/images/properties/thumbs/' . $property->cover->file
			      : Yii::getAlias('@web') . '/images/logo/logo.jpg';
			    ?>
			    <div class="col-md-3 col-sm-6">
			      <div class="product-thumbnail">
			        <div class="product-image">
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
			</div>
		</div> <!-- End of Related Products -->
	</div>

</div>
<?php
$js = <<<JS
  $('.price-box').SameHeight();
JS;
$this->registerJs($js);
?>
