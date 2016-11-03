/**
 * Aqua
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Aqua
 *
 */

// Variables
// modal - aviso de privacidad
var modalAvisoPrivacidad = document.getElementById('modal-aviso-privacidad');
var closeAvisoPrivacidad = document.getElementById('modal-aviso-privacidad-close');
var btnAvisoPrivacidad = document.getElementById('btn-aviso-privacidad');

// modal - Términos y condiciones
var modalTerminosCondiciones = document.getElementById('modal-aviso-privacidad');
var closeTerminosCondiciones = document.getElementById("modal-terminos-condiciones-close");
var btnTerminosCondiciones = document.getElementById('btn-terminos-condiciones');

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
	 	window.location='descargar-registros';
	 	setTimeout(function(){
	 		l.stop();
	 	}, 2000)
	 	
	 	
	 	//l.stop();
	 	
	});


	/**
	 * Click - Mostar terminos y condiciones
	 */
	$(".aceptar-mask").on("click", function(){
		modalTerminosCondiciones.style.display = "flex";
	});

	/**
	 * Click - Boton de Aceptar terminos y condiciones
	 */
	$(".aceptar-terminos-condiciones-btn").on("click", function(){
		$(".aceptar-mask").hide();
		$("#checkbox").prop( "checked", true );
		modalTerminosCondiciones.style.display = "none";

	});

	/**
	 * Click - Mostar terminos y condiciones
	 */
	$("#checkbox").click(function() {
		if($("#checkbox").is(':checked')) {
			// alert("Está activado");
		} else {
			$(".aceptar-mask").show();
		}
	});

	// open
	// Aviso de privacidad
	$(btnAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "flex";
	});

	// open
	// Términos y condiciones
	$(btnTerminosCondiciones).on("click", function(){
		modalTerminosCondiciones.style.display = "flex";
	});


	// close
	// Aviso de privacidad
	$(closeAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "none";
	});


	// close
	// Términos y condiciones
	$(closeTerminosCondiciones).on("click", function(){
		modalTerminosCondiciones.style.display = "none";
	});


	// close it
	window.onclick = function(event) {
		// modal - Aviso de privacidad
		if (event.target == modalAvisoPrivacidad) {
			modalAvisoPrivacidad.style.display = "none";

		}

		// modal - Términos y condiciones
		if (event.target == modalTerminosCondiciones) {
			modalTerminosCondiciones.style.display = "none";
		}
	}

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