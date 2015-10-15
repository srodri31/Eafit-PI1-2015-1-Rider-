
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	color: black;
}
th, td {
    padding: 5px;
    text-align: left;
	color: black;
}
table#bordeSuperior tr:nth-child(even) {
    background-color: #eee;
}
table#bordeSuperior tr:nth-child(odd) {
   background-color:#fff;
}
table#bordeSuperior th	{
    background-color: black;
    color: white;
}

</style>

<h1>Events</h1>
<?php echo CHtml::link("Create",array("create"));?> 
 
<table id="bordeSuperior">
  <tr>
    <th>Id Event</th>
    <th>Name Event</th>		
    <th>Date Start Event</th>
	<th>Date End Event</th>
	<th>Time Start Event</th>
	<th>Time Endevent</th>
	<th>Desc Event</th>
	<th>Genre Event</th>
	<th>Image Event</th>
	<th>Id Company</th>
  </tr>
  <?php foreach($tevent as $data):?>
  <tr>
    <td><?php echo $data->id_event?><br>
	<?php echo CHtml::link("Update",array('update','id'=>$data->id_event));?> | 
	<?php echo CHtml::link("Delete",array('delete','id'=>$data->id_event),array("confirm"=>"Esta seguro"));?></td>
    <td><?php echo $data->name_event?></td>		
    <td><?php echo $data->dateStart_event?></td>
	<td><?php echo $data->dateEnd_event?></td>
	<td><?php echo $data->timeStart_event?></td>
	<td><?php echo $data->timeEndevent?></td>
	<td><?php echo $data->desc_event?> </td>
	<td><?php echo $data->gender_event?></td>
	<td><?php echo $data->image_event?></td>
	<td><?php echo $data->id_company?></td>
  </tr>
 <?php endforeach;?>
 
</table>
<div style="padding:100px";></div>
