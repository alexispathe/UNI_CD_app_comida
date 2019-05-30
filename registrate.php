<?php
	include 'php/head.php';
?>

<?php
	include 'php/menu-registro.php';
?>

	<div class="interaccion">
			<h4 onclick="iniciarSesion()">Iniciar Sesion</h2>
				<hr>
			<h4 onclick="registrarse()">Registrate</h4>
		</div>
		
	<section class="form-registarse" id="registrar">
		<div class="contenedor-registrar" > 
				<form action="direccionador/opcion.php" method="POST"> 
						<h1>Registrate</h1>
						<div id="parte1">
						<label class="label" for="nombre">Nombre: </label>
						<input type="text" name="nombre" placeholder="Puan" required>
						<label  class="label" for="apellidos">Apellidos: </label>
						<input type="text" name="apellidos" placeholder="Perez" required>

						<label  class="label" for="usuario icon-user" class="">Usuario: </label>
						<input type="text" name="usuario" placeholder="user123" required>
						<label class="label"  for="correo">Correo: </label>
						<input type="email" name="correo" placeholder="user@123.com" required>
							<label class="label" for="contraseña">Contraseña: </label>
						<input type="password" name="contraseña" required >
						<label class="label"  for="numero">Numero: </label>
						<input type="text" name="numero" placeholder=" 55-555-55555">
						<p onclick="siguiete()" style="cursor: pointer;" class="siguiente" disabled>Siguiente</p>
						</div>

						<div class="opcion-usuario" id="parte2" style="display: none">
		<h2>Estas a un solo paso para ser parte de esta gran familia de Alexis Eats</h2>
		<div class="fomulario-seleecion">
		<h1>¿Quieres ser VENDEDOR, CLIENTE O REPARTIDOR?</h1>
		
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
			<input type="submit" name="" value="Registrar">
		</div>
			
		
			
	
		</div>
		</div>
						

				</form>
		</div>	
	</section>;
	
	<section class="formulario-login" style="display: none" id="login">
		<div class="formulario-iniciar-sesion">
			<h1>Inicia Sesion</h1> 
				<form action="direccionador/login.php"
				method="POST"> 
				<label for="usuario">Usuario: </label>
						<input type="text" name="usuario" placeholder=" juan123">
						<br>
						<label for="contraseña">Contraseña: </label>
						<input type="password" name="contraseña" >
						<button class="submit">Iniciar Sesion</button>
				</form>
		</div>	
		<div class="recuperar-contraseña">
			<a href="registrate.php">¿Has olvidado tu contraseña?</a>
		</div>

		<div class="registrar">
			<a href="registrate.php">Registrate</a>
		</div>
		<div class="inicio">
				<a href="">Tengo algun problema
				</a>
			
		</div>
		</section>

		<!-- AQUI COMIENZA EL ULTIMO -->

<?php
	include 'php/footer.php';
?>