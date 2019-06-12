<?php
$archivo =  $_FILES['add-imagenes'];
$nombe = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg"  || $tipo == "image/jpeg" || $tipo == "image/png"){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombe);
}else{
    header("Refresh: 4; URL=../index.php");
}
header('Location:../inicio-vendedor.php');
die();

?>