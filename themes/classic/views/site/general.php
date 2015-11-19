<div class="row" style="">
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
   <div class="col-lg-4"><?php echo CHtml::link( '<div class="btn btn-custom">Save and Continue</div>',array('stage')); ?></div>
</div>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                   <form method="post" action="">                  
                        <div class="form-group">                                    
                            <input value="" type="text" class="form-control" name="txtName" id="txtName" placeholder="Rider's Name">
                        </div>
                        <div class="form-group">                                    
                            <input value="" type="text" class="form-control" name="txtProposal" id="txtProposal" placeholder="Rider's Proposal">
                        </div>
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>