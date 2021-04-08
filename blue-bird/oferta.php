
<?php 
	$resp = $this->apiController->obtenerPorId($oferta_id);
	if($resp->response==true){
 ?>

 <div class="container-fluid oferta" style="background: #093147e7 url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); background: -webkit-linear-gradient(to right, #f56117be, #0b486bdc) url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); background: linear-gradient(to right, #f56117be, #0b486bdc) url(<?php echo __PATH__ ?>/themes/blue-bird/img/1.jpg); width: 100%; background-attachment: fixed; background-size: cover; position: relative;">
 	
	<h2><?php echo $resp->data->oferta_titulo ?></h2>
	<br>
	<div class="o-detalles">
		<p>Salario: <span><?php echo $resp->data->oferta_salario ?></span></p>
		<p>Jornada laboral: <span><?php echo $resp->data->oferta_contrato ?></span></p>
		<p>Ubicación: <span><?php echo $resp->data->oferta_nombrelocalidad.', '.$resp->data->oferta_nombremunicipio.', '.$resp->data->oferta_nombreestado.'.'; ?></span></p>
	</div>
	<a class="float-right" href="<?php echo __PATH__.'/oferta/postular/'.$resp->data->oferta_id ?>"><button type="button" class="btn btn-outline-light btn-lg">Postular ahora</button></a>
	<br>
  
 </div>

<div class="container oferta-descripcion">
	<?php echo html_entity_decode($resp->data->oferta_descripcion) ?>
	
	
	<?php if( $resp->data->oferta_mapa != NULL){ ?>
		<br>
		<p class="font-weight-bold">Mapa:</p>
		<div class="map-responsive">
			<?php echo $resp->data->oferta_mapa ?>
		</div>
	<?php
	    }
	?>
	<br><br>
</div>

<?php 
	}else{
?>

<div class="container w-50 border rounded oferta-descripcion">
	Oferta no válida.

</div>
<br><br>
<?php
	}
 ?>