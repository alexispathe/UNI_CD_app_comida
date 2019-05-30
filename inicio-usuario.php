<?php
	include 'php/head.php';
	include 'php/menu-usuario.php';
	include 'conexion/entradas.php';
	include 'conexion/conexion-baseDatos.php';
?>
<article class="contenedor-user-principal">
	<section class="buscador">
		<span>¡Encuentra la comida que mas te gusta!</span>
		<form class="buscador-form">
			<label for="direccion"></label>
					<input type="text" name="direccion" placeholder="Buscar comida" class="buscador-comida">
					<button class="btn-buscar-comida" >Buscar comida</button>
				</form>
	</section>
	<section class="componentes-comida">
		<?php
			$comidas = comidas($conexionBD);
			if(!empty($comidas)):
			while ($comidasPublicaciones = mysqli_fetch_assoc($comidas)):

		  ?>
		<div class="componentes comp1">
			<div class="comp-titulo-comida comp-titulo"><?= $comidasPublicaciones['titulo']?></div>
			<div class="comp-imagen-comida"><img src="imagenes/componentes/pastel.jpg"></div>
			<h1><?= $comidasPublicaciones['categoria']?></h1>
			<div class="comp-descripcion-comida"><?= $comidasPublicaciones['descripcion']?></div>
			<div class="comp-ordenar"><h4>Agregar a canasta</h4></div>
		</div>
		<?php
			endwhile;
				endif;
		?>
		<div class="componentes comp1">
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

	</section>
</article>
<?php
	include 'php/footer.php';
?>