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
//	$(".js-btn-registrar").on("click", function(){
//
//		var l = Ladda.create(this);
//	 	l.start();
//
//		$(".aqua-body").fadeOut( 200 );
//		$(".aqua-body-succes").fadeIn( 300 );
//		$(".aqua-body-succes").css("display", "flex");
//	});

	// Click - Ocultar Registro Exitoso
	$(".js-btn-continuar").on("click", function(){

		var l = Ladda.create(this);
		l.start();

	 	$(".aqua-body-succes").fadeOut( 200 );

		$(".aqua-body .animated").animate({ "opacity": "0" }, 300, function() {
			$(".aqua-body").show();
			$(".aqua-body .animated").each(function(index) {$( this ).addClass("delay-"+(index)+" fadeInUp");});
		});
		// $(".aqua-body").fadeIn( 300 );
		l.stop();
	});
	
	// Click - Exportar
	$(".js-btn-exportar").on("click", function(){

		var l = Ladda.create(this);
	 	l.start();
	 	window.location='site/descargar-registros';
	 	setTimeout(function(){
	 		l.stop();
	 	}, 2000)
	 	
	 	
	 	//l.stop();
	 	
	});
});

$(window).load(function(){
	$(".loader").fadeOut();
	$(".aqua").delay(3000).fadeIn();

	$(".aqua-body").hide();
	$(".aqua-body .animated").animate({ "opacity": "0" }, 300, function() {
		$(".aqua-body").show();
		$(".aqua-body .animated").each(function(index) {$( this ).addClass("delay-"+(index)+" fadeInUp");});
	});
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