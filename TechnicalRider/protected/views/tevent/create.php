<style>
th, td {
    padding: 3px;
    text-align: left;	
	color: black;
}

</style>
<h1 style="color:black";>Create Event</h1>
<?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
	 <table>
	   <tr>
         <th>Name Event</th>
		 <th>Date Start Event</th> 
		 <th>Date End Event</th>
		 <th>Time Start Event</th>
	   </tr>
	   <tr>
         <th><?php echo $form->textField($model,"name_event");?>
	         <?php echo $form->error($model,"name_event");?>
	     </th>
         <th><?php echo $form->textField($model,"dateStart_event");?>
	         <?php echo $form->error($model,"dateStart_event");?>
	     </th>
	     <th><?php echo $form->textField($model,"dateEnd_event");?>
	         <?php echo $form->error($model,"dateEnd_event");?>
	     </th>
		 <th><?php echo $form->textField($model,"timeStart_event");?>
	         <?php echo $form->error($model,"timeStart_event");?>
	     </th>
	   </tr>
	   <tr>
	     <th>Time Endevent</th>
	     <th>Desc Event</th>
	     <th>Genre Event</th>
	     <th>Image Event</th>
	   </tr>
	   <tr>
         <th><?php echo $form->textField($model,"timeEndevent");?>
	         <?php echo $form->error($model,"timeEndevent");?>
	     </th>
         <th><?php echo $form->textField($model,"desc_event");?>
	         <?php echo $form->error($model,"desc_event");?>
	     </th>
	     <th><?php echo $form->textField($model,"gender_event");?>
	         <?php echo $form->error($model,"gender_event");?>
	     </th>
		 <th><?php echo $form->textField($model,"image_event");?>
	         <?php echo $form->error($model,"image_event");?>
	     </th>
	   </tr>
	   <tr>
	     <th>Id Company</th>
	   </tr>
	   <tr>
         <th><?php echo $form->textField($model,"id_company");?>
	         <?php echo $form->error($model,"id_company");?>
	     </th>
		 
	   </tr>
	   
     </table>		  
	   
	   <br>
	   <br>
	   <?php echo CHtml:: submitButton("Create",array("class"=>"btn btn-primary btn-large"));?>
	   <?php echo CHtml::link("Go Back",array("index"));?> 
	   <?php $this->endWidget();?>
	   
	   <div style="padding:100px";></div>