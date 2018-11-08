<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Properties;

$latest = Properties::find()
  ->where(['status' => Properties::STATUS_ACTIVE])
  ->andWhere(['taken' => Properties::STATUS_DELETED])
  ->orderBy(['created_at' => SORT_DESC])
  ->limit(6)
  ->all();

AppAsset::register($this);

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'geknology.com']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'propiedades, inmuebles, alquiler, venta, apartamento, casa']);
$this->registerMetaTag(['rel' => 'canonical', 'href' => 'http://www.openhousegi.cl']);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['/site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => 'Open House'
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => ''
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to(['/images/logo/logo.png'], true)
]);

$this->registerMetaTag([
    'property' => 'og:image:alt',
    'content' => 'Open House'
]);

$this->registerMetaTag([
    'property' => 'twitter:card',
    'content' => 'summary'
]);

$this->registerMetaTag([
    'property' => 'twitter:description',
    'content' => ''
]);

$this->registerMetaTag([
    'property' => 'twitter:title',
    'content' => 'Open House'
]);

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-152x152.png']);

$this->registerMetaTag(['name' => 'application-name', 'content' => 'Open House']);
$this->registerMetaTag(['name' => 'msapplication-TileColor', 'content' => '#FFFFFF']);
$this->registerMetaTag(['name' => 'msapplication-TileImage', 'content' => './images/favicon/mstile-144x144.png']);
$this->registerMetaTag(['name' => 'msapplication-square70x70logo', 'content' => './images/favicon/mstile-70x70.png']);
$this->registerMetaTag(['name' => 'msapplication-square150x150logo', 'content' => './images/favicon/mstile-150x150.png']);
$this->registerMetaTag(['name' => 'msapplication-wide310x150logo', 'content' => './images/favicon/mstile-310x150.png']);
$this->registerMetaTag(['name' => 'msapplication-square310x310logo', 'content' => './images/favicon/mstile-310x310.png']);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Page Loader -->

<div class="loader">
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</div><!-- End of Page Loader -->

<div class="page-content wrap">
    <?php
        if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') { ?>
          <header class="navigation side-menu left">
				<div class="main-nav">
					<a class="nav-trigger">
						<div class="bar-icon-wrapper bg-color1">
							<span class="bar-icon"></span>
							<span class="bar-icon"></span>
							<span class="bar-icon"></span>
						</div>
					</a>
					<div class="container">
						<div class="navbar navbar-default bg-color1" role="navigation">
							<?php
							NavBar::begin([
							  'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/logo/logo-text.png', ['class' => '']),
							  'brandUrl' => Yii::$app->homeUrl,
							  'brandOptions' => [
								'class' => 'logo',
							  ],
							  'innerContainerOptions' => [
								  'class' => 'bg-color1',
							  ],
							]);
							$menuItems = [
							  ['label' => 'Inicio', 'url' => ['/site/index']],
							  ['label' => 'Propiedades', 'url' => ['/propiedades/index']],
							  ['label' => 'Quienes Somos', 'url' => ['/site/about']],
							  ['label' => 'Nuestros Servicios', 'url' => ['/site/servicios']],
							  ['label' => 'Contacto', 'url' => ['/site/contact']],
							];
							echo Nav::widget([
							  'options' => ['class' => 'navbar-nav'],
							  'items' => $menuItems,
							]);
							NavBar::end();
							?>
							<div class="side-menu-bottom">
								<ul class="side-menu-social social-icons list-inline list-unstyled si-6 si-no-border inverse sm">
									<li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
								<p class="text text-uppercase white-text"><strong>© Open House</strong></p>
							</div>
						</div>
					</div>
				</div>
        	</header> <!-- End of Header -->

        <div class="">
            <div class="container">
              <?= Alert::widget() ?>
            </div>
            <?= $content ?>
        </div>

      <?php } else {
          NavBar::begin([
            'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/logo/logo-text.png', ['class' => 'img-responsive']),
            'brandUrl' => Yii::$app->homeUrl,
            'brandOptions' => [
              'class' => 'vertical-align navbar-top',
            ],
            'options' => [
              'class' => 'navbar-inverse bg-color1 navbar-fixed-top',
            ],
          ]);
          $menuItems = [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Propiedades', 'url' => ['/propiedades/index']],
            ['label' => 'Quienes Somos', 'url' => ['/site/about']],
            ['label' => 'Nuestros Servicios', 'url' => ['/site/servicios']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
          ];
          echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
          ]);
          NavBar::end();
      ?>

      <div class="pt50">
        <div class="page-top-grey-bottom no-pt-heading">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?= Breadcrumbs::widget([
							'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							'options' => [
							'class' => 'breadcrumb',
							],
						]) ?>
					</div>
				</div>
			</div>
        </div>
        <div class="container">
          <?= Alert::widget() ?>
          <?= $content ?>
        </div>
    </div>
<?php } ?>
</div>

<!-- Footer 8 -->

	<footer class="footer footer-plain footer-theme bg-color1">
		<div class="container mt60 mb50">
			<div class="row">
				<div class="col-md-3">
					<?= Html::img(Yii::getAlias('@web') . '/images/logo/logo-full.png', ['class' => 'footer-logo img-responsive mt20']) ?>
					<ul class="social-icons list-inline list-unstyled si-6-white si-no-border inverse lg mt20">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 mar-top-15">
					<p>
					Monseñor Felix Cabrera #39<br/>
					Oficina 6,<br/>
					Providencia, Santiago de Chile<br/>
					Correo: <a href="#">admin@openhoussegcl</a><br/>
					Teléfonos: <br/>+56 9 7103 2622<br/>+56 9 3022 5644<br/>
					</p>
				</div>
				<div class="col-md-3">
					<!-- <h5 class="footer-title">Links Útiles</h5>
					<ul class="list-unstyled page-links">
						<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
						<li><a href="#"> Aliquam lorem ante viverra quis.</a></li>
						<li><a href="#">Duis leo. Sed fringilla mauris sit amet nibh.</a></li>
					</ul> -->
				</div>
        		<div class="col-md-3">
					<h5 class="footer-title">Últimas Propiedades</h5>
					<ul class="list-unstyled latest-projects clearfix">
						<?php foreach ($latest as $property) : ?>
                            <?php
    							$url = ($property->cover)
    							? Yii::getAlias('@web') . '/images/properties/thumbs/' . $property->cover->file
    							: Yii::getAlias('@web') . '/images/logo/logo.jpg';
    						?>
                            <li><?= Html::a(Html::img($url, ['class' => 'img-responsive crop-thumb']), ['/propiedades/view', 'id' => $property->id], ['data-placement' => 'top', 'data-toggle' => 'tooltip', 'class' => 'tip-top', 'data-original-title' => $property->title]) ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright bg-black">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<p>Copyright © <?= date('Y') ?> <?= Html::a('openhousse.cl',['//site/index']) ?> / Diseño y desarrollo por <?= Html::a('Geknology', Url::to('http://www.geknology.com/')) ?></p>
					</div>
					<div class="col-sm-7 visible-sm-block visible-md-block visible-lg-block">
						<nav>
							<ul>
								<li><?= Html::a('Inicio', ['/site/index']) ?></li>
								<li><?= Html::a('Propiedades', ['/propiedades/index']) ?></li>
								<li><?= Html::a('Quienes Somos', ['/site/about']) ?></li>
								<li><?= Html::a('Nuestros Servicios', ['/site/servicios']) ?></li>
								<li><?= Html::a('Contacto', ['/site/contact']) ?></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- End of Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
