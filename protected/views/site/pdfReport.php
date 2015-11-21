
<html>
<head>

<script>
	function getBD(){
		console.log("Esta llegando PDFReport");		
		$.ajax({ 
		    url: <?php echo "'".CController::createUrl('GenerarPdf')."'";?>,
        }).done(function( result ) {		
				restoreInformationBD(result); 
		}).error(
			function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest+" "+" "+errorThrown);
        });		
	}	
</script>
<style>
	 #soltable{
        background-color: whitesmoke;
        border: 1px solid #ccc;        
        height: 400px;
        text-align: center;	
        padding-bottom:-60px;	
	    margin-left: 120px;
	    margin-bottom: 40px;
        width: 500px;        
     }

     h1{
     	color: #1fa67b;
	    font-size: 22px;
	    font-weight: bold;
	    padding-bottom: 40px;
	    margin-left: 50px;
     }
     h2{
     	font-size: 15px;
     	margin-left: 50px;
     }  
     .channelList{ 
     	margin-left: 110px;
     	margin-bottom: 40px;    	
     	width: 80%;
     }

     .info{ 
     	margin-left: 70px;
     	width: 80%;
      }

      .about{
      	margin-top:700px;
      	margin-left: 400px;
      	text-align: justify;
      	width: 40%; 
      	height: 30%;     	
      }

      .table{
      	text-align: center;
      	width: 90%;
      }

      td{       	
     	background-color: whitesmoke;
      	text-transform: capitalize;
      	margin: 15px;
      	width: 30%;
      }

      .title{
      	font-size: 18px;
      	font-weight: bold;
      	margin-bottom: 7px;
      	text-align: left;
      }

      .contentLabel{
      	margin-left: 20px;
      	margin-bottom: 13px;
      	text-align: justify;
      	width: 60%;        	
      }

      
</style>
 <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/grayscale.css" rel="stylesheet">

    <!-- jquereiu-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
    

    <script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/stageDevelopment.js" type="text/javascript"></script>
    
    <!--Style to Forms-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/formsStyle.css" rel="Stylesheet" id="linkestilo">   

    <!--Style to Tabs-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tabs/tabs.css" rel="Stylesheet" id="linkestilo">

</head>
<body> 
<?php
	 $url=$_SERVER['REQUEST_URI'];
	 $id = substr($url, 48);
	 $stage = Tstage_information::model()->findAllBySql('SELECT * FROM tstage_information WHERE idRider='.$id);		 		 
	 $labels = label::model()->findAllBySql('SELECT * FROM tlabel WHERE id_rider='.$id); 

