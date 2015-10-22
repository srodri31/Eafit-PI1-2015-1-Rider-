<script>

function save(){
	var instrumentStageSelect= document.getElementById('instrumentStage');
	if(instrumentStageSelect.selectedIndex<1)
		window.alert('No hay opción seleccionada');
	else{
        var selectOp=instrumentStageSelect.options[instrumentStageSelect.selectedIndex].value;		
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

</script>


 <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Stage 
                    <small>Plot</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
        	 <div id="description" class="col-md-3">        	 		                         
			    <form method="post" action="">                                
			        <div class="form-group">                                    
			            <input value="" type="text"   class="form-control" name="txt_name" id="txt_name" placeholder="Rider's Name">
			        </div>  
					<br>				
					<h5>Select Instrument</h5>
					<select class="form-control" id="instrumentStage" >
						<option value=""></option>
					</select>
					<br>
					<div>                                    
			            <input value="" type="text" class="form-control" name="txtMicrophone" id="txtMicrophone" placeholder="Microphone">
			        </div>
					<br>
					<div>                                    
			           <button type="button" class="btn btn-primary" onclick="save()">Save</button> 
			        </div>  
				</form>  
			 </div>

            <div class="col-md-6">
                <div id="soltable" class="ui-droppable">
                </div>                                       
            </div>

            <div class="col-md-3">
                
            <legend> Categorias desde bd</legend>
                <?php foreach ($categories as $data):?>
	                <div id="<?php echo $data->name_classification; ?>" class="col-sm-4 col-xs-6">
	                    <a href="#">
	                        <?php echo $data->name_classification; ?>
	                    </a>
	                </div>
                <?php endforeach ?><br><br><br>


            <legend> Instrumentos </legend>
            
                <?php foreach ($model as $data):?>
	                <div id="<?php echo $data->name_instrument; ?>" class="col-sm-3 col-xs-6">
	                   
	                        <div style="position:absolute; z-index: -1;"id="<?php echo $data->id_instrument; ?>0" name="<?php echo $data->name_instrument; ?>" >
	                            <img  class="img-responsive portfolio-item" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name_instrument; ?>" alt="">
	                        </div>
							<div id="<?php echo $data->id_instrument; ?>1" class="ui-draggable" name="<?php echo $data->name_instrument; ?>" >
	                            <img  class="img-responsive portfolio-item" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name_instrument; ?>" alt="">
	                        </div>
	                   
	                </div>
                <?php endforeach ?>

            </div>
        </div>


<!--  Tabla -->		

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>

<body>
<h2 style="font-weight:30px;">Input List</h2>
<div style="overflow:scroll; height:200px;">
<table style="width:100%" id="tableChannel">
  <tr>
    <th>Number</th>
    <th>Input</th>
	<th>Microphone</th>
  </tr>
  
</table>
</div>
</body>

	

   				 