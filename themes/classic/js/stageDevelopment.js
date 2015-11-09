
//--------------def of vars---------------------------

	var stringBD="";
	
	
	
	var numIdTable=0;
	
	var numTube=1; nameTube="tube";	stateTube=false; 
	var numTrumpet =1; nameTrumpet="trumpet"; stateTrumpet=false;
	var numTrambone =1; nameTrambone="trambone"; stateTrambone=false;
	var numSaxophone =1; nameSaxophone="saxophone"; stateSaxophone=false;
	var numClarnet =1; nameClarnet="clarnet"; stateClarnet=false;
	var numBanjo =1; nameBanjo="banjo"; stateBanjo=false;
	var numGuitar =1; nameGuitar="guitar"; stateGuitar=false;
	var numLyre =1; nameLyre="lyre"; stateLyre=false;
	var numPiano =1; namePiano="piano"; statePiano=false;
	var numViolin =1; nameViolin="violin"; stateViolin=false;
	var numBass_Drum =1; nameBass_Drum="bass_drum"; stateBass_drum=false;
	var numCymbals =1; nameCymbals="cymbals"; stateCymbals=false;
	var numRattle =1; nameRattle="rattle"; stateRattle=false;
	var numTriangle =1; nameTriangle="triangle"; stateTriangle=false;
	var numXylophone =1; nameXylophone="xylophone"; stateXylophone=false;
	var numCastanets =1; nameCastanets="castanets"; stateCastanets=false;
	var numDrums =1; nameDrums="drums"; stateDrums=false;
	var numKettledrums =1; nameKettledrums="kettledrums"; stateKettledrums=false;
	var numPercussion =1; namePercussion="percussion"; statePercussion=false;
	var numSide_Drum =1; nameSide_Drum="side_drum"; stateSide_drum=false;

//----------------------Stage Plot jquery-----------------------------------	
	
$(document).ready(function(){
	
	$(".ui-draggable").draggable({
		start: function(event, ui) {
			ui.helper.data('dropped', false);
			
		}		
	});
	
	
	$("#soltable").droppable({
		tolerance: "fit",
		accept: '*',
		drop: function( event, ui ) {


	    var idElementoMarco = ui.draggable.attr("id");	
		locateInstrument(idElementoMarco);
		

	},
		out: function( event, ui ) {
			
			var currentDraggable = $(ui.draggable).attr('id');
			deleteDragElement(currentDraggable);
            var nombreDraggable = $(ui.draggable).attr('name');
			updateElementsDraggrable(nombreDraggable);
			
		}
	});
	
	$("#soltable").droppable("option", "activeClass", "sueltaaqui");
	
})	
	


