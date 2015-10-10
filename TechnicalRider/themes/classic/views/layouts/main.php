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
    
    <!--accordion sources-->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/accordion/accordion.css" rel="stylesheet">

    <!--tabs Sources-->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tabs/tabs.css" rel="stylesheet">
    <script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tabs/tabs.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">                
                <div class="navbar-brand" style="text-transform: uppercase; " href="#">Technical Rider </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                
                <?php $this->widget('zii.widgets.CMenu',array(
                'htmlOptions' => array("class" => "nav navbar-nav"),
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Sign up', 'url'=>array('/site/signup'), 'visible'=>Yii::app()->user->isGuest)
                ),
             )); ?>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">                
              <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
              <?php endif?>
            </div>
        </div>
    </div>
    
      <?php echo $content; ?>
    
    </body>
</html>