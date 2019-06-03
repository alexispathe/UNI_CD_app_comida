<?php
	include 'php/head.php';
	include 'conexion/conexion-baseDatos.php';
	include 'conexion/entradas.php';
?>
<?php include 'php/menu-vendedor.php'?>

<!-- MANDO A TRAER LOS DATOS DE LA PUBLICACION -->

	<section class="inicio-vendedor">
	
		<div class="publicaciones">
			<div class="nueva-publicacion tipo-comida">

				<section class="componentes-comida-creador">
				<?php
	$traerPuclicaciones = publicaciones($conexionBD);
	if (!empty($traerPuclicaciones)):
		while ($publicacion = mysqli_fetch_assoc($traerPuclicaciones)):
	?>
		<div class="componentes comp1">
		
			<div class="comp-titulo-comida comp-titulo"><?= $publicacion['titulo']?></div>
			
			<div class="comp-imagen-comida"><img src="imagenes/menus/imagen-3.png">Imagen</div>
			<div class="comp-descripcion-comida">
				<h3><?=$publicacion['categoria']?></h3>
				<?=$publicacion['descripcion']?></div>
		</div>
<?php
	endwhile;
	endif;
?>
		<!-- <div class="componentes comp1">
			<div class="comp-titulo-comida comp-titulo">Pizza</div>
			<div class="comp-imagen-comida"><img src="imagenes/componentes/pizza.jpg"></div>
			<div class="comp-descripcion-comida">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="componentes comp1">
			<div class="comp-titulo-comida ">Hamburgesa</div>
			<div class="comp-imagen-comida "><img src="imagenes/componentes/hamburgesa.jpg"></div>
			<div class="comp-descripcion-comida ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
		<div class="componentes comp1">
			<div class="comp-titulo-comida comp-titulo">Tacos</div>
			<div class="comp-imagen-comida"><img src="imagenes/componentes/tacos.jpg"></div>
			<div class="comp-descripcion-comida">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
 -->
		</section>
			</div>
		</div>
		<div class="agregar-comida publicar-comida">
			<div class="publicacion-new">
				
				<form method="POST" action="direccionador/nueva-publicacion.php" enctype="multipart/form-data"  >
					<h1>¡Publica ahora!</h1>
					<br>

					<label for="titulo">Titulo:</label>
					<input type="text" name="titulo">
					<br>
					<br>
					<span>Seleciona el tipo de comida que es:</span>
					<select name="select">
						<option value="Postres">Postres</option>
						<option value="Desayunos">Desayunos</option>
						<option value="Comida">Comida</option>
						<option value="Cena">Cena</option>
					</select>
					<br>
					<br>
					<br>
					<textarea name="textarea" rows="5" cols="40" placeholder="Escribe lo que contiene tu publicacion"></textarea>
					<br>
					<br><br>
					<label name="agg-imagenes">Agrega imagenes:</label>
					<input type="file" name="add-imagenes">
					<input type="submit" name="submit" value="PUBLICAR" class="btn-publicar">
				</form>
			</div>
		</div>
	</section>






