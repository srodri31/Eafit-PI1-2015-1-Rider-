<?php $contador=count($model); if ($model !== null):?>
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

	(function (exports) {
    function urlsToAbsolute(nodeList) {
        if (!nodeList.length) {
            return [];
        }
        var attrName = 'href';
        if (nodeList[0].__proto__ === HTMLImageElement.prototype 
        || nodeList[0].__proto__ === HTMLScriptElement.prototype) {
            attrName = 'src';
        }
        nodeList = [].map.call(nodeList, function (el, i) {
            var attr = el.getAttribute(attrName);
            if (!attr) {
                return;
            }
            var absURL = /^(https?|data):/i.test(attr);
            if (absURL) {
                return el;
            } else {
                return el;
            }
        });
        return nodeList;
    }

    function screenshotPage() {
        urlsToAbsolute(document.images);
        urlsToAbsolute(document.querySelectorAll("link[rel='stylesheet']"));
        var screenshot = document.documentElement.cloneNode(true);
        var b = document.createElement('base');
        b.href = document.location.protocol + '//' + location.host;
        var head = screenshot.querySelector('head');
        head.insertBefore(b, head.firstChild);
        screenshot.style.pointerEvents = 'none';
        screenshot.style.overflow = 'hidden';
        screenshot.style.webkitUserSelect = 'none';
        screenshot.style.mozUserSelect = 'none';
        screenshot.style.msUserSelect = 'none';
        screenshot.style.oUserSelect = 'none';
        screenshot.style.userSelect = 'none';
        screenshot.dataset.scrollX = window.scrollX;
        screenshot.dataset.scrollY = window.scrollY;
        var script = document.createElement('script');
        script.textContent = '(' + addOnPageLoad_.toString() + ')();';
        screenshot.querySelector('body').appendChild(script);
        var blob = new Blob([screenshot.outerHTML], {
            type: 'text/html'
        });
        return blob;
    }

    function addOnPageLoad_() {
        window.addEventListener('DOMContentLoaded', function (e) {
            var scrollX = document.documentElement.dataset.scrollX || 0;
            var scrollY = document.documentElement.dataset.scrollY || 0;
            window.scrollTo(scrollX, scrollY);
        });
    }

    function generate() {
        window.URL = window.URL || window.webkitURL;
        window.open(window.URL.createObjectURL(screenshotPage()));
    }
    exports.screenshotPage = screenshotPage;
    exports.generate = generate;
})(window);
	
</script>
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
	 	position: relative;
	 	left: 660px;
	 }

	 .stagePlot{
	 	background: whitesmoke;
	 	height: 350px;
	 	width: 100%;
	 }

	 .col{
	 	text-align: justify;
	 }

	 #soltable{
            padding: 10px;
            background-color: whitesmoke;
            border: 1px solid #ccc;
            width: 500px;
            height: 400px;
            text-align: center;
        }
        .sueltaaqui{
            text-shadow: #0f0 1px 1px 5px;
            background-color: #fc9;
            font-weight: bold;
        }  

        .fix{

        	position: fixed;
			 overflow: auto;
			 right: 0;
			 bottom: 0mm;
			 width: 65mm;
			 border: 1px solid #880000;
			 background-color: #FFEEDD;
			 background-gradient: linear #dec7cd #fff0f2 0 1 0 0.5;
			 padding: 0.5em;
			 font-family:sans;
			 margin: 0;
			 rotate: 90;


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
<br><br><br><br>
	<div class="content" style="width:90%;">
        <div class="row">
			 <div class="co-lg-3"></div>
			 <div class="col-lg-3"></div>
             <div class="col-md-6" id="stagePlot" style="">
                <div id="soltable" class="ui-droppable">              
                	<?php foreach ($stage as $data): ?>
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->name; ?>.png" class="ubicated">
					<?php endforeach ?>
                </div>                                       
             </div>            
        </div>
    </div>
<br>



<button type="button" class="btn btn-custom" onclick="getBD()">Get Input</button> 
<a class="btn btn-success" href="javascript:void(0);" onclick="generate();">Generate Screenshot »</a>
 <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.jpg","PDF",array("title"=>"Exportar a PDF")),array("generarya")); ?>

<h2 style="font-weight:30px;">Input List</h2>
<div>
	<table  class="table table-striped table-bordered table-condensed" style="width:100%; text-align:center;" id="tableChannel">
		  <tr>
		    <th>Number</th>
		    <th>Input</th>
			<th>Microphone</th>
		  </tr>  
	</table>
</div>






























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
<br><br>
<!--STAGE PLOT-->
<div class="col-lg-4"><h3>Stage Plot</h3></div>
<div class="stagePlot">	
	
</div>
 

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
 <?php foreach($channels as $row): ?>
	 <tr>
		 <td align="center">
		 	:D
		 </td>
		 <td align="center">
		 	<?php echo $row->name?>
		 </td>
		 <td align="center">
		 	<?php echo $row->microphone; ?>
		 </td>
		 <td align="center">
			 :D
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


<?php foreach($stage as $data){
			echo $data->name;
			echo "~";
			echo $data->microphone;
			echo "~";
			echo $data->positionLeft;
			echo "~";
			echo $data->positionTop;
			echo "¬";
		}
?>
 </body>
 </html>
<?php endif; ?>