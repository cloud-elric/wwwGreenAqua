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
				dataType: 'json',  // Tipo de respuesta
				success : function(response) { // Cuando la peticion sea exitosamente se ejecutara la funcion
					// Si la respuesta contiene la propiedad status y es success
					if (response.hasOwnProperty('status')
							&& response.status == 'success') {
						
						$(".aqua-body").fadeOut( 200 );
						$(".aqua-body-succes").fadeIn( 300 );
						$(".aqua-body-succes").css("display", "flex");

						document.getElementById("registro-form").reset();
						
					} else {
						
						// Muestra los errores
						$('#registro-form').yiiActiveForm('updateMessages',
								response, true);
					}
					
					l.stop();
				},
				statusCode: {
				    404: function() {
				      alert( "page not found" );
				    }
				  }

			});
			return false;
		});