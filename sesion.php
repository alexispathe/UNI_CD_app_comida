<?php
	include 'php/head.php';
	include 'php/menu-registro.php';
?>
<div class="interaccion">
			<h4 onclick="iniciarSesion()">Iniciar Sesion</h2>
				<hr>
			<h4 onclick="registrarse()">Registrate</h4>
		</div>
	<section class="formulario-login" id="login">
		<div class="formulario-iniciar-sesion">
			<h1>Inicia Sesion</h1> 
				<form method="POST" action="direccionador/login.php"> <label  class="label" for="usuario">Usuario: <i class="far fa-user"></i></label>
						<input type="text" name="usuario" placeholder=" juan123">
						<br>
						<label class="label"  for="contraseña">Contraseña:<i class="fas fa-lock"></i> </label>
						<input type="password" name="contraseña" >

						<button class="submit">Iniciar Sesion</button>
				</form>
		</div>	
		
		</section>
		<section class="form-registarse" id="registrar" style="display: none";>
		<div class="contenedor-registrar" > 
				<form action="direccionador/datos-registrar.php" method="POST"> 
						<h1>Registrate</h1>
						<label class="label" for="nombre">Nombre: </label>
						<input type="text" name="nombre" placeholder=" juan">
						<label  class="label" for="apellidos">Apellidos: </label>
						<input type="text" name="apellidos" placeholder="Perez">

						<label  class="label" for="usuario icon-user" class="">Usuario: <i class="far fa-user"></i></label>
						<input type="text" name="usuario">

						<label class="label" for="contraseña">Contraseña: </label>
						<input type="password" name="contraseña" >
						<label class="label"  for="correo">Correo: </label>
						<input type="email" name="correo" placeholder=" juan">
						<label class="label"  for="numero">Numero </label>
						<input type="text" name="numero" placeholder=" 4411451463">

						<input type="submit" name="" value="Registrar">

				</form>
		</div>	
	</section>
<?php
	include 'php/footer.php';
?>