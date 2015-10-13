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
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/grayscale.css" rel="stylesheet">

    <!-- jquereiu-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/importante.js" type="text/javascript"></script>
    
    <!-- modal -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/form-elements.css">
     


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
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background:#000;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Technical Rider
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">About</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="">Contact</a>
                    </li>
                    <li>
                        <a  class="page-scroll  launch-modal" href="#" data-modal-id="modal-register">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll  launch-modal" href="#" data-modal-id="modal-login">Log In</a>
                    </li>        
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="intro" background="<?php echo Yii::app()->theme->baseUrl; ?>/img/intro-bg.jpg">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Technical Rider</h1>                       
                    </div>
                </div>
            </div>
        </div>
    </header>

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
    <div class="container" style="width:98%; background: #fff">
        <?php echo $content; ?>
    </div>
    </body>
</html>