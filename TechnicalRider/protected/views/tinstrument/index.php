
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

<h1>Instruments</h1>
<?php echo CHtml::link("Create",array("create"));?> 
 
<table id="bordeSuperior">
  <tr>
    <th>Id Instrument</th>
    <th>Name Instrument</th>		
    <th>Desc Instrument</th>
  </tr>
  <?php foreach($tinstrument as $data):?>
  <tr>
    <td><?php echo $data->id_instrument?><br>
	<?php echo CHtml::link("Update",array('update','id'=>$data->id_instrument));?> | 
	<?php echo CHtml::link("Delete",array('delete','id'=>$data->id_instrument),array("confirm"=>"Esta seguro"));?></td>
    <td><?php echo $data->name_instrument?></td>		
    <td><?php echo $data->desc_instrument?> </td>
  </tr>
 <?php endforeach;?>
 
</table>
<div style="padding:100px";></div>
