$(document).ready(function(){
	$(".btn-pref .btn").click(function () {
	    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
	    // $(".tab").addClass("active"); // instead of this do the below 
	    $(this).removeClass("btn-default").addClass("btn-primary");   
	});
	var isIn;
	var ninst=0;
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
	
	
	$("#soltable").droppable({
		tolerance: "fit",
		accept: '*',
		drop: function( event, ui ) {
			$(this).html("Lo soltaste!!!");

//DOM elements
        ninst++;
	    var idElementoMarco = ui.draggable.attr("id");	
		var div;
		var input;
		var select;
		var option;
		var tableChannels;
		var tbody;
		var tr;
		var td;
		
		elemento = document.getElementById(idElementoMarco);
		var posicion = elemento.getBoundingClientRect();


		//Instrument Label 
		div = document.createElement("div");
		div.setAttribute("id","divName"+ninst);
		div.setAttribute("class","form-group");
		document.getElementById("description").appendChild(div);
		input = document.createElement("input");
		input.setAttribute("type","text");
		input.setAttribute("requiered","requiered");
		input.setAttribute("class","form-control");
		input.setAttribute("id","name"+ninst);
		input.setAttribute("placeholder","Instrument");
		document.getElementById("instruments").appendChild(div);
		document.getElementById("divName"+ninst).appendChild(input);
		
		//Microphone Select
		div = document.createElement("div");
		div.setAttribute("id","divMic"+ninst);
		div.setAttribute("class","form-group");
		document.getElementById("description").appendChild(div);
		select = document.createElement("select");
		select.setAttribute("class", "form-group")
		select.setAttribute("id", "divMic2"+ninst);
		option = document.createElement(option);
		option.setAttribute("value","1");
		option.setAttribute("id", "1");
		document.getElementById("instruments").appendChild(div);
		document.getElementById("divMic"+ninst).appendChild(select);
		document.getElementById("divMic2"+ninst).appendChild(option);
		
		
		div = document.createElement("div");
		div.setAttribute("id","divSubmit"+ninst);
		div.setAttribute("class","form-group");	
		document.getElementById("description").appendChild(div);	
        input = document.createElement("input");
		input.setAttribute("type","submit");
		input.setAttribute("class","btn btn-primary");
		input.setAttribute("id","submit"+ninst);
		input.setAttribute("value","Save");
		document.getElementById("instruments").appendChild(div);
		document.getElementById("divSubmit"+ninst).appendChild(input);
		

		//START : Creating Channels Table 
		if(ninst == 1){
			var number = document.createTextNode("Number"); 
			var channel = document.createTextNode("Channel"); 
			var microphone = document.createTextNode("Microphone"); 
			document.getElementById("number").appendChild(number);
			document.getElementById("channel").appendChild(channel);
			document.getElementById("microphone").appendChild(microphone);
		}

         var row = document.createElement("tr");
         row.setAttribute("class", "success");
        
         var cell = document.createElement("td"); 
         var cell2 = document.createElement("td"); 
         var cell3 = document.createElement("td");     
         var cellText = document.createTextNode("cell is row , column "); 

         cell.appendChild(cellText);
         cell2.appendChild(cellText);
         cell3.appendChild(cellText);
         row.appendChild(cell);
         row.appendChild(cell2);
         row.appendChild(cell3);


        //row added to end of table body
        document.getElementById("tableBody").appendChild(row);        

        //END OF TABLE CREATION
        
		

		//new Image from data base EXAMPLE
		if(idElementoMarco==5){        	        	
               ++numPiano;			      
			   var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/images/piano3.png");
               imagen.setAttribute("id", "5");               
               $(imagen).draggable();             
               var div = document.getElementById("piano3.png");
			   imagen.style.position="absolute";               
               imagen.style.left="14px";              
               imagen.style.top="0px";
			   imagen.style.zIndex="0";               
               div.appendChild(imagen);               	
         }  	
        //previous example
         
             if(idElementoMarco=="pianoMesa"+numPianoMesa){
               ++numPianoMesa;			      
			      var imagen = document.createElement("img"); 
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/piano6.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/guitar5.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/saxophone4.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/trumpet9.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/voice15.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/microphone37.png");
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
               imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/img/drum24.png");
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
			var name = document.getElementById("divName"+ninst);
			var mic = document.getElementById("divMic"+ninst);
			var submit = document.getElementById("divSubmit"+ninst);
			name.parentNode.removeChild(name);
			mic.parentNode.removeChild(mic);
			submit.parentNode.removeChild(submit);
			ninst--;
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
	
})		