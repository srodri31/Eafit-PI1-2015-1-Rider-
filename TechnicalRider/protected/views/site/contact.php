<!-- Portfolio Item Heading -->
        <div class="row" style="background:#fff; width:98%;">
            <div class="col-lg-12">
                <h1 class="page-header">Stage 
                    <small>Plot</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row" style="background:#fff; width:98%;">
            <div class="col-md-6">
                <div id="soltable" class="ui-droppable">
                </div>                                       
            </div>

            <div class="col-md-4">
                <div class="col-lg-12">
                    <h3 class="page-header">Instruments and Tools</h3>
                </div>

                <div id="divPiano" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="piano1" class="tarea ui-draggable" >
                            <img  class="img-responsive portfolio-item" src="img/piano3.png" alt="">
                        </div>
                    </a>
                </div>  

                <div id="divPianoMesa" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="pianoMesa1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/piano6.png" alt="">
                        </div>
                    </a>
                </div>  

                <div id="divGuitar" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="guitar1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/guitar5.png" alt="">
                        </div>
                    </a>
                </div>  

                <div id="divSax" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="sax1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/saxophone4.png" alt="">
                        </div>
                    </a>
                </div> 

                <div id="divTrompeta" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="trompeta1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/trumpet9.png" alt="">
                        </div>
                    </a>
                </div>

                <div id="divMicrofonoPortable" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="microfonoPortable1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/voice15.png" alt="">
                        </div>
                    </a>
                </div> 

                 <div id="divMicrofono" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="microfono1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/microphone37.png" alt="">
                        </div>
                    </a>
                </div> 

                <div id="divBateria" class="col-sm-3 col-xs-6">
                    <a href="#">
                        <div id="bateria1" class="tarea ui-draggable" >
                            <img class="img-responsive portfolio-item" src="img/drum24.png" alt="">
                        </div>
                    </a>
                </div> 
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