//----------functions--------------------------------------------

	function deleteDragElement(currentDraggable){
		
			var table = document.getElementById('tableChannel');
			for (i=0; trT=table.getElementsByTagName('tr')[i]; i++) {
				if (trT.getAttribute('id')=="."+currentDraggable){
				  document.getElementById("tableChannel").deleteRow(i);
				  --numIdTable;
				  break;
				}
			}

			var select = document.getElementById("instrumentStage");
			for (i=0; opt=select.getElementsByTagName('option')[i]; i++) {
				if (opt.getAttribute('id')=="."+currentDraggable){
					select.remove(i);
					break;
				}
			}
			
			var elem = document.getElementById(currentDraggable);
			elem.remove();
	
	}


	function locateInstrument(idElementoMarco){
		switch(idElementoMarco) {
			case nameTube+numTube: 
				createTableInput(nameTube,numTube,null);
				createOptionsSelect(nameTube,numTube);
				createElementsDraggable(nameTube,++numTube);
				break;
			case nameTrumpet+numTrumpet:   
				createTableInput(nameTrumpet,numTrumpet,null);			
				createOptionsSelect(nameTrumpet,numTrumpet);
				createElementsDraggable(nameTrumpet,++numTrumpet);
				break;
			case nameTrambone+numTrambone:   
				createTableInput(nameTrambone,numTrambone,null);			
				createOptionsSelect(nameTrambone,numTrambone);
				createElementsDraggable(nameTrambone,++numTrambone);
				break;
			case nameSaxophone+numSaxophone:   
				createTableInput(nameSaxophone,numSaxophone,null);			
				createOptionsSelect(nameSaxophone,numSaxophone);
				createElementsDraggable(nameSaxophone,++numSaxophone);
				break;
			case nameClarnet+numClarnet:   
				createTableInput(nameClarnet,numClarnet,null);			
				createOptionsSelect(nameClarnet,numClarnet);
				createElementsDraggable(nameClarnet,++numClarnet);
				break;
			case nameBanjo+numBanjo:   
				createTableInput(nameBanjo,numBanjo,null);			
				createOptionsSelect(nameBanjo,numBanjo);
				createElementsDraggable(nameBanjo,++numBanjo);
				break;
			case nameGuitar+numGuitar:   
				createTableInput(nameGuitar,numGuitar,null);			
				createOptionsSelect(nameGuitar,numGuitar);
				createElementsDraggable(nameGuitar,++numGuitar);
				break;
			case nameLyre+numLyre:   
				createTableInput(nameLyre,numLyre,null);			
				createOptionsSelect(nameLyre,numLyre);
				createElementsDraggable(nameLyre,++numLyre);
				break;
			case namePiano+numPiano:   
				createTableInput(namePiano,numPiano,null);			
				createOptionsSelect(namePiano,numPiano);
				createElementsDraggable(namePiano,++numPiano);
				break;
			case nameViolin+numViolin:   
				createTableInput(nameViolin,numViolin,null);			
				createOptionsSelect(nameViolin,numViolin);
				createElementsDraggable(nameViolin,++numViolin);
				break;
			case nameBass_Drum+numBass_Drum:   
				createTableInput(nameBass_Drum,numBass_Drum,null);			
				createOptionsSelect(nameBass_Drum,numBass_Drum);
				createElementsDraggable(nameBass_Drum,++numBass_Drum);
				break;
			case nameCymbals+numCymbals:   
				createTableInput(nameCymbals,numCymbals,null);			
				createOptionsSelect(nameCymbals,numCymbals);
				createElementsDraggable(nameCymbals,++numCymbals);
				break;
			case nameRattle+numRattle:   
				createTableInput(nameRattle,numRattle,null);			
				createOptionsSelect(nameRattle,numRattle);
				createElementsDraggable(nameRattle,++numRattle);
				break;
			case nameTriangle+numTriangle:   
				createTableInput(nameTriangle,numTriangle,null);			
				createOptionsSelect(nameTriangle,numTriangle);
				createElementsDraggable(nameTriangle,++numTriangle);
				break;
			case nameXylophone+numXylophone:   
				createTableInput(nameXylophone,numXylophone,null);			
				createOptionsSelect(nameXylophone,numXylophone);
				createElementsDraggable(nameXylophone,++numXylophone);
				break;
			case nameCastanets+numCastanets:   
				createTableInput(nameCastanets,numCastanets,null);			
				createOptionsSelect(nameCastanets,numCastanets);
				createElementsDraggable(nameCastanets,++numCastanets);
				break;
			case nameDrums+numDrums:   
				createTableInput(nameDrums,numDrums,null);			
				createOptionsSelect(nameDrums,numDrums);
				createElementsDraggable(nameDrums,++numDrums);
				break;
			case nameKettledrums+numKettledrums:   
				createTableInput(nameKettledrums,numKettledrums,null);			
				createOptionsSelect(nameKettledrums,numKettledrums);
				createElementsDraggable(nameKettledrums,++numKettledrums);
				break;
			case namePercussion+numPercussion:   
				createTableInput(namePercussion,numPercussion,null);			
				createOptionsSelect(namePercussion,numPercussion);
				createElementsDraggable(namePercussion,++numPercussion);
				break;
			case nameSide_Drum+numSide_Drum:   
				createTableInput(nameSide_Drum,numSide_Drum,null);			
				createOptionsSelect(nameSide_Drum,numSide_Drum);
				createElementsDraggable(nameSide_Drum,++numSide_Drum);
				break;	
		}
	}
	
	//--------------------------------------------------------------
	
	function createElementsDraggable(name,num){
		var imagen = document.createElement("img"); 
		imagen.setAttribute("src", "/yii/Eafit-PI1-2015-1-Rider-/themes/classic/images/"+name+".png");
		imagen.setAttribute("class","img-responsive portfolio-item");
		var auxDiv =document.createElement("div");
		auxDiv.setAttribute("id", name+num);
		auxDiv.setAttribute("class","ui-draggable");
		auxDiv.setAttribute("name",name+".png");
		auxDiv.appendChild(imagen);               	
		$(auxDiv).draggable();             
		var div = document.getElementById(name+".png");
		auxDiv.style.position="absolute";               
		auxDiv.style.left="15px";              
		auxDiv.style.top="0px";
		auxDiv.style.zIndex="0";               
		div.appendChild(auxDiv); 
	}
	
	function updateElementsDraggrable(nameDiv){
		
		var divTube = document.getElementById(nameDiv);
		var nameInstrument = getNameDivInstrument(nameDiv);
		for (i=0; div=divTube.getElementsByTagName('div')[i]; i++) {	
			div.setAttribute("id",nameInstrument+i);
			div.setAttribute("title", nameInstrument+" "+i);
			getVarNumInstrument(i,nameInstrument);
		}
		updateTableInput(nameInstrument);
		updateOptionsSelect(nameInstrument);
	}
	
	
	//----------------------------------------------------
	function createTableInput(name,num,strgMicro){
		++numIdTable;
		var divDrag = document.getElementById(name+num);
		divDrag.setAttribute("title", name+" "+numIdTable);
		var row = document.createElement("tr");
		row.setAttribute("id","."+name+num);
		row.setAttribute("name",name);
		var fieldNumber = document.createElement("td");
		var fieldChannel = document.createElement("td");
		var fieldMicrophone = document.createElement("td");
		var textNumber = document.createTextNode(numIdTable);
		var textChannel = document.createTextNode(name);
		if(strgMicro==null){
			var textMicrophone = document.createTextNode("Default");
		}else{
			var textMicrophone = document.createTextNode(strgMicro);
		}
		fieldNumber.appendChild(textNumber);
		fieldChannel.appendChild(textChannel);
		fieldMicrophone.appendChild(textMicrophone);
		row.appendChild(fieldNumber);
		row.appendChild(fieldChannel);
		row.appendChild(fieldMicrophone);
		var table = document.getElementById("tableChannel");
		table.appendChild(row);
	}
	
	
	function updateTableInput(nameIdTrTable){
		
		var table = document.getElementById('tableChannel');
		var aux=1;
		for (i=0; trId=table.getElementsByTagName('tr')[i]; i++) {	
			if(trId.getAttribute('name')==nameIdTrTable){
				trId.setAttribute("id", "."+nameIdTrTable+aux);
				aux++;
			}
	    }
		
		for (i=0; trT=table.getElementsByTagName('tr')[i]; i++) {
			var field = trT.getElementsByTagName('td')[0];
		    if(field!=undefined){
				field.innerHTML=i;
			}
	    }
		
		for (i=1; trId=table.getElementsByTagName('tr')[i]; i++) {
			var idDrag = trId.getAttribute('id');
			idDrag = idDrag.substring(1,idDrag.length);
			var elem = document.getElementById(idDrag);
			elem.setAttribute("title", trId.getAttribute('name')+" "+i);
	    }
		
	}
	
	
	//-----------------------------------------------------------
	function createOptionsSelect(name,num){
		var instOption = document.createElement("option");
		instOption.setAttribute("id","."+name+num);
		instOption.setAttribute("value",name);
		var textNum_Name = document.createTextNode(name+" "+numIdTable);
		var select = document.getElementById("instrumentStage");
		instOption.appendChild(textNum_Name);
		select.appendChild(instOption);
	}
	
	function updateOptionsSelect(nameIdOption){
		var select = document.getElementById("instrumentStage");
		var aux=1;
		for (i=1; opt=select.getElementsByTagName('option')[i]; i++) {
		    if(opt.getAttribute('value')==nameIdOption){
				opt.setAttribute("id","."+nameIdOption+aux);
				opt=select.getElementsByTagName('option')[i]
				
				aux++;
			}	
		}
		
		var select = document.getElementById("instrumentStage");
		for (i=1; opt=select.getElementsByTagName('option')[i]; i++) {
				var selectOption = select.options[i].text;
				var newSelectOpt="";
				for(j=0;j<selectOption.length;j++){
				   if(selectOption.charAt(j)!=' '){
					   newSelectOpt = newSelectOpt+selectOption.charAt(j);
				   }else{
					   opt.innerHTML=newSelectOpt+" "+i;
					   break;
				   }	
				}
				
	    }
	}
	
	
	
	//-----------------------------------------------------------
	function getNameDivInstrument(name){
		
		var newName="";
		for(i=0;i<name.length;i++){
			if(name.charAt(i)!='.'){
				newName= newName+name.charAt(i);
			}else{
				break;
			}
		}
		
		return newName;
	}
	
	
	//------------------------------------------------------------
	function getVarNumInstrument(num,nameIns){
		switch(nameIns){
			case "tube":
				numTube=num;
				break;
			case "trumpet":
				numTrumpet=num;
				break;	
			case "trambone":
				numTrambone=num;
				break;	
			case "saxophone":
				numSaxophone=num;
				break;	
			case "clarnet":
				numClarnet=num;
				break;	
			case "banjo":
				numBanjo=num;
				break;	
			case "guitar":
				numGuitar=num;
				break;	
			case "lyre":
				numLyre=num;
				break;	
			case "piano":
				numPiano=num;
				break;	
			case "violin":
				numViolin=num;
				break;	
			case "bass_drum":
				numBass_Drum=num;
				break;	
			case "cymbals":
				numCymbals=num;
				break;	
			case "rattle":
				numRattle=num;
				break;	
			case "triangle":
				numTriangle=num;
				break;	
			case "xylophone":
				numXylophone=num;
				break;	
			case "castanets":
				numCastanets=num;
				break;	
			case "drums":
				numDrums=num;
				break;	
			case "kettledrums":
				numKettledrums=num;
				break;	
			case "percussion":
				numPercussion=num;
				break;	
			case "side_drum":
				numSide_Drum=num;
				break;	
			
		}
	}
		
		


