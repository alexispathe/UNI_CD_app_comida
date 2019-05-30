<?php
	include 'php/head.php';
?>
	<nav class="menu">
		<div class="contenedor-Menu">
			<?php
				include 'php/menu.php';
			?>
			<div class="imagen-menu">
				<img src="imagenes/imagen-menu.gif" alt="logo" / >
			</div>
			<div class="subDescripcion-Menu"><h2>Encuentra restaurantes que realicen entregas cerca de tu ubicación</h2>
				<form action="" method="" class="ubicacionMenu">
					<label for="direccion"></label>
					<input type="text" name="direccion" placeholder="Ingresa tu direccion de entrega">
					<button class="btn-buscar-comida" >Buscar comida</button>
				</form>
			</div>
			<br>
			
			</div>
	</nav>
	<br>
	<br>
	<article class="nota-container">
			<div class="nota">
				<div class="nota-titulo">
					<strong>Encuentra lo que buscas</strong>
				</div>
				<div class="nota-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

			</div>
			<div class="nota">
				<div class="nota-titulo">
					<strong>Encuentra lo que buscas</strong>
				</div>
				<div class="nota-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

			</div>
		</article>

			
		
		
	<div class="contenedor-conocenos">
		<div class="contenedor-imagenes">
			<div class="img-cont-1"><img src="imagenes/menus/imagen-1.png" /></div>
			<div class="img-cont-2"><img src="imagenes/menus/imagen-2.png" /></div>
			<div class=" img-cont-3"><img src="imagenes/menus/imagen-3.png" /></div>
			<div class="img-cont-4"><img src="imagenes/menus/imagen-4.png" /></div>
			<div class="img-cont-5"><img src="imagenes/menus/imagen-5.png" /></div>
		</div>
		<div class="contenedor-descripcion"><p>¡En alexis eats encontraras una gran variedad de comida, postres, refresos y mucho mas!</p></div>		
	</div>
	<section class="presentacion">
		<div class="conocenos">
			<img src="imagenes/comida.jpg">
			<h1>Encuentra la comida que más te gusta de tus restaurantes locales y cadenas favoritas.</h1>
		</div>

		<div class="conocenos" class="comida-rapida">
			<h1>Encuentra la comida que más te gusta de tus restaurantes locales y cadenas favoritas.</h1>
			<img src="imagenes/comidarapida.jpg">
		</div>
	</section>
	<section class="informacion">
		<div class="info-caracteristicas info-1">
		<div class="informacion-texto">
			<h1>En donde funciona</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="informacion-imagen">
			<img src="imagenes/mapa.jpg">
		</div>
		</div>
		<div class="info-caracteristicas info-2"><div class="informacion-texto">
			<h1>Tiempo de entrega</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="informacion-imagen">
			<img src="imagenes/tiempo-entrega.jpg">
		</div></div>

		<div class="info-caracteristicas info-3"><div class="informacion-texto">
			<h1>Como funciona</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="informacion-imagen">
			<img src="imagenes/funciona.jpg">
		</div></div>
	</section>
	<section class="pagos">
		<div class="tarjetas">
			<p>Métodos de pago</p>
			<img src="imagenes/metodos_pagos/visa.png">
			<img src="imagenes/metodos_pagos/mastercard.png">
			<img src="imagenes/metodos_pagos/paypal.png">

		</div>
		

	</section>
	<?php
		require 'php/footer.php';
	?>