<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="no-padding" style="margin-top: -35px">
	<div class="row no-margin">
		<div class="col-sm-8 mt50 pad-left-30 pad-right-30">
			<h4 class="text-uppercase"><Strong>¡Nos encantaría saber de tí!</strong></h4>
			<hr class="mar-top-25 mar-bot-25"/>
			<!-- Contact Form-->

			<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
				<div class="row">
					<div class="col-sm-4">
						<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
					</div>
					<div class="col-sm-4">
						<?= $form->field($model, 'email') ?>
					</div>
					<div class="col-sm-4">
						<?= $form->field($model, 'phone') ?>
					</div>
					<div class="col-sm-12">
						<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
					</div>
					<div class="col-sm-8">
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
            ]) ?>

          </div>
          <div class="col-sm-4 text-right">
            <div class="form-group">
                <?= Html::submitButton('Enviar', ['class' => 'btn btn-theme mt25', 'name' => 'contact-button']) ?>
            </div>
          </div>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
		<div class="col-sm-4 no-padding-side">

			<!-- Contact Details -->

			<section class="section-colored clearfix no-margin" style="background-color:#f9f9f9;">
				<div class="row no-margin">
					<div class="col-md-12 pad-left-30 pad-right-30">
						<h4 class="text-uppercase"><strong>Información de contacto</strong></h4>
						<p class="company-name">Open Housse C.A.</p>
						<p>Monseñor Felix Cabrera #39, Oficina 6</p>
						<p>Providencia, Santiago de Chile</p>
						<p><strong>T <a href="#">+56 9 7103 2622</a></strong></p>
						<p><strong>T <a href="#">+56 9 3022 5644</a></strong></p>
						<p><strong>E <a href="#">admin@openhousse.cl</a></strong></p>
					</div>
				</div>
				<hr class="mar-top-40 mar-bot-40"/>
				<div class="row no-margin pb30">
					<div class="col-md-12 pad-left-30 pad-right-30">
						<h4><strong>Horario de atención</strong></h4>
						<p>Lunes a Domingo: <b>7:30 a 20:00</b></p>
					</div>
				</div>
			</section>
		</div>
	</div>
</div><!-- End of Page Content -->
