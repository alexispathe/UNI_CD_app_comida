<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'alexiseats';
$conexionBD = mysqli_connect($server, $username, $password, $database);
mysqli_query($conexionBD, "SET NAME 'utf8'");


?>