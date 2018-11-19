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

      <p>Open Housse es parte de una Red de Especialistas inmobiliarios compuesta por agentes profesionales con experiencia de mas de 10 años en el rubro y también somos parte integrante de una de las organizaciones más masivas en el ambiente del corretaje de propiedades del país.</p>
      <p>Nuestro compromiso y trabajo que entregamos semana a semana nos diferencia completamente de un corredor de propiedades tradicional, lo que asegura resultados en el más breve plazo, con estrategias y metodologías internacionales que son fundamentales hoy en día.</p>

    </div>

    <!-- Boostrap Carousel -->

    <div class="col-md-6 hidden-xs">
      <div id="carousel-example-3" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">
          <!-- <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li> -->
          <!-- <li data-target="#carousel-example-3" data-slide-to="1" class=""></li> -->
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
          <div class="item active">
            <?= Html::img(Yii::getAlias('@web') . '/images/7.jpg', ['class' => 'img-responsive']) ?>
            <div class="carousel-caption text-light">
              <!-- <h4>Lorem Ipsum Dolor</h4> -->
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
            <!-- <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li> -->
            <!-- <li data-target="#carousel-example-3" data-slide-to="1" class=""></li> -->
          </ol>

          <!-- Wrapper for slides -->

          <div class="carousel-inner">
            <div class="item active">
              <?= Html::img(Yii::getAlias('@web') . '/images/8.jpg', ['class' => 'img-responsive']) ?>
              <div class="carousel-caption text-light">
                <!-- <h4>Lorem Ipsum Dolor</h4> -->
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

        <p>En Openhouse lo más importante eres TÚ, fidelizarte para toda la vida es nuestro gran objetivo.<p>
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

			<li class="col-md-2">
				<div class="team-item">
                    <?= Html::img(Yii::getAlias('@web') . '/images/team/01.gif', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Rodrigo San Juan</h3>
					<p>CEO & Real Estate Specialist</p>
				</div>
			</li>

			<!-- Team Member 2 -->

			<li class="col-md-2">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/02.gif', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Carolina</h3>
					<p>Operational Coordinator</p>
				</div>
			</li>

            <!-- Team Member 5 -->

            <li class="col-md-2">
                <div class="team-item">
                    <?= Html::img(Yii::getAlias('@web') . '/images/team/05.png', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
                    <h3>Francisco</h3>
                    <p>Real Estate Legal Advisor</p>
                </div>
            </li>

			<!-- Team Member 3 -->

			<li class="col-md-2">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/03.gif', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Jaime</h3>
					<p>Real Estate Specialist</p>
				</div>
			</li>

			<!-- Team Member 4 -->

			<li class="col-md-2">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/04.gif', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Macarena</h3>
					<p>Real Estate Specialist</p>
				</div>
			</li>

			<!-- Team Member 6 -->

			<li class="col-md-2">
				<div class="team-item">
					<?= Html::img(Yii::getAlias('@web') . '/images/team/06.png', ['class' => 'img-responsive', 'height' => '270', 'alt' => 'image']) ?>
					<h3>Francisca</h3>
					<p>Real Estate Specialist</p>
				</div>
			</li>
		</ul>
	</div>
</div>

<?php
$js = <<<JS
  $('.team-item').SameHeight();
JS;
$this->registerJs($js);
?>
