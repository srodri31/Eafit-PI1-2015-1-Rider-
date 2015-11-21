<script type="text/javascript">
    function saveBD(){
        var url = window.location.search;
        var id = url.substring(11);
        var idJSON = JSON.stringify(id);
        var nameRider = document.getElementById("txtName").value;
        var nRJSON = JSON.stringify(nameRider);
        var purpose = document.getElementById("txtProposal").value;
        var purJSON = JSON.stringify(purpose);
        $.ajax({ 
                data: {"id": idJSON, "nameR": nRJSON, "purpose": purJSON}, 
                type: "POST",
                url: <?php echo "'".CController::createUrl('RiderName')."'";?>,
         });
    }
</script>

<div class="row" style="">

<?php 
    $url=$_SERVER['REQUEST_URI'];
    $id = substr($url,52);
    $cond = new CDbCriteria();
    $cond->condition = "id_rider = ".$id;
    $rider = CActiveRecord::model("Rider")->findAll($cond);
    foreach ($rider as $data):
        $Rname = $data->name_rider;
        $purpose = $data->purpouse_rider;        
    endforeach 
    
?>
        <section>
        <div class="wizard" style="" >
            <div class="wizard-inner" style="">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                
                    <li role="presentation" class="active current" id="ini" value="Page1">                            
                        <a data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                            <span class="round-tab">
                               <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>


                    <li role="presentation" class="disabled" id="stage" value="Page2">                            
                        <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                            <span class="round-tab" class="disabled">
                                <i class="glyphicon glyphicon-pencil" ></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled" id="label" value="Page3">                        
                        <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>  
                        </a>                          
                    </li>

                    <li role="presentation" class="disabled" id="export" value="Page4"> 
                        <a  data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="false">                           
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>                            
                    </li>                         
                </ul>
            </div>      
         </div>
    </section>
</div>

<div class="row">
  <div class="col-lg-8">  
    <h3><div class="btn btn-custom">Step 1:</div> General Information</h3>                                 
  </div>
   <div class="col-lg-4"><?php echo CHtml::link( '<div class="btn btn-custom" onclick="saveBD()">Save and Continue</div>', array('CallStage', 'id'=>$id) ); ?></div>
</div>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                   <form method="post" action="">                  
                        <div class="form-group">                                    
                            <input value="<?php echo $Rname;?>" type="text" class="form-control" name="txtName" id="txtName" placeholder="Rider's Name">
                        </div>
                        <div class="form-group">                                    
                            <textArea rows=7 class="form-control" name="txtProposal" id="txtProposal" placeholder="Rider's Proposal"><?php echo $purpose;?></textArea>
                        </div>
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>