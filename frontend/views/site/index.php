<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\RevolutionAsset;

RevolutionAsset::register($this);

$this->title = 'Open House';
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
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
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
				<img src="<?= Yii::getAlias('@web') . '/video/fire_cover.jpg' ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- BACKGROUND VIDEO LAYER -->
				<div class="rs-background-video-layer"
					data-forcerewind="on"
					data-volume="mute"
					data-muted="true"
					data-videowidth="100%"
					data-videoheight="100%"
					data-videomp4="<?= Yii::getAlias('@web') . '/video/fire.mp4' ?>"
					data-videopreload="preload"
					data-videoloop="loopandnoslidestop"
					data-forceCover="1"
					data-aspectratio="16:9"
					data-autoplay="true"
					data-nextslideatend="true"
				></div>
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
				<div class="tp-caption RotatingWords-TitleWhite text-main tp-resizeme toblur rs-parallaxlevel-0"
					 id="slide-334-layer-1"
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
					 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
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
					<h1 class="white-text rev-slider-title">Lorem Ipsum</h1>
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

	<?php $form = ActiveForm::begin([
	  'id' => 'properties-search',
	  'action' => ['/propiedades/index']
	]); ?>
	<div class="row">
	  <div class="col-md-12">
	    <div class="form-theme form-big">
	      <div class="input-group">
	        <?= $form->field($propertiesSearch, 'title')->textInput(['class' => 'form-control'])->label(false) ?>
	        <span class="input-group-btn">
	          <?= Html::submitButton('<i class="glyphicon glyphicon-search"></i>', [
	              'class' => 'btn btn-theme mt10',
	          ]) ?>
	        </span>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row mt30 mb30">
	  <div class="col-md-4">
	    <div class="form-theme form-md">
	      <?= $form->field($propertiesSearch, 'contract_id')->dropDownList($propertiesSearch->getContractList(), ['class' => 'form-control'])->label(false) ?>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="form-theme form-md">
	      <?= $form->field($propertiesSearch, 'type_id')->dropDownList($propertiesSearch->getTypeList(), ['class' => 'form-control'])->label(false) ?>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="form-theme form-md">
	      <?= $form->field($propertiesSearch, 'zone')->dropDownList($propertiesSearch->getZoneList(), ['class' => 'form-control'])->label(false) ?>
	    </div>
	  </div>
	</div>
	<?php ActiveForm::end(); ?>

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
			  	<div class="col-sm-3">
			  		<div class="product-thumbnail">
			  			<div class="product-image">
			  				<?= Html::a(Html::img($url, ['alt' => 'image', 'class' => 'img-responsive crop']), ['/propiedades/view', 'id' => $property->id]) ?>
			  			</div>
			  			<div class="product-info text-left p20">
			          <p><span class="price"><?=Yii::$app->formatter->asCurrency($property->price)?></span></p>
			  				<h3><?= Html::a($property->title, ['/propiedades/view', 'id' => $property->id]) ?></h3>
			  				<p><span class="type"><?= $property->type->name ?> en <?= strtolower($property->contract->name) ?></span></p>
			  				<p><span class="address"><?= $property->getZone($property->zone) ?></span></p>
			  			</div>
			  		</div>
			  	</div>
			  <?php endforeach; ?>
			</div>
		</div> <!-- End of Related Products -->
	</div>

</div>