?> 

	<div class="block0">
		<div class="about">			
			<?php foreach ($bandInfo as $data):?>
				<h2><?php echo $data->name_band; ?></h2>
				<?php echo $data->desc_band; ?><br><br>
				<div style="text-align:left;">
					<h2>Genre</h2>
					<?php echo $data->genre_band; ?><br><br>
					<h2>Contact</h2>
					<?php echo $data->page_band; ?><br>
					<?php echo $data->email_band; ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<div class="block1">	
		<h2>Stage Plot</h2>            
	    <div  id="soltable" class="ui-droppable">
	    	<?php foreach ($stage as $data): ?>
	    		<?php  
	    			   $y=150;
	    			   $x=585;
	    			   $strTop = substr($data->positionTop,0,-2);	    			   
	    			   $strLeft = substr($data->positionLeft,0,-2);	    			   	    			   
	    			   
	    			   
	    			   if($data->name=="tube"){ 
	    			   		$top = (int)$strTop+$y;
	    			   		$left = (int)$strLeft+$x;
	    			   	}if($data->name=="trumpet"){ 
	    			   		$top = (int)$strTop+$y;
	    			   		$left = (int)$strLeft+$x+60;
	    			   	}else if($data->name=="trambone"){ 
	    			   		$top = (int)$strTop+$y;
	    			   		$left = (int)$strLeft+$x+120;
	    			   	}else if($data->name=="saxophone"){ 
	    			   		$top = (int)$strTop+$y;
	    			   		$left = (int)$strLeft+$x+180;
	    			   	}
	    			    else if($data->name=="clarnet"){ 
	    			   		$top = (int)$strTop+$y+30;
	    			   		$left = (int)$strLeft+$x;
	    			   	}
	    			   	else if($data->name=="banjo"){ 
	    			   		$top = (int)$strTop+$y+130;
	    			   		$left = (int)$strLeft+$x;
	    			    }else if($data->name=="guitar"){ 
	    			    	$top = (int)$strTop+$y+130;
	    			   		$left = (int)$strLeft+$x+60;
	    			   	}
	    			    else if($data->name=="lyre"){ 
	    			    	$top = (int)$strTop+$y+130;
	    			   		$left = (int)$strLeft+$x+120;
	    			   	}	    			   
	    			    else if($data->name=="violin"){ 
	    			    	$top = (int)$strTop+$y+130;
	    			   		$left = (int)$strLeft+$x+180;
	    			   	}
	    			    else if($data->name=="bass_drum"){ 
	    			    	$top = (int)$strTop+$y+260;
	    			   		$left = (int)$strLeft+$x; 
	    			   	}
	    			    else if($data->name=="cymbals"){ 
	    			    	$top = (int)$strTop+$y+260;
	    			   		$left = (int)$strLeft+$x+60; 
	    			   	}
	    			    else if($data->name=="rattle"){ 
	    			    	$top = (int)$strTop+$y+260;
	    			   		$left = (int)$strLeft+$x+120; 
	    			   	}
	    			    else if($data->name=="triangle"){ 
	    			    	$top = (int)$strTop+$y+260;
	    			   		$left = (int)$strLeft+$x+180;
	    			   	}
	    			    else if($data->name=="xylophone"){ 
	    			    	$top = (int)$strTop+$y+290;
	    			   		$left = (int)$strLeft+$x;
	    			    }
	    			    else if($data->name=="castanets"){ 
	    			   		$top = (int)$strTop+$y+290;
	    			   		$left = (int)$strLeft+$x+60;
	    			   	}
	    			    else if($data->name=="drums"){ 
	    			   		$top = (int)$strTop+$y+290;
	    			   		$left = (int)$strLeft+$x+120;
	    			    }
	    			    else if($data->name=="kettledrums"){ 
	    			   		$top = (int)$strTop+$y+290;
	    			   		$left = (int)$strLeft+$x+180; 
	    			   	}
	    			    else if($data->name=="percussion"){
	    			    	$top = (int)$strTop+$y+320;
	    			   		$left = (int)$strLeft+$x; 
	    			   	}
	    			   	else if($data->name=="side_drum"){
	    			    	$top = (int)$strTop+$y+320;
	    			   		$left = (int)$strLeft+$x+60; 
	    			   	}
	    			    else if($data->name=="piano"){ 
	    			    	$top = (int)$strTop+$y+420;
	    			   		$left = (int)$strLeft+$x;
	    			    }
	    		?>               
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name; ?>.png" style="position:absolute; left: <?php echo $left;?>; top:<?php echo $top;?>;" >
			<?php endforeach ?>
	    </div> 
	</div>	
   
	<div class="block2">
	    <h2>Input List</h2>
	    <div class="channelList">    
	    	 <?php  $i = 0; ?>
	    	 <table class="table">   	
	    	 <tr style="font-weight:bold;">
	    	 	<td>Input</td>
	    	 	<td>Instrument</td>
	    	 	<td>Microphone</td>
	    	 </tr> 
				 <?php foreach ($stage as $data): ?> 						
					<tr>
						<td>
							<?php echo $i = $i+1;?> 	
						</td>
						<td>
							<?php echo $data->name;?> 	
						</td>
						<td>
							<?php echo $data->microphone;
							?> 	
						</td>
					</tr>		
				 <?php endforeach ?>
			 </table> 
	    </div>
	</div>
	 
	<div class="block3">
	    <h2>Specifications About Requierements</h2>
	    <div class="info">
			 <?php foreach ($labels as $data): ?>				 	
				 <div class="title">
				 	<?php echo $data->name_label;?>
				 </div>
				 <div class="contentLabel">
				 	<?php echo $data->desc_label;?>
				 </div>		
			 <?php endforeach ?> 
	    </div>
	</div>
 </body>
 </html>