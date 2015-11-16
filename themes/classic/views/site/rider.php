
<script>
	function getBD(){		
		//var id = document.getElementById("txt_name").value;

		var id = 1;
		var idJSON = JSON.stringify(id);

		$.ajax({ 
		    data: {"id": idJSON},
		    type: "POST",
		    url: <?php echo "'".CController::createUrl('CallStage')."'";?>,
        }).done(function( result ) {    	
				//$('#stage').text(result);
				console.log(result);
				//restoreInformationBD(result); 
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest+" "+" "+errorThrown);
        });	
		
	}
	
</script>

<html>
<br><br>
<div class="row">
	<div class="col-lg-6">	
    	<h3>My riders</h3>
    </div>
    <div class="col-lg-6"></div>
</div>

<section id="rider">
<div>
<?php 
if($model == null){
	?>
	<legend>Al parecer aún no tienes ningun rider :(</legend>
<?php
}
foreach ($model as $data):?>
	<legend>
		<?php echo CHtml::link( $data->name_rider ,array('CallStage', 'id'=>$data->id_rider)); ?> 
	</legend>
<?php endforeach ?>
<?php echo CHtml::link( 'Nuevo rider',array('NewStage')); ?> 
<div>
</section>
<?php echo CHtml::link('logout',array('logout')); ?>
</html>