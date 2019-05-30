<?php
 include '../conexion/conexion-baseDatos.php';
$titulo = $_POST['titulo'];
$tipo_comida = $_POST['select'];
$descripcion = $_POST['textarea'];

$insertar = "INSERT INTO publicaciones VALUES(null,'$titulo', '$tipo_comida','$descripcion');";

 $insertado = mysqli_query($conexionBD, $insertar);
// $target_path = "images";
// $target_path = $target_path. basename($_FILES['agg-imagenes']);
// if(move_uploaded_file($_FILES['agg-imagenes']['tmp_name'], $target_path)){
// 	header('Location:../inicio-vendedor.php');
// }

// $archivo = $_FILES['agg-imagenes'];
// $nombre = $archivo['name'];
// $tipo  = $archivo['type'];

// if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo=="image/png") {
// 	if (!is_dir('../images')) {
// 		mkdir('../images',0777);
// 	}
// 	move_uploaded_file($archivo['tmp_name'], '../images/'.$nombre);
		
// header('Location:../inicio-vendedor.php');
// 	echo "<p> imagen subida correctamente";
// }else{
	
// header('Location:../inicio-vendedor.php');
// 	echo "Sube una imagen con un formato correcto";
// }
header('Location:../inicio-vendedor.php');
die();


?>
