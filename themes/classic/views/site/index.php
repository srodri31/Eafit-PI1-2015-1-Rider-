

<div class="row">
    <div class="col-lg-6">  
        <h3><div class="btn btn-custom">Technical</div> Rider </h3>
    </div>
    <div class="col-lg-6"></div>
</div>
<?php
    if(Yii::app()->user->isGuest){
?>
        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-wrap">
                            <h1>Login</h1>
                            <div class="form">
                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'login-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                ),
                            )); ?>

                                <div class="form-group">
                                    <?php echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"user")); ?>
                                    <?php echo $form->error($model,'username'); ?>
                                </div>

                                <div class="form-group">
                                    <?php echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"password")); ?>
                                    <?php echo $form->error($model,'password'); ?>
                                </div>
                                <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Login">
                            <?php $this->endWidget(); ?>
                            </div><!-- form -->
                            <?php echo CHtml::link('Signup', array('signup')); ?>
                            
                            <!--<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>-->
                            <hr>
                        </div>
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>
    
        
<?php }else{ $this->redirect(array('rider')); } ?>

