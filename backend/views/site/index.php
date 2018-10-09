<?php

/* @var $this yii\web\View */

$this->title = 'Open House';
?>
<section class="panel">
    <header class="panel-heading">
      <h2>Propiedades mas vistas</h2>
    </header>

    <div class="chart-container">
			<div class="chart" id="google-column"></div>
		</div>

</section>

<?php
$this->registerJs("drawColumn(".$topProperties.")");
?>
