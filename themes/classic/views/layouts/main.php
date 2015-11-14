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

    <!--Style to Tabs-->
    <link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tabs/tabs.css" rel="Stylesheet" id="linkestilo">   

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
    </style>  

</head>
    <body style="cursor: auto;">
        <h1></h1>
        <?php
            $visible= Yii::app()->user->isGuest;
            if($visible){
                $visibility = "visibility: hidden";
            }else{
                $visibility = "visibility: visible";
            }
        ?>
        <div class="wizard" >
            <div id="tabs-container">
             <div  class="wizard-inner">            
                <div class="connecting-line"></div>
                <ul class="tabs-menu" role="tablist">
                    <li role="presentation" class="current" id="ini" value="Page1" style="<?php echo $visibility; ?>">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <?php echo CHtml::link( Yii::app()->user->name ,array('/site/rider')); ?>
                        </a>
                    </li>

                    <li role="presentation" class="" id="stage" value="Page2" style="<?php echo $visibility; ?>"> 
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>                           
                        </a>
                        <?php echo CHtml::link('1: Stage Plot',array('/stage/index')); ?>
                    </li>


                    <li role="presentation" class=""  id="label" value="Page3" style="<?php echo $visibility; ?>">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 1" class="Page1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-text-background"></i>
                            </span>
                        </a>
                        <?php echo CHtml::link('2: Rider Content',array('label')); ?>
                    </li>

                    <li role="presentation" class="" id="export" value="Page4" style="<?php echo $visibility; ?>">
                        <a href="#complete" data-toggle="tab" aria-controls="step4" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>                            
                        </a>
                        <?php echo CHtml::link('3: Export Rider',array('/label/index')); ?>
                    </li>
                </ul>
             
       </div>
    </body>

    </div>
        <?php echo $content;?>
    </div>
</html>