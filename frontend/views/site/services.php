<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Otros Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row wow fadeInUp">
  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>We are great at what we do</h3>
				<br/>
				<p>
					Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
				</p>
				<br/>

				<!-- Services Tab -->

				<div class="mb30">
					<ul class="nav nav-pills">
						<li class="active"><a href="#tab20" data-toggle="tab"><i class="fa fa-star"></i> Gestión de Venta y Arriendo</a></li>
						<li><a href="#tab21" data-toggle="tab"><i class="fa fa-cog"></i> Apoyo Legal</a></li>
						<li><a href="#tab22" data-toggle="tab"><i class="fa fa-trophy"></i> Administración de Propiedades</a></li>
						<li><a href="#tab23" data-toggle="tab"><i class="fa fa-trophy"></i> Inversiones</a></li>
						<li><a href="#tab24" data-toggle="tab"><i class="fa fa-trophy"></i> Check In House</a></li>
					</ul>
        <div class="tab-pills">
					<div class="tab-content">
  						<div class="tab-pane pt30 pb30 active" id="tab20">
                <div class="row">
                  <div class="col-md-4">
                    <?= Html::img(Yii::getAlias('@web') . '/images/svg/venta-y-arriendo.svg', ['class' => 'img-responsive']) ?>
                  </div>
                  <div class="col-md-8">
                    <h4 class="text-theme"><strong>Gestión de Venta y Arriendo.</strong></h4>
                  </div>
                </div>
  						</div>
  						<div class="tab-pane pt30 pb30" id="tab21">
                <div class="row">
                  <div class="col-md-4">
                    <?= Html::img(Yii::getAlias('@web') . '/images/svg/apoyo-legal.svg', ['class' => 'img-responsive']) ?>
                  </div>
                  <div class="col-md-8">
                    <h4 class="text-theme"><strong>Asesoria Jurídico con amplia experiencia en Derecho inmobiliario.</strong></h4>
                    <p>Areas de Desarrollo: Asesoría en la adquisición, venta y licitación de inmuebles residenciales y comerciales, ayudando a reducir los riesgos existentes en dichas operaciones en el desarrollo de proyectos inmobiliarios residenciales y comerciales de gran envergadura.</p>
                    <p>Orientación en la aplicación de las normas municipales y reglamentos, contribuyendo a una adecuada gestión inmobiliaria.</p>
                    <p>Asesoría en la resolución de conflictos inmobiliarios y de construcción, ya sea por medio de transacciones, arbitrajes o litigios en general; representándolos en procedimientos administrativos – contenciosos y en la evaluación e interpretación legal de sitios y estudios de títulos.</p>
                    <p>Elabora, redacta y revisa: contratos de construcción, en sus diversas modalidades, compraventa, arriendo, leasing y otros; como también Reglamentos de copropiedad.</p>
                  </div>
                </div>
  						</div>
  						<div class="tab-pane pt30 pb30" id="tab22">
                <div class="row">
                  <div class="col-md-4">
                    <?= Html::img(Yii::getAlias('@web') . '/images/svg/administracion-de-propiedades.svg', ['class' => 'img-responsive']) ?>
                  </div>
                  <div class="col-md-8">
                    <h4 class="text-theme"><strong>Administración de Propiedades.</strong></h4>
                  </div>
                </div>
  						</div>
  						<div class="tab-pane pt30 pb30" id="tab23">
                <div class="row">
                  <div class="col-md-4">
                    <?= Html::img(Yii::getAlias('@web') . '/images/svg/inversiones.svg', ['class' => 'img-responsive']) ?>
                  </div>
                  <div class="col-md-8">
                    <h4 class="text-theme"><strong>Inversiones.</strong></h4>
                  </div>
                </div>
  						</div>
  						<div class="tab-pane pt30 pb30" id="tab24">
                <h4 class="text-theme"><strong>Servicio de Inspección de departamentos y casas nuevas, previa entrega por parte de la inmobiliaria.</strong></h4>
                <p>Este servicio consiste en la revisión de las siguientes partidas:</p>
                <ul>
                  <li>Terminaciones</li>
                  <li>Muebles y equipos</li>
                  <li>Mediciones de recintos</li>
                  <li>
                    Pruebas de funcionalidad:
                    <ul>
                      <li>Instalaciones Sanitarias</li>
                      <li>Instalaciones Eléctricas</li>
                      <li>Corrientes débiles</li>
                    </ul>
                  </li>
                </ul>
                <br/>
                <p>Una vez realizada la inspección, se entregará un informe en un plazo de 10 días hábiles, indicando todas las observaciones de la vivienda y la prioridad de resolución de cada una de ellas.</p>
                <p>La inmobiliaria tiene la obligación de realizar el levantamiento de ellas en un plazo de 20 días desde el rechazo de la entrega.</p>
                <p>Profesional a cargo: Ingeniero en construcción con vasta experiencia en entrega de departamento, preparación de entrega, terminaciones finas, normativa vigente en importantes empresas de inspección técnica de obras e inmobiliarias de alto estándar de calidad.</p>
  						</div>
            </div>
					</div>
				</div><!-- End of Services Tab -->
			</div>
		</div>
	</div>
</div>
