    <div class="row" style="">
            <section>
        <div class="wizard" style="" >
            <div class="wizard-inner" style="">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                
                    <li role="presentation" class="disabled" id="ini" value="Page1">                            
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

                    <li role="presentation" class="active current" id="export" value="Page4"> 
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

    <?php
        $url=$_SERVER['REQUEST_URI'];
        $id = substr($url,58);
    ?>
<div class="row">
  <div class="col-lg-8">  
    <h3><div class="btn btn-custom">Final Step:</div> Export Options</h3>                                 
  </div>
  <div class="col-lg-4">
    <?php echo CHtml::link( '<div class="btn btn-custom">Previous Step</div>',array('CallLabel', 'id'=>$id)); ?>
 </div>
</div>

<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <legend>Your Rider Have Been Created Succesfully</legend>

        Export Rider
        Correct and Item
    </div>

    <div class="col-lg-3"></div>
</div>