<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0094)http://www.desarrolloweb.com/articulos/ejemplos/jquery/ui/interactions/probando-droppable.html -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="And" >

    <title>Rider</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/grayscale.css" rel="stylesheet">

    <!-- jquereiu-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
    
   
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.css" rel="Stylesheet" id="linkestilo">   
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>

    <script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/stageDevelopment.js" type="text/javascript"></script>
    
    <!--Style to Forms-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/formsStyle.css" rel="Stylesheet" id="linkestilo">   
    
    <!--Style to Tables-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tablesStyle.css" rel="Stylesheet" id="linkestilo">


   <!-- Main Tabs -->   
   <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css">
   <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.1.js"></script>-->
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min(2).js"></script>

<script type="text/javascript">
            $(document).ready(function () {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();
            
            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                var $target = $(e.target);
            
                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>

    <script type="text/javascript">
            $(document).ready(function () {

                $("#ini").click(function(event){
                    ChangeUrl('Page1', 'rider');
                    location.reload();
                    document.getElementById("ini").addClass("current");
                    $(this).parent.addClass("current");
                 });

                $("#stage").click(function () {
                    ChangeUrl('Page2', 'stage');
                    location.reload();
                    document.getElementById("stage").addClass("current");
                    $(this).parent.addClass("current");
                });

                $("#label").click(function () {
                    ChangeUrl('Page3', 'label');
                    location.reload();
                    document.getElementById("label").addClass("current");
                    $(this).parent.addClass("current");
                });

                $("#export").click(function () {
                    ChangeUrl('Page4', 'pdf');
                    location.reload();
                    document.getElementById("label").addClass("current");
                    $(this).parent.addClass("current");
                });

                 $(".tabs-menu a").click(function(event) {
                    event.preventDefault();
                   // $(this).parent().addClass("current");
                   // $(this).parent().siblings().removeClass("current");
                    var tab = $(this).attr("href");
                    $(".tab-content").not(tab).css("display", "none");
                    $(tab).fadeIn();
                });  

            });   

            function ChangeUrl(page, url) {
                if (typeof (history.pushState) != "undefined") {
                    var obj = { Page: page, Url: url };
                    history.pushState(obj, obj.Page, obj.Url);
                } else {
                    alert("Browser does not support HTML5.");
                }
            }
                           
    </script>  

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

        .wizard {
            margin: 20px auto;
            background: #fff;
        }

            .wizard .nav-tabs {
                position: relative;
                margin: 40px auto;
                margin-bottom: 0;
            }

            .wizard > div.wizard-inner {
                position: relative;
            }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #e0e0e0;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }
        span.round-tab i{
            color:#555555;
        }
        .wizard li.active span.round-tab {
            background: #fff;
            border: 2px solid #5bc0de;
            
        }
        .wizard li.active span.round-tab i{
            color: #5bc0de;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid #333;
        }

        .wizard .nav-tabs > li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;            
            transition: 0.1s ease-in-out;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
        }

        .wizard .nav-tabs > li a {
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

            .wizard .nav-tabs > li a:hover {
                background: transparent;
            }

        .wizard .tab-pane {
            position: relative;
            padding-top: 50px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media( max-width : 585px ) {

            .wizard {
                width: 90%;
                height: auto !important;
            }

            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard .nav-tabs > li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
        .bottomMenu{
            height: 100px;
         }

    </style>  

</head>
<body  style="cursor: auto; " >
    <?php
        $visible= Yii::app()->user->isGuest;
        if($visible){
            $visibility = "visibility: hidden";
        }else{
            $visibility = "visibility: visible";
        }
    ?>

<!-- Fixed navbar -->
    <div class="navbar navbar-default  navbar-fixed-bottom" role="navigation" style="<?php echo $visibility; ?>">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
               <?php echo Yii::app()->user->name; ?>               
          </a>
        </div>
        <div class="collapse navbar-collapse">          
        <?php $this->widget('zii.widgets.CMenu',array(
            'htmlOptions' =>array("class" => "nav navbar-nav navbar-right"),
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/rider')),    
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>            
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">        
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    <div class="row" style="margin-bottom:80px; margin-top:40px;">
        <?php echo $content;?>
    </div>
</div>
</body>
</html>