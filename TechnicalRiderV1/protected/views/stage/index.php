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
			            <input type="text"  required="required"  class="form-control" name="txt_name" id="txt_name" placeholder="Rider's Name">
			        </div>  

			        <div id="instruments" class="form-group"></div>            
			    
			    </form>  
        	 </div>

            <div class="col-md-6">
                <div id="soltable" class="ui-droppable">
                </div>                                       
            </div>

            <div class="col-md-3">
                
            <legend> Categorias desde bd</legend>
                <?php foreach ($categories as $data):?>
	                <div id="<?php echo $data->name_classification; ?>" class="col-sm-3 col-xs-6">
	                    <a href="#">
	                        <?php echo $data->name_classification; ?>
	                    </a>
	                </div>
                <?php endforeach ?><br><br><br>


            <legend> Instrumentos </legend>
            <div align="center">traido desde bd:: son  de la categoria 2 (Ver StageController)</div><br>
                <?php foreach ($model as $data):?>
	                <div id="<?php echo $data->name_instrument; ?>" class="col-sm-3 col-xs-6">
	                    <a href="#">
	                        <div id="<?php echo $data->id_instrument; ?>" class="tarea ui-draggable" name="<?php echo $data->name_instrument; ?>" >
	                            <img  class="img-responsive portfolio-item" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name_instrument; ?>" alt="">
	                        </div>
	                    </a>
	                </div>
                <?php endforeach ?>

            </div>
        </div>


    <div id="container" class="container">
    	<div id="row" class="row">
    		<div id="col" class="col-md-12" >
	    		<label id="legend"></label>	
	    		<table class="table" id="channels">
	    		</table>		
    		</div>
    	</div>
    </div>

      
   <div class="container" id="tableContainer">
		<table class="table">
		    <thead>
		      <tr>
		      	<th id="number"></th>
		        <th id="channel"></th>
		        <th id="microphone"></th>
		      </tr>
		    </thead>
		    <tbody id="tableBody">
		      	   
		    </tbody>
		</table>   
    </div>

   				 