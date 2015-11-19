
<script>
var url = window.location.search;
var id = url.substring(11);

function deleteBaseData(){

 	var url = window.location.search;
		var id = url.substring(11);
		var idJSON = JSON.stringify(id);

		$.ajax({ 
		    data: {"id": idJSON},
		    type: "POST",
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
	var url = window.location.search;
	var id = url.substring(11);
	var idJSON = JSON.stringify(id);

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
						"posTop":positionTopJSON, "id": idJSON},
				type: "POST",
                url: <?php echo "'".CController::createUrl('SaveInfoBd')."'";?>,
        }).done(function( result ) {	
				// $('#stage').text(result);
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
				console.log('Error '+XMLHttpRequest+" "+errorThrown);
        });	
		auxCont++;

		$("#link").removeClass("hidden");

	}
}	

function getBD(){		
		//var id = document.getElementById("txt_name").value;

		var url = window.location.search;
		var id = url.substring(11);
		var idJSON = JSON.stringify(id);

		$.ajax({ 
		    data: {"id": idJSON},
		    type: "POST",
		    url: <?php echo "'".CController::createUrl('GetInfoBD')."'";?>,
        }).done(function( result ) {    	
				//$('#stage').text(result);
				console.log(result);
				restoreInformationBD(result); 
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest+" "+" "+errorThrown);
        });		
		
	}


</script>

<?php
	$url=$_SERVER['REQUEST_URI'];
	$id = substr($url,50);
	$cond = new CDbCriteria();
	$cond->condition = "id_rider = ".$id;
	$rider = CActiveRecord::model("Rider")->findAll($cond);
	foreach ($rider as $data):
		$Rname = $data->name_rider;
	endforeach 
?>

<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/modal.css" rel="stylesheet">
		
<div class="row" style="">
<section>
<div class="wizard" style="" >
    <div class="wizard-inner" style="">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">
        
            <li role="presentation" class="disabled" id="ini" value="Page1">                            
                <a data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                    <span class="round-tab">
                       <i class="glyphicon glyphicon-folder-open"></i>
                    </span>
                </a>
            </li>


            <li role="presentation" class="active current" id="stage" value="Page2">                            
                <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                    <span class="round-tab" class="disabled">
                        <i class="glyphicon glyphicon-pencil" ></i>
                    </span>
                </a>
            </li>

            <li role="presentation" class="disabled" id="label" value="Page3">                        
                <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-picture"></i>
                    </span>  
                </a>                          
            </li>

            <li role="presentation" class="disabled" id="export" value="Page4"> 
                <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">                           
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-ok"></i>
                    </span>
                </a>                            
            </li>                         
        </ul>
    </div>      
 </div>
</section>
</div>

	<div class="row">
	  <div class="col-lg-8">  
	    <h3><div class="btn btn-custom">Step 2:</div> Stage Plot</h3>                                 
	  </div>		   
	   <div class="col-lg-4">
	   		<?php echo CHtml::link( '<div class="btn btn-custom">Previous Step</div>',array('CallGeneral', 'id'=>$id)); ?>
	   		<?php echo CHtml::link( '<button type="button" class="btn btn-custom" onmouseenter="deleteBaseData()" onclick="saveBD()">Save and continue</button> ',array('CallLabel', 'id'=>$id)); ?>
	   </div>	   
	</div>
		
		
        <!-- Row -->
        <div class="row">
        	 <div id="description" class="col-lg-3">        	 		                         
			    <form method="post" action="">                                
			       
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
			           <button type="button" class="btn btn-custom" onclick="save()">Save Instrument Info</button> 
			        </div>  
				</form>  
			 </div>

            <div class="col-md-6">
                <div id="soltable" class="ui-droppable"></div>                                       
            </div>

            <div class="col-md-3"> 
            <input type="button" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Wind"> 
            <legend>  </legend>                    
                <?php foreach ($modelwind as $data):?>
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
                <legend>  </legend>


                <input type="button" id="btn-login" class="btn btn-custom btn-lg btn-block" value="String"> 
                <legend>  </legend>           
                <?php foreach ($modelstring as $data):?>
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
                <legend>  </legend>

                <input type="button" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Percussion">   
                <legend>  </legend>        
                <?php foreach ($modelpercussion as $data):?>
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
                <legend>  </legend>
                  
                <input type="button" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Keys-Keypads">    
                <legend>  </legend> 
                <?php foreach ($modelkey as $data):?>
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

<h2 style="font-weight:30px;">Input List</h2>
<div>
	<table  class="table table-striped table-bordered table-condensed" style="width:100%; text-align:center;" id="tableChannel">
		  <tr>
		    <th>Number</th>
		    <th>Input</th>
			<th>Microphone</th>
		  </tr>  
	</table>

<body onload="getBD()"></body>
</div>

