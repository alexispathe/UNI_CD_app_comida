		var login = document.getElementById('login');
		var registar = document.getElementById('registrar');
		var parte1 = document.getElementById('parte1');
		var parte2 = document.getElementById('parte2');

		function iniciarSesion(){
			login.style.display = 'block';
			registrar.style.display = 'none';
		}
		function registrarse(){
			login.style.display = 'none';
			registrar.style.display = 'block';
		}
		function siguiete(){
			parte2.style.display = 'block';
			parte1.style.display = 'none';
		}
$(document).ready(function(){
	// var altura = $('.tituloMenu').offset().top;
	var altura = 430;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.tituloMenu').addClass('fixed');
		} else {
			$('.tituloMenu').removeClass('fixed');
		}
	});
 
});