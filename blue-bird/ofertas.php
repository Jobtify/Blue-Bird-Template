<div class="container-fluid ofertas" style="background: #093147e7 url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); background: -webkit-linear-gradient(to right, #f56117be, #0b486bdc) url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); background: linear-gradient(to right, #f56117be, #0b486bdc) url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); width: 100%; height: 270px; background-attachment: fixed; background-size: cover; position: relative;">

	<h2 class="text-center">Forma parte de nuestro equipo de trabajo</h2>
	<h5 class="text-center">Estas es la lista de ofertas que tenemos disponibles para ti.</h5>
</div>

<?php 
	$oferta = $this->apiController->obtenerTodas();

	foreach ($oferta->data as $value => $key) {
?>

<div class="container w-75 o-descripcion">
	<div class="container d-inline-flex o-titulo">
		<p><a href="oferta/<?php echo $key->oferta_id ?>"><?php echo $key->oferta_titulo ?></a></p>
	</div>

	<div class="o-detalle">
		<p><b class="bg-dark rounded text-light p-1"><?php echo $key->oferta_salario ?></b></p>
		<p><?php echo $key->oferta_funciones ?></p>
		<p><i class="fas fa-map-marker-alt"></i><?php echo $key->oferta_nombrelocalidad.', '.$key->oferta_nombremunicipio.', '.$key->oferta_nombreestado.'.' ?></p>
	</div>
	<hr>
</div>
<br>

<?php
		
	}
?>