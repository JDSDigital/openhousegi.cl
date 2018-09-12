<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Quienes Somos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row wow fadeInUp">
    <div class="col-sm-6">
      <h3><strong><?= $this->title ?></strong></h3>
      <div class="symbol">
        <i class="fa fa-thumbs-up"></i>
        <hr>
      </div>

      <p>OpenHouse pertenece a una red de especialistas inmobiliarios, conformada por profesionales con más	de 10 años de experiencia en el rubro inmobiliario y pertenecientes a la mayor asociación de corredores de propiedades a nivel nacional, con más de 450 oficinas establecidas a lo largo de todo Chile.</p>
      <p>Nuestro compromiso y trabajo que entregamos semana a semana nos diferencia completamente de un corredor de propiedades tradicional, lo que asegura resultados en el más breve plazo, con estrategias y metodologías internacionales que son fundamentales hoy en dia.</p>

    </div>

    <!-- Boostrap Carousel -->

    <div class="col-md-6 hidden-xs">
      <div id="carousel-example-3" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">
          <li data-target="#carousel-example-3" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-3" data-slide-to="1" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
          <div class="item">
            <?= Html::img(Yii::getAlias('@web') . '/images/blog/6.jpg', ['class' => 'img-responsive']) ?>
            <div class="carousel-caption text-light">
              <h4>Lorem Ipsum Dolor</h4>
            </div>
          </div>
          <div class="item active">
            <?= Html::img(Yii::getAlias('@web') . '/images/blog/8.jpg', ['class' => 'img-responsive']) ?>
            <div class="carousel-caption text-light">
              <h4>Aenean Massa</h4>
            </div>
          </div>
        </div>

        <!-- Controls -->

        <a class="left carousel-control" href="#carousel-example-3" role="button" data-slide="prev">
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example-3" role="button" data-slide="next">
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </div>
    </div><!-- End of Boostrap Carousel -->
  </div>

  <div class="row mt50 wow fadeInUp">
      <div class="col-md-6 hidden-xs">
        <div id="carousel-example-3" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->

          <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-3" data-slide-to="1" class="active"></li>
          </ol>

          <!-- Wrapper for slides -->

          <div class="carousel-inner">
            <div class="item">
              <?= Html::img(Yii::getAlias('@web') . '/images/blog/6.jpg', ['class' => 'img-responsive']) ?>
              <div class="carousel-caption text-light">
                <h4>Lorem Ipsum Dolor</h4>
              </div>
            </div>
            <div class="item active">
              <?= Html::img(Yii::getAlias('@web') . '/images/blog/8.jpg', ['class' => 'img-responsive']) ?>
              <div class="carousel-caption text-light">
                <h4>Aenean Massa</h4>
              </div>
            </div>
          </div>

          <!-- Controls -->

          <a class="left carousel-control" href="#carousel-example-3" role="button" data-slide="prev">
            <i class="fa fa-angle-left fa-2x"></i>
          </a>
          <a class="right carousel-control" href="#carousel-example-3" role="button" data-slide="next">
            <i class="fa fa-angle-right fa-2x"></i>
          </a>
        </div>
      </div><!-- End of Boostrap Carousel -->

      <div class="col-sm-6">
        <div class="symbol">
          <i class="fa fa-thumbs-up"></i>
          <hr>
        </div>

        <p>En Openhouse lo más importante eres TU, fidelizarte para toda la vida es nuestro gran objetivo.<p>
        <p>Te guiamos durante todos los procesos, entregándote un servicio personalizado semana a semana que va a la vanguardia en un mercado cada vez más exigente.<p>
        <p>Nuestro modelo lo ajustamos a la medida de cada cliente, verás que ocupamos las mejores estrategias y herramientas a un nivel de clase mundial.<p>

        <p class="pad-top-50" style="color:#666;">
          <strong>Ven a vernos, te estamos esperando...</strong>
        </p>
      </div>

      <!-- Boostrap Carousel -->
  </div>

  <div class="row" id="team">
	<div class="col-md-12 text-center">

    <hr class="faded"/>
    <h3 class="small-line fancy-heading text-center"><strong>Nuestro Equipo</strong></h3>

		<!-- Team - Medium + Round Images -->

		<ul class="row team-list list-unstyled mb50">

			<!-- Team Member 1 -->

			<li class="col-md-3">
				<div class="team-item ">
          <?= Html::img(Yii::getAlias('@web') . '/images/team/01.jpg', ['class' => 'img-responsive img-circle', 'height' => '270', 'alt' => 'image']) ?>
					<h3>John Doe</h3>
					<p>CEO</p>
					<hr class="faded"/>
					<ul class="social-icons circle list-inline list-unstyled inverse">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</li>

			<!-- Team Member 2 -->

			<li class="col-md-3">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/02.jpg', ['class' => 'img-responsive img-circle', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Jessica Doe</h3>
					<p>Mercadeo</p>
					<hr class="faded"/>
					<ul class="social-icons circle list-inline list-unstyled inverse">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</li>

			<!-- Team Member 3 -->

			<li class="col-md-3">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/03.jpg', ['class' => 'img-responsive img-circle', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Rick Edward Doe</h3>
					<p>Diseñador</p>
					<hr class="faded"/>
					<ul class="social-icons circle list-inline list-unstyled inverse">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</li>

			<!-- Team Member 4 -->

			<li class="col-md-3">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/04.jpg', ['class' => 'img-responsive img-circle', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Albert Doe</h3>
					<p>Desarrollador</p>
					<hr class="faded"/>
					<ul class="social-icons circle list-inline list-unstyled inverse">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>
