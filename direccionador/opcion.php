<?php
	include  '../conexion/conexion-baseDatos.php';

 $name = isset($_POST['nombre']) ? $_POST['nombre']: false;
 $lastName = isset($_POST['apellidos']) ? $_POST['apellidos']: false;
 $user = isset($_POST['usuario']) ? $_POST['usuario']: false;
 $pass=  isset($_POST['contraseña']) ? $_POST['contraseña']: false ;
 $email =  isset($_POST['correo'])? $_POST['correo']: false;
 $number = isset($_POST['numero'])? $_POST['numero']: false;
 $opcion = isset($_POST['opcion'])? $_POST['opcion']: false;
 
 
 session_start();
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
	$super = mysqli_query($conexionBD, $insertar);
	if ($opcion == 'cliente') {
		header('Location:../inicio-usuario.php');
	}
	else if ($opcion == 'vendedor') {
		header('Location:../inicio-vendedor.php');
	}
	else if ($opcion == 'repartidor') {
		header('Location:../inicio-repartidor.php');
	}

	// header('Location:../index.php');

	

}

	
	// var_dump($opcion);

	// $opciones = "INSERT INTO usuarios('opcion_usuario') values('$opcion')";
	// $guardar_opcion = mysqli_query($conexionBD , $opciones);

	


	// if (isset($_POST['opcion'])) {
	// 	$opcion =  $_POST['opcion'];
	// }else{
	// 	$opcion = "";
	// }

	// if ($opcion == "vendedor") {
	// 	header('Location:../inicio-vendedor.php');

	// }else if($opcion == "cliente"){
	// 	header('Location:../inicio-usuario.php');

	// }else if($opcion == "repartidor"){
	// 	header('Location:../inicio-repartidor.php');
	// }
?>