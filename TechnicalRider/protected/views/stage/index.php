<!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Stage 
                    <small>plot</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-6">
                <div id="soltable" class="ui-droppable">
                </div>                                       
            </div>

            <div class="col-md-4">
                <div class="col-lg-12">
                    <h3 class="page-header">Instruments and Tools</h3>
                </div>
                <?php foreach ($model as $data):?>
                     <div id="<?php echo $data->id_instrument; ?>" class="col-sm-3 col-xs-6" >
                        <a href="#">
                            <div id="<?php echo $data->id_instrument; ?>" class="tarea ui-draggable" >
                                <img  class="img-responsive portfolio-item" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/<?php echo $data->name_instrument; ?>" alt="">
                            </div>
                        </a>
                        <!--<div style="color:#000;"><?php echo $data->name_instrument; ?></div>-->
                    </div>
                    
                <?php endforeach ?> 
            </div>
        </div>


         <div class="container">
            <div class="row">
                <div id="rider" align="center" class="col-lg-12">                          
                            <form method="post" action="signin.jsp">                                
                                <div class="form-group">                                    
                                    <input type="text"  required="required"  class="form-control" name="txt_name" id="txt_name" placeholder="Rider's Name">
                                </div> 

                                <legend>Specifications</legend>  

                                <div id="instruments" class="form-group"></div>            
                            
                                <div  align="left" class="form-group">
                                     <input type="submit" class="btn btn-primary" name="Next_Step" id="ingreso" value="Establishing Information">                                          
                                </div>
                            </form>                 
                        </div>
                 <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo CHtml::encode($this->pageTitle); ?> 2015</p>
                 </div>
            </div>           
        </div>