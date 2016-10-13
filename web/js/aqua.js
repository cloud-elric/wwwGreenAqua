/**
 * Proyecto
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Proyecto
 *
 */

/**
 * Document Ready
 */
$(document).ready(function(){
	
	// Click - Ver registros
	$(".js-ver-resgistros").on("click", function(){

		$(".flip-panel").addClass("flipped");
		$(".aqua").addClass("aqua-registros");

		// Mostrar boton de EXPORTAR
		$(".aqua-exportar").addClass("aqua-exportar-view");
		// Mostrar boton de Close
		$(".aqua-registros-close").addClass("aqua-registros-close-anim");
	});

	// Click - Close
	$(".js-registros-close").on("click", function(){

		$(".flip-panel").removeClass("flipped");
		$(".aqua").removeClass("aqua-registros");

		// Ocultar boton de EXPORTAR
		$(".aqua-exportar").removeClass("aqua-exportar-view");
		// Ocultar boton de Close
		$(".aqua-registros-close").removeClass("aqua-registros-close-anim");
	});

	// Click - Mostrar Registro Exitoso
	$(".js-btn-registrar").on("click", function(){

		var l = Ladda.create(this);
	 	l.start();

		$(".aqua-body").fadeOut( 200 );
		$(".aqua-body-succes").fadeIn( 300 );
		$(".aqua-body-succes").css("display", "flex");
	});

	// Click - Ocultar Registro Exitoso
	$(".js-btn-continuar").on("click", function(){

		var l = Ladda.create(this);
	 	l.start();
	 	
		$(".aqua-body-succes").fadeOut( 200 );
		$(".aqua-body").fadeIn( 300 );
	});
});

$(window).load(function(){
	$(".loader").fadeOut();
	$(".aqua").delay(3000).fadeIn();
});

/**
 * Variables
 */

$(function() {
	$('#ladda-1').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	});
	$('#ladda-2').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	});
});