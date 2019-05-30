<?php
	include 'php/head.php';
	include 'php/menu.php';
?>
	<section class="opcion-temporal">
		<div class="opcion-usuario">
		<h2>Estas a un solo paso para ser parte de esta gran familia de Alexis Eats</h2>
		<div class="fomulario-seleecion">
		<h1>¿Quieres ser VENDEDOR, CLIENTE O REPARTIDOR?</h1>
		<form class="fomulario-opcion" action="direccionador/opcion.php" method="POST">
			<div class="opciones-escoger"><h3>Vendedor:</h3>
			<input type="radio" name="opcion" value="vendedor">
			<img src="imagenes/opciones/vendedor.png" width="150px">
			</div>
			<div class="opciones-escoger">	<h3>Cliente:</h3>
			<input type="radio" name="opcion" value="cliente">
			<img src="imagenes/opciones/cliente.png" width="150px">
			</div>
			<div class="opciones-escoger"><h3>Repartidor: </h3>
			<input type="radio" name="opcion" value="repartidor">
			<img src="imagenes/opciones/repartidor.png" width="150px">
			</div>
			<div class="opciones-escoger">
			<input type="submit" name="" value="Enviar" class="submit">
		</div>
			
		
			
		</form>
		</div>
		</div>
	</section>

<?php
	include 'php/footer.php';
?>