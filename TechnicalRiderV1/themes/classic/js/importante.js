$(document).ready(function(){
	$(".btn-pref .btn").click(function () {
	    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
	    // $(".tab").addClass("active"); // instead of this do the below 
	    $(this).removeClass("btn-default").addClass("btn-primary");   
	});
	var isIn;
	var ninst=0;
	
	var numTube=1; nameTube="tube";
	var numTrumpet =1; nameTrumpet="trumpet";
	var numTrambone =1; nameTrambone="trambone";
	var numSaxophone =1; nameSaxophone="saxophone";
	var numClarnet =1; nameClarnet="clarnet";
	var numBanjo =1; nameBanjo="banjo";
	var numGuitar =1; nameGuitar="guitar";
	var numLyre =1; nameLyre="lyre";
	var numPiano =1; namePiano="piano";
	var numViolin =1; nameViolin="violin";
	var numBass_Drum =1; nameBass_Drum="bass_drum";
	var numCymbals =1; nameCymbals="cymbals";
	var numRattle =1; nameRattle="rattle";
	var numTriangle =1; nameTriangle="triangle";
	var numXylophone =1; nameXylophone="xylophone";
	var numCastanets =1; nameCastanets="castanets";
	var numDrums =1; nameDrums="drums";
	var numKettledrums =1; nameKettledrums="kettledrums";
	var numPercussion =1; namePercussion="percussion";
	var numSide_Drum =1; nameSide_Drum="side_drum";
	
	
	$(".ui-draggable").draggable({
	  
		start: function(event, ui) {
			ui.helper.data('dropped', false);
			
		}		
	});
	
	
	
	$("#soltable").droppable({
		tolerance: "fit",
		accept: '*',
		drop: function( event, ui ) {
			$(this).html("Lo soltaste!!!");


	    var idElementoMarco = ui.draggable.attr("id");	
	
		switch(idElementoMarco) {
			case nameTube+numTube:
				createTableChannel(nameTube,numTube);
				createFieldsInstrumenInformation(nameTube,numTube);
				createElements(nameTube,++numTube);
				break;
			case nameTrumpet+numTrumpet:
				createTableChannel(nameTrumpet,numTrumpet);
				createFieldsInstrumenInformation(nameTrumpet,numTrumpet);
				createElements(nameTrumpet,++numTrumpet);
				break;

			
		}

			ui.draggable.data('dropped', true);
			$(this).addClass("ui-state-highlight").find("img").html("Dropped!");
			var currentDraggable = $(ui.draggable).attr('id');
	},
		out: function( event, ui ) {
			
			var currentDraggable = $(ui.draggable).attr('id');
			var select = document.getElementById("instrumentStage");
			for (i=0; opt=select.getElementsByTagName('option')[i]; i++) {
				if (opt.getAttribute('value')==currentDraggable){
					select.remove(i);
				}
			}
			var table = document.getElementById('tableChannel');
			for (i=0; trT=table.getElementsByTagName('tr')[i]; i++) {
				if (trT.getAttribute('id')==currentDraggable){
				  document.getElementById("tableChannel").deleteRow(i);
				
				  var elem = document.getElementById(currentDraggable);
				  elem.parentNode.removeChild(elem);	
				}
				
			 }
			   --ninst;
			   updateDates();
		}
	});
	
	$("#soltable").droppable("option", "activeClass", "sueltaaqui");
	
	
	
	
	function createElements(name,num){
				var imagen = document.createElement("img"); 
				imagen.setAttribute("src", "/yii/TechnicalRiderV1/themes/classic/images/"+name+".png");
				imagen.setAttribute("id", name+num);
				var auxDiv =document.createElement("div");
				auxDiv.setAttribute("id", name+num);
				auxDiv.setAttribute("class","ui-draggable");
				auxDiv.setAttribute("name",name+".png");
				auxDiv.setAttribute("value",name+ninst);
				auxDiv.appendChild(imagen);               	
				$(auxDiv).draggable();             
				var div = document.getElementById(name+".png");
				auxDiv.style.position="absolute";               
				auxDiv.style.left="15px";              
				auxDiv.style.top="0px";
				auxDiv.style.zIndex="0";               
				div.appendChild(auxDiv);               	
	}
	
	
	function createTableChannel(name,num){
		++ninst;
		var row = document.createElement("tr");
		row.setAttribute("id",name+num);
		var fieldNumber = document.createElement("td");
		var fieldChannel = document.createElement("td");
		var fieldMicrophone = document.createElement("td");
		var textNumber = document.createTextNode(ninst);
		var textChannel = document.createTextNode(name);
		var textMicrophone = document.createTextNode("Default");
		fieldNumber.appendChild(textNumber);
		fieldChannel.appendChild(textChannel);
		fieldMicrophone.appendChild(textMicrophone);
		row.appendChild(fieldNumber);
		row.appendChild(fieldChannel);
		row.appendChild(fieldMicrophone);
		var table = document.getElementById("tableChannel");
		table.appendChild(row);
		
	}
	
	function createFieldsInstrumenInformation(name,num){
		 var instOption = document.createElement("option");
		 instOption.setAttribute("value",name+num);
		 var textNum_Name = document.createTextNode(name+" "+ninst);
		 var select = document.getElementById("instrumentStage");
		 instOption.appendChild(textNum_Name);
		 select.appendChild(instOption);
	}
	
	
	function updateDates(){
		var table = document.getElementById('tableChannel');
		
		for (i=0; trT=table.getElementsByTagName('tr')[i]; i++) {
			var field = trT.getElementsByTagName('td')[0];
		    if(field!=undefined){
				field.innerHTML=i;
			}
			
	    }
		var select = document.getElementById("instrumentStage");
		for (i=1; opt=select.getElementsByTagName('option')[i]; i++) {
			var text= opt.getAttribute("value");
		    var newText = text.substring(0, text.length-1);
			opt.innerHTML=newText+" "+i;
		}
		
	}
	
	
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