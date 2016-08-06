	$(document).ready(function(){
		var x = $( window ).width();
		var y = $( window ).height();

		var x_menu = parseInt(x*0.25);
		var y_menu = parseInt(x_menu/3);
		var y_icon = y_menu - 16;
		var xy_margen = parseInt((x-x_menu)/2);

		$('#menu_centro').css({width:x_menu, height:y_menu});
		$('.reloj').css({width:x});

		$('.iconos').css({height: y_icon});

		$('.iconos').click(function(){
			var valor = $(this).attr('id');
			if (valor=='icon1') {
				$('body').css({background:'#58FAAC'});
				$('#text01, .conteo1').css({opacity:1});
				$('#text02, #text03, .conteo2, .conteo3').css({opacity:0});
			} else if (valor=='icon2') {
				$('body').css({background:'#F3F781'});
				$('#text02, .conteo2').css({opacity:1});
				$('#text01, #text03, .conteo1, .conteo3').css({opacity:0});
			} else if (valor=='icon3') {
				$('body').css({background:'#F78181'});
				$('#text03, .conteo3').css({opacity:1});
				$('#text01, #text02, .conteo1, .conteo2').css({opacity:0});
			}
		});

		var y_imagen = $('#text03').height()+y_menu+20;

		//alert(y_imagen);
		$('.reloj').css({top:y_imagen});

		if (x>y) {
			//alert('Mayor horizontal');
		} else {
			//alert('Mayor vertical');
		}
	});


	// funcion que da la posicion del scroll
	$(window).scroll(function(){
		var niidea = $(this).scrollTop();
		if (niidea>=200) {
			//alert("fuera de pantalla");
		}
	})

