<?php
	 include '../conexion/conexion-baseDatos.php';
if (isset($_POST)) {
	$user = trim($_POST['usuario']);
	$password = trim($_POST['contraseña']);
	var_dump($password);
	var_dump($user);
$sql = "SELECT * FROM usuarios where usuarios = '$user'";
$login = mysqli_query($conexionBD, $sql);
if ($login && mysqli_num_rows($login)== 1) {
	$usuarios= mysqli_fetch_assoc($login);
	echo "<br>";
	var_dump($usuarios);
	$verify = password_verify($password, $usuarios['password']);
	var_dump($verify);
	if ($verify) {// $_SESSION['usuario'] = $usuario;
		
		header('Location: ../inicio-usuario.php');


	}else{
		// header('Location:../index.php');
	}
	die();
}
	
}
	

?>