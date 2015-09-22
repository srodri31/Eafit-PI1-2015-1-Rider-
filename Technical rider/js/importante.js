$(document).ready(function(){
	var isIn;
	var numPiano =1;
	var numPianoMesa =1;
	var numGuitar =1;
	var numSax =1;
	var numTrompeta =1;
	var numMicroPortable =1;
	var numMicrofono =1;
	var numBateria =1;
	$(".ui-draggable").draggable({
		revert: false,
		start: function(event, ui) {
			ui.helper.data('dropped', false);
		}		
	});

/*	
	$("#arrastrable1").draggable({	
		revert: false,
		stop: function(event, ui){
			isIn = ui.helper.data('dropped');
		}		
	});
*/	
	IsIn(isIn);
/*	$("#arrastrable2").draggable();
	$("#arrastrable3").draggable();
	$("#arrastrable4").draggable();
	$("#arrastrable5").draggable();
	$("#arrastrable6").draggable();
	$("#arrastrable7").draggable();
	$("#arrastrable8").draggable();
*/	
	
	$("#soltable").droppable({
		tolerance: "fit",
		accept: '*',
		drop: function( event, ui ) {
			$(this).html("Lo soltaste!!!");

	     var idElementoMarco = ui.draggable.attr("id");			
			
        if(idElementoMarco=="piano"+numPiano){
        	        	
               ++numPiano;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/piano3.png");
               imagen.setAttribute("id", "piano"+numPiano);               
               $(imagen).draggable();             
               var div = document.getElementById("divPiano");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);               	
         }  	
         
             if(idElementoMarco=="pianoMesa"+numPianoMesa){
               ++numPianoMesa;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/piano6.png");
               imagen.setAttribute("id", "pianoMesa"+numPianoMesa);
               $(imagen).draggable();             
               var div = document.getElementById("divPianoMesa");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              
        	} 	
         
             if(idElementoMarco=="guitar"+numGuitar){
               ++numGuitar;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/guitar5.png");
               imagen.setAttribute("id", "guitar"+numGuitar);
               $(imagen).draggable();             
               var div = document.getElementById("divGuitar");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              
        	}	
         
             if(idElementoMarco=="sax"+numSax){
               ++numSax;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/saxophone4.png");
               imagen.setAttribute("id", "sax"+numSax);
               $(imagen).draggable();             
               var div = document.getElementById("divSax");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
         }
              
        	 	
         
             if(idElementoMarco=="trompeta"+numTrompeta){
               ++numTrompeta;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/trumpet9.png");
               imagen.setAttribute("id", "trompeta"+numTrompeta);
               $(imagen).draggable();             
               var div = document.getElementById("divTrompeta");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              
        	} 	
         
             if(idElementoMarco=="microfonoPortable"+numMicroPortable){
               ++numMicroPortable;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/voice15.png");
               imagen.setAttribute("id", "microfonoPortable"+numMicroPortable);
               $(imagen).draggable();             
               var div = document.getElementById("divMicrofonoPortable");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              
        	}  	
         
             if(idElementoMarco=="microfono"+numMicrofono){
               ++numMicrofono;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/microphone37.png");
               imagen.setAttribute("id", "microfono"+numMicrofono);
               $(imagen).draggable();             
               var div = document.getElementById("divMicrofono");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              
        	}  	
         
             if(idElementoMarco=="bateria"+numBateria){
               ++numBateria;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "img/drum24.png");
               imagen.setAttribute("id", "bateria"+numBateria);
               $(imagen).draggable();             
               var div = document.getElementById("divBateria");
					imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
					imagen.style.zIndex="0";               
               div.appendChild(imagen);
               
              }


			ui.draggable.data('dropped', true);
			$(this).addClass("ui-state-highlight").find("img").html("Dropped!");
			var currentDraggable = $(ui.draggable).attr('id');
	
	
		},
		out: function( event, ui ) {
	
			var currentDraggable = $(ui.draggable).attr('id');
			var elem = document.getElementById(currentDraggable);
			elem.parentNode.removeChild(elem);
		}
	});
	
	$("#soltable").droppable("option", "activeClass", "sueltaaqui");
	
	function IsIn(){
		if(!isIn){
			$(".ui-draggable").draggable({
				revert:  function(dropped) {			   
				   return !dropped;
				} 
			})
		}
	}
	
	
	function crearElemento() {
      	
    
    
    
   
   }
	
})		