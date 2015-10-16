<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0094)http://www.desarrolloweb.com/articulos/ejemplos/jquery/ui/interactions/probando-droppable.html -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="And" >

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/portfolio-item.css" rel="stylesheet">

    <!-- jquereiu-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/importante.js" type="text/javascript"></script>
   
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>

    <style type="text/css">
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

    
    </style>    

    <script type="text/javascript">
        $(document).ready(function() {
  $(".tabs a").html5jTabs();
});
    </script>
</head>
<body style="cursor: auto;"> 

    <div class="container">        
      <?php echo $content; ?>
    </div>   

<!-- Footer -->
        <footer class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo CHtml::encode($this->pageTitle); ?> 2015</p>
                 </div>
            </div>           
        </footer> 
<!-- Footer --> 
    </body>
</html>