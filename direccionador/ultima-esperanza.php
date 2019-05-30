<?php
	include '../php/head.php';
	include '../php/menu.php';

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
include '../php/footer.php';
require_once '../conexion/conexion-baseDatos.php';


 $name = isset($_POST['nombre']) ? $_POST['nombre']: false;
 
 $lastName = isset($_POST['apellidos']) ? $_POST['apellidos']: false;
 $user = isset($_POST['usuario']) ? $_POST['usuario']: false;
 $pass=  isset($_POST['contraseña']) ? $_POST['contraseña']: false ;
 $email =  isset($_POST['correo'])? $_POST['correo']: false;
 $number = isset($_POST['numero'])? $_POST['numero']: false;

 session_start();
if(isset($opcion)){
	 $opcion = $_POST['opcion'];
$errorDB = array();
if (!empty($name) && !is_numeric($name) && !preg_match('/[0-9]/', $name)){
	$nombre_valido  = true;
}else{
	echo $errorDB['nombre'] = "Error de nombre";
}

if (!empty($lastName) && !is_numeric($lastName) && !preg_match('/[0-9]/', $lastName)){
	$apelllido_valido  = true;
}else{
	echo $errorDB['apellidos'] = "Error de apellidos";
}
if (!empty($user)){
	$nombre_valido  = true;
}else{
	echo $errorDB['usuario'] = "Error de usuario";
}
if (!empty($pass)){
	$nombre_valido  = true;
}else{
	echo $errorDB['contraseña'] = "Error de contraseña";
}
if (!empty($number) && is_numeric($number) && preg_match('/[0-9]/', $number)){
	$nombre_valido  = true;
}else{
	echo $errorDB['numero'] = "Error de numero";
}
$guardar_usuario = false;

if(count($errorDB == 0)){
	$guardar_usuario  = true;
	$password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);
	// var_dump($pass);
	// var_dump($password_segura);
	$insertar = "INSERT INTO usuarios VALUES(null,'$name', '$lastName', '$number', '$email', '$password_segura', '$user', '$opcion')";
	$guardarBD = mysqli_query($conexionBD, $insertar);
	

}
}
// header('Location:../opcion-temporal.php');

?>