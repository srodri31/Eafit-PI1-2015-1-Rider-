<div class="row" >
  <div class="col-lg-8"> 
    <?php foreach ($bandInfo as $data):?>    
        <h3><div class="btn btn-custom">Modify your Info</div> <?php echo $data->name_band;?></h3>    
    <?php endforeach ?>                           
  </div>
  <div class="col-lg-4"></div>
</div>

<?php foreach ($bandInfo as $data):?> 
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <div class="form">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'Band',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); ?>

                        <div class="form-group">
                            <?php echo $form->textField($model,'name_band',array("class"=>"form-control","placeholder"=>"band's name", "value"=>$data->name_band)); ?>
                            <?php echo $form->error($model,'name_band'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->passwordField($model,'password_band',array("class"=>"form-control","placeholder"=>"password")); ?>
                            <?php echo $form->error($model,'password_band'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->textField($model,'page_band',array("class"=>"form-control", "type"=>"url" ,"placeholder"=>"web page")); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->textField($model,'email_band',array("class"=>"form-control", "type"=>"email" ,"placeholder"=>"email")); ?>
                        </div>            

                        <div class="form-group">
                            <?php echo $form->textField($model,'genre_band',array("class"=>"form-control","placeholder"=>"genre")); ?>
                            <?php echo $form->error($model,'genre_band'); ?>
                            
                        </div>   

                        <div class="form-group">
                            <?php echo $form->textArea($model,"desc_band",array("class"=>"form-control", "placeholder"=>"band's description", "rows"=>5));?>         
                        </div>

                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Sign up">
                    <?php $this->endWidget(); ?>
                    </div><!-- form -->
                    
                    <!--<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>-->
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php endforeach ?>  
