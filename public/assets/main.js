$(document).ready(function(){
	
	var nm = 10;//Numero de minituras
	
	var tb = 0;//incrementador
	var intervalo;
	
	var imgid;//Id de la imagen en preview
	var imgw = 0;//Ancho de la imagen preview	
	var imgposter;//Guarda la ruta de la imagen original
	
	var imgl= false;//Bandera de imagen cargada
	var binter = false;//Bandera de intervalo activado
	
	//Evento que se dispara en el evento hover de elementos con la clase 'preview'
	$(".preview").hover(function(){				
			//Id de la imagen
			//*** IMPORTANTE ***, adaptar si se modifica la estructura HTML de la minitura
			imgid = $(this).children('img');

			//Guardando la ruta de la imagen actual
			imgposter = $(imgid).attr("src");
			
			binter = true;//Bandera de intervalo activa
			
			//Url de la imagen preview
			url = $(imgid).attr("src-preview");			
			
			//Intervalo de tiempo cada 800ms
			intervalo = setInterval(function(){
				//Verificando que la bandera de carga de imagen este activa
				if(!imgl) return;	
				
				//Desplazando la imgen con propiedad margin-left
				$(imgid).css("margin-left", tb*(-imgw));
				
				//Incrementar y verificar el fragmento a monstrar
				if((tb++)==(nm-1)) tb=0;
			}, 800);			
			
			$(imgid).attr('src', url).load(function() { 
				if(binter){//Si el intervalo esta activo
					$(imgid).css("width", "auto");
					tb=1;//Reset incrementador					
					imgl = true;//Bandera de carga de imagen activa  
					imgw = $(imgid).width()/nm;
					console.info(imgw);
				}
			}).error(function () {
				//Encaso de error al cargar la imagen de preview, reestableser
				imgl = false;
				clearInterval(intervalo);
				$(imgid).css("margin-left", 0);
				$(imgid).css("width", "100%");
				$(imgid).attr("src", imgposter);
			}); 
		
		//Mouse retirado de la miniatura
		}, function(){
			//Borrando el intervalo
			clearInterval(intervalo);
			
			//Desactivando la bandera de intervalo
			binter = false;
			
			//Reseteando los valores CSS y restaurando la miniatura
			$(imgid).css("margin-left", 0);
			$(imgid).css("width", "100%");
			$(imgid).attr("src", imgposter);
		}
	);
});
