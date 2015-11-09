<?php $contador=count($model); if ($model !== null):?>
<html>
<head>
<style>
	 body {font-family: sans-serif;
	 	font-size: 10pt;
	 }
	 p { margin: 0pt;
	 }
	 td { vertical-align: top; }
	 .items td {
		 border-left: 0.1mm solid #000000;
		 border-right: 0.1mm solid #000000;
	 }
	 table thead td { background-color: #EEEEEE;
		 text-align: center;
		 border: 0.1mm solid #000000;
	 }
	 .items td.blanktotal {
		 background-color: #FFFFFF;
		 border: 0mm none #000000;
		 border-top: 0.1mm solid #000000;
	 }
	 .items td.totals {
		 text-align: right;
		 border: 0.1mm solid #000000;
	 }
	 .col-lg-4{
	 	width: 40%;
	 	text-align: justify;
	 	margin-bottom: 15px;
	 }

	 .stagePlot{
	 	background: whitesmoke;
	 	height: 350px;
	 	width: 100%;
	 }

	 .col{
	 	text-align: justify;
	 }
</style>

<!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 
<!--mpdf
 <htmlpageheader name="myheader">
 <table width="100%"><tr>
 <td width="50%" style=""><span style="font-weight: bold; font-size: 14pt;">Exos Band</span><br />
 www.technicalRider.com<br /></td>
 <td width="50%" style="text-align: right;"><b>Exos band Logotype</b></td>
 </tr></table>
 </htmlpageheader>
 
<htmlpagefooter name="myfooter">
 <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
 Página {PAGENO} de {nb}
 </div>
 </htmlpagefooter>
 
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
 <sethtmlpagefooter name="myfooter" value="on" />
 mpdf-->



<div class="col-lg-4">
  <h3>Group Information</h3>
  	If possible we would appreciate to have all amplifiers and dimmers
	integrated in this place.
	You can replace some of them with empty cases. Tables are not
	possible. The whole place should look like a real operating place.
	We do not bring any amplifiers or cases! 
</div>

<div class="col-lg-4">
	<b>Staff</b>
	<ul>
		<li>Linda G</li>
		<li>Santiago R</li>
		<li>Andres A</li>
	</ul>
</div>

<!--STAGE PLOT-->
<div class="col-lg-4"><h3>Stage Plot</h3></div>
<div class="stagePlot">	
</div>
<div style="text-align: right"><b>Fecha: </b><?php echo date("d/m/Y"); ?> </div>
<br><br><br><br><br><br>


<!--CHANNEL LIST-->
<div class="col-lg-4"><h3>Channel List</h3></div>

 <table  class="items table" width="100%" style="font-size: 9pt; border-collapse: collapse; width:100%; " cellpadding="5">
 <thead>
 <tr>
 <td width="25%">Chnnel</td>
 <td width="25%">Instrument</td>
 <td width="25%">MIC/DI</td>
 <td width="25%">Notes</td>
 </tr>
 </thead>
 <tbody>
 <!-- ITEMS -->
 <?php foreach($model as $row): ?>
	 <tr>
		 <td align="center">
		 	<?php echo $row->id_label; ?>
		 </td>
		 <td align="center">
		 	<?php echo $row->name_label?>
		 </td>
		 <td align="center">
		 	<?php echo $row->desc_label; ?>
		 </td>
		 <td align="center">
			 <?php echo $row->content_label; ?>
		 </td>
	 </tr>
 <?php endforeach; ?>
 <!-- FIN ITEMS -->
 <tr>
 <td class="blanktotal" colspan="8" rowspan="8"></td>
 </tr>
 </tbody>
 </table>
 <b>Total Resultados:</b> <?php echo $contador; ?>

<?php foreach($model as $row): ?>
	<div class="col">
		<h3><?php echo $row->name_label?></h3>
		<?php echo $row->desc_label; ?>
	</div>
 <?php endforeach; ?> 
 </body>
 </html>
<?php endif; ?>