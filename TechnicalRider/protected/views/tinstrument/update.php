<style>
th, td{
    padding: 3px;
    text-align: left;	
	color: black;
}

</style>
<h1 style="color:black";>Update #<?php echo $model->id_instrument?></h1>
<?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
		
     <table>
	   <tr>
          <th>Name Instrument</th>		
		  <th>Desc Instrument</th>
	   </tr>
	   <tr>
	     <th><?php echo $form->textField($model,"name_instrument");?>
	         <?php echo $form->error($model,"name_instrument");?>
	     </th>
         <th><?php echo $form->textField($model,"desc_instrument");?>
	         <?php echo $form->error($model,"desc_instrument");?>
	     </th>
	   </tr>
	   
     </table>		     
	   <br>
	   <br>
	   <?php echo CHtml:: submitButton("Update",array("class"=>"btn btn-primary btn-large"));?>
	   <?php echo CHtml::link("Go Back",array("index"));?> 
	   <?php $this->endWidget();?>
	   <div style="padding:100px";></div>