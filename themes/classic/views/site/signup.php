
<div class="row">
    <div class="col-lg-6">  
        <h3><div class="btn btn-custom">Technical</div> Rider </h3>
    </div>
    <div class="col-lg-6"></div>
</div>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Signup</h1>
                    <div class="form">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'signup-form',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); ?>

                        <div class="form-group">
                            <?php echo $form->textField($model,'name',array("class"=>"form-control","placeholder"=>"band's name")); ?>
                            <?php echo $form->error($model,'name'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"password")); ?>
                            <?php echo $form->error($model,'password'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->textField($model,'page',array("class"=>"form-control", "type"=>"url" ,"placeholder"=>"web page")); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->textField($model,'email',array("class"=>"form-control", "type"=>"email" ,"placeholder"=>"email")); ?>
                        </div>            

                        <div class="form-group">
                            <?php echo $form->textField($model,'genre',array("class"=>"form-control","placeholder"=>"genre")); ?>
                            <div -webkit-validation-bubble>
                              <div -webkit-validation-bubble-arrow></div>
                              <div -webkit-validation-bubble-arrow-clipper></div>
                              <div -webkit-validation-bubble-message><?php echo $form->error($model,'genre'); ?></div>
                            </div>
                        </div>   

                        <div class="form-group">
                            <?php echo $form->textArea($model,"desc",array("class"=>"form-control", "placeholder"=>"band's description", "rows"=>5));?>         
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