//-------------functions, save information select------------------		
	
	function save(){
		var instrumentStageSelect= document.getElementById('instrumentStage');
		if(instrumentStageSelect.selectedIndex<1)
			window.alert('No hay opción seleccionada');
		else{
			var selectOp=instrumentStageSelect.options[instrumentStageSelect.selectedIndex].id;		
			var textMicro = document.getElementById("txtMicrophone").value;
			var table = document.getElementById('tableChannel');
			for (i=0; trT=table.getElementsByTagName('tr')[i]; i++) {
			   if (trT.getAttribute('id')==selectOp){
				   editarTd(trT,i,textMicro);
			   }
			}
		}
	}

	function editarTd(trT,i,text){
		var field = trT.getElementsByTagName('td')[2];
		field.innerHTML=text;
	}

//-------------functions, Restore information------------------		
	function getValues(){
		var str="";
		for(i=0; i<=stringBD.length;i++){
			if(stringBD.charAt(i)!='~' && stringBD.charAt(i)!='¬'){
				str=str+stringBD.charAt(i);
			}else{
				stringBD = stringBD.substring(i+1,stringBD.length);
				break;
			}
		}
		return str;	
	}





	function restoreInformationBD(result){
		
		stringBD = result;
		var cont=0;
		for(i=0; i<=result.length;i++){
			if(result.charAt(i)=='¬'){
				cont++;
			}
		}
		var elements= new Array();
		for(k=0; k<cont;k++){
			var strName= getValues();
		    var strMicro=getValues();
		    var strPosLeft=getValues();
		    var strPosTop=getValues();		
			console.log(strName+" "+strMicro+" "+strPosLeft+" "+strPosTop);
			getNameAndCreate(strName, strMicro, strPosLeft, strPosTop,0)
			elements.push(strName);
		}
		
		for(i=0; i<elements.length;i++){
			for(j=0; j<elements.length;j++){
                if(i!=j){
					if(elements[i]==elements[j]){
						elements.splice(j, 1);
						--j;
					}		
				}				
			}
		}
		
		for(i=0; i<elements.length;i++){
			getNameAndCreate(elements[i], " ", 0, 0,1)
		}
		
		
	}
	
		
	function getNameAndCreate(nameIns, strMicro, strPosLeft, strPosTop,control){
		
			switch(nameIns){
			case "tube":
				if(control==0){
					if(!stateTube){
						deleteElementIntoDiv(nameTube,numTube);
						createElement(nameTube,numTube,strPosLeft,strPosTop);
						createTableInput(nameTube,numTube,strMicro);
						createOptionsSelect(nameTube,numTube++);
						stateTube=true;
					}else{
						createElement(nameTube,numTube,strPosLeft,strPosTop);		
						createTableInput(nameTube,numTube,strMicro);
						createOptionsSelect(nameTube,numTube++);
					}	
				}else{
					createElementsDraggable(nameTube,numTube);
				}
				break;
			case "trumpet":
				if(control==0){
					if(!stateTrumpet){
						deleteElementIntoDiv(nameTrumpet,numTrumpet);
						createElement(nameTrumpet,numTrumpet,strPosLeft,strPosTop);
						createTableInput(nameTrumpet,numTrumpet,strMicro);
						createOptionsSelect(nameTrumpet,numTrumpet++);
						stateTrumpet=true;
					}else{
						createElement(nameTrumpet,numTrumpet,strPosLeft,strPosTop);		
						createTableInput(nameTrumpet,numTrumpet,strMicro);
						createOptionsSelect(nameTrumpet,numTrumpet++);
					}	
										
				}else{
					createElementsDraggable(nameTrumpet,numTrumpet);
				}
				break;	
				
			}
	}
	
	
	function deleteElementIntoDiv(name, num){
		var elem = document.getElementById(name+num);
			elem.remove();
	}
	
	
	function createElement(name,num,left,top){
		
		var imagen = document.createElement("img"); 
		imagen.setAttribute("src", "/yii/Eafit-PI1-2015-1-Rider-/themes/classic/images/"+name+".png");
		imagen.setAttribute("class","img-responsive portfolio-item");
		var auxDiv =document.createElement("div");
		auxDiv.setAttribute("id", name+num);
		auxDiv.setAttribute("class","ui-draggable");
		auxDiv.setAttribute("name",name+".png");
		auxDiv.appendChild(imagen);               	
		$(auxDiv).draggable();             
		var div = document.getElementById(name+".png");
		auxDiv.style.position="absolute";               
		auxDiv.style.left=left;              
		auxDiv.style.top=top;
		auxDiv.style.zIndex="0";               
		div.appendChild(auxDiv); 
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	