<?php

	function publicaciones($conexion){
		$sql = "SELECT * FROM publicaciones ORDER BY id DESC limit 100";
		$traerPuclicaciones = mysqli_query($conexion, $sql);
		$publicaciones = array();
		if($traerPuclicaciones && mysqli_num_rows($traerPuclicaciones)>=1){
				$publicaciones = $traerPuclicaciones;	
		}
		return $publicaciones;
	}

	function comidas($conexionComida){
		$traerComidas = 'SELECT * FROM publicaciones order by id  desc';
		$comidas = mysqli_query($conexionComida, $traerComidas);

		$publicacionesComida = array();

		if ($comidas && mysqli_num_rows($comidas)>=1) {
			$publicacionesComida = $comidas;
		}
		return $publicacionesComida;
	

	}
?>