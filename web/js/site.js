$('body').on(
		'beforeSubmit',
		'#registro-form',
		function() {
			var form = $(this);
			// return false if form still have some validation errors
			if (form.find('.has-error').length) {
				return false;
			}

			var button = document.getElementById('js-submit-form');
			var l = Ladda.create(button);
			l.start();

			// submit form
			$.ajax({
				url : form.attr('action'),// url para peticion
				type : 'post', // Metodo en el que se enviara la informacion
				data : form.serialize(), // La informacion a mandar
				dataType : 'json', // Tipo de respuesta
				success : function(response) { // Cuando la peticion sea
												// exitosamente se ejecutara la
												// funcion
					// Si la respuesta contiene la propiedad status y es success
					if (response.hasOwnProperty('status')
							&& response.status == 'success') {

						$(".aqua-body").fadeOut(200);
						$(".aqua-body-succes").fadeIn(300);
						$(".aqua-body-succes").css("display", "flex");

						var nombre = $("#entusuarios-txt_nombre").val() + " "
								+ $("#entusuarios-txt_apellido_paterno").val();
						var numEsferas = $("#entusuarios-num_esferas").val();

						var item = '<div class="aqua-registros-item">' + '<p>'
								+ nombre + '</p>' + '<p>' + numEsferas + '</p>'
								+ '</div>';

						document.getElementById("registro-form").reset();

						$('#js-contenedor-registros').append(item);

						$(".aqua-body-succes .animated").animate(
								{
									"opacity" : "0"
								},
								300,
								function() {
									$(".aqua-body-succes").show();
									$(".aqua-body-succes .animated").each(
											function(index) {
												$(this).addClass(
														"delay-" + (index)
																+ " fadeInUp");
											});
								});

					} else {

						// Muestra los errores
						$('#registro-form').yiiActiveForm('updateMessages',
								response, true);
					}

					l.stop();
				},
				statusCode : {
					404 : function() {
						alert("page not found");
					}
				}

			});
			return false;
		});

$('#registro-form').on(
		'afterValidate',
		function(e) {

			if ($('#registro-form').find('.has-error').length) {
				
				$("#message-error").addClass("aqua-body-error");
				
				$("#message-error").text(
						$('.has-error:eq(0) .help-block-error').text());
				return false;
			}else{
				$("#message-error").removeClass("aqua-body-error");
				$("#message-error").text("");
			}

		});

