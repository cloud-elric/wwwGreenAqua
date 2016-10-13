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

		// $(".aqua-cont").addClass("aqua-registros-cont");
		$(".flip-panel").addClass("flipped");

		$(".aqua").addClass("aqua-registros");
		// $(".aqua-body").hide();
		// $(".aqua-registros-body").show();

		// Mostrar boton de EXPORTAR
		$(".aqua-exportar").addClass("aqua-exportar-view");
		// Mostrar boton de Close
		$(".aqua-registros-close").addClass("aqua-registros-close-anim");
	});

	// Click - Close
	$(".js-registros-close").on("click", function(){

		$(".flip-panel").removeClass("flipped");

		$(".aqua").removeClass("aqua-registros");
		// $(".aqua-registros-body").hide();
		// $(".aqua-body").show();

		// Ocultar boton de EXPORTAR
		$(".aqua-exportar").removeClass("aqua-exportar-view");
		// Ocultar boton de Close
		$(".aqua-registros-close").removeClass("aqua-registros-close-anim");
	});

	// Click - Mostrar Registro Exitoso
	$(".btn.btn-primary").on("click", function(){
		$(".aqua-body").fadeOut( 100 ).hide();
		$(".aqua-body").delay( 300 ).css("opacity", 0);
		$(".aqua-body-succes").css("display", "flex");

		$(".aqua-body").delay(200).css("opacity", 1);
	});

	// Click - Ocultar Registro Exitoso
	$(".js-btn-continuar").on("click", function(){
		$(".aqua-body-succes").delay( 300 ).fadeIn( 400 ).css("opacity", 0);
		$(".aqua-body-succes").fadeOut( 400 ).hide();
		$(".aqua-body").show();

		$(".aqua-body-succes").delay(200).css("opacity", 1);
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