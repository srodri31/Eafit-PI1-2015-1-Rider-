
<script>
	function optionsBD(){
		//deleteBaseData();
		//saveBD();
	}


	function deleteBaseData(){
		$.ajax({ 
			url: <?php echo "'".CController::createUrl('DeleteBD')."'";?>,
	 });
	}


function saveBD(){
	var table = document.getElementById('tableChannel');
	var cont=0;
	for (i=1; trT=table.getElementsByTagName('tr')[i];i++) {
		cont=i;
	}	
	var auxCont=1;
	while(auxCont<=cont){
		var trT=table.getElementsByTagName('tr')[auxCont];
		var idInstrumentTable = trT.id;
		idInstrumentTable = idInstrumentTable.substring(1,idInstrumentTable.length);
		var nameTable = trT.getElementsByTagName('td')[1].childNodes[0].nodeValue;
		var microphoneTable = trT.getElementsByTagName('td')[2].childNodes[0].nodeValue;
		
		var element = document.getElementById(idInstrumentTable).style;
		var positionleftImg = element.left;
		var positiontopImg = element.top;
		
	    var nameJSON = JSON.stringify(nameTable);
		var microphoneJSON = JSON.stringify(microphoneTable);
		var positionLeftJSON = JSON.stringify(positionleftImg);
		var positionTopJSON = JSON.stringify(positiontopImg);
		
		$.ajax({ 
		        data: {"name":nameJSON, "microphone":microphoneJSON,
						"posLeft":positionLeftJSON,
						"posTop":positionTopJSON},
				type: "POST",
                url: <?php echo "'".CController::createUrl('SaveInfoBd')."'";?>,
        }).done(function( result ) {    	
				 // $('#stage').text(result);
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
				console.log('Error '+XMLHttpRequest+" "+errorThrown);
        });	
		auxCont++;
	}    
}
</script>

<script>
	function getBD(){
		
		$.ajax({ 
		    url: <?php echo "'".CController::createUrl('GetInfoBd')."'";?>,
        }).done(function( result ) {    	
				//$('#stage').text(result);
				restore(result); 
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
				console.log(XMLHttpRequest+" "+" "+errorThrown);
        });	
		
	} 
	function restore(result){
		restoreInformationBD(result);
	}
	
</script>
		<br><br>
		<div class="row">
			<div class="col-lg-6">				
		            <h3><div class="btn btn-custom">Step 2:</div> Make your Stage Plot</h3>                                       
		    </div>
		    <div class="col-lg-6"></div>
		</div>
		<br><br>
        <!-- Row -->
        <div class="row">
        	 <div id="description" class="col-lg-3">        	 		                         
			    <form method="post" action="">                                
			        <div class="form-group">                                    
			            <input value="" type="text"   class="form-control" name="txt_name" id="txt_name" placeholder="Rider's Name">
			        </div>  
					<br>				
					<h5>Select Instrument</h5>
					<select class="form-control" id="instrumentStage" >
						<option value="">Select</option>
					</select>
					<br>
					<div>                                    
			            <input value="" type="text" class="form-control" name="txtMicrophone" id="txtMicrophone" placeholder="Microphone">
			        </div>
					<br>
					<div>                                    
			           <button type="button" class="btn btn-custom" onclick="save()">Save Instrument Information</button> 
			        </div>  
				</form>  
			 </div>

            <div class="col-md-6">
                <div id="soltable" class="ui-droppable"></div>                                       
            </div>

            <div class="col-md-3">     
            <legend> Instrumentos </legend>
            
                <?php foreach ($model as $data):?>
	                <div id="<?php echo $data->name_instrument; ?>" class="col-sm-3 col-xs-6">
	                   
	                        <div id="<?php echo $data->id_instrument; ?>0" >
	                            <img  class="img-responsive portfolio-item" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name_instrument; ?>" alt="">
	                        </div>
							<script>
								var imagen = document.createElement("img"); 
								imagen.setAttribute("src", "<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name_instrument; ?>");
								imagen.setAttribute("class","img-responsive portfolio-item");
								var auxDiv =document.createElement("div");
								auxDiv.setAttribute("id", "<?php echo $data->id_instrument; ?>"+1);
								auxDiv.setAttribute("class","ui-draggable");
								auxDiv.setAttribute("name","<?php echo $data->id_instrument; ?>"+".png");
								auxDiv.appendChild(imagen);               	
								$(auxDiv).draggable();             
								var div = document.getElementById("<?php echo $data->id_instrument; ?>"+".png");
								auxDiv.style.position="absolute";               
								auxDiv.style.left="15px";              
								auxDiv.style.top="0px";
								auxDiv.style.zIndex="0";               
								div.appendChild(auxDiv); 
							</script>
							
	                </div>
                <?php endforeach ?>

            </div>
        </div>
<br>
<div>   
	<button type="button" class="btn btn-custom" onclick="deleteBaseData()">Delete Register</button><br><br> 
	<button type="button" class="btn btn-custom" onclick="saveBD()">Save Input</button> 
	<button type="button" class="btn btn-custom" onclick="getBD()">Get Input</button> 
</div> 

<h2 style="font-weight:30px;">Input List</h2>
<div>
	<table  class="table table-striped table-bordered table-condensed" style="width:100%; text-align:center;" id="tableChannel">
		  <tr>
		    <th>Number</th>
		    <th>Input</th>
			<th>Microphone</th>
		  </tr>  
	</table>
</div>

