<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/modal.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/formStyle.css" rel="stylesheet">
<script  src="<?php echo Yii::app()->theme->baseUrl; ?>/js/indexLabel.js" type="text/javascript"></script>
<br><br>
<div class="row">
  <div class="col-lg-8">  
    <h3><div class="btn btn-custom">Step 2:</div> Select addional Info to Your Rider</h3>                                 
  </div>
  <div class="col-lg-4"></div>
</div>
<br><br>

<div id="generate" class="row">
  <div class="col-lg-6">
      <div class="form-group">
      <legend>Select the labels you think are necessary for your rider.</legend><br>
        <b>Some of them are already selected because they are required in any technical rider.</b>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="headLabel"><input id="staff" type="checkbox" name="staff"> Staff</div>    
          <div class="form-group">      
             Describe the musicians integrated in the band and also the support group
          </div>
        </div>
        <div class="col-lg-4">
          <div class="headLabel"><input id="PA" type="checkbox" name="PA" disabled checked> PA System</div>
          <div class="form-group">
             Amplification system that will be used during the presentation
          </div>
        </div>
        <div class="col-lg-4">
          <div class="headLabel"><input type="checkbox" name="input" disabled checked> Input List</div>
          <div class="form-group">      
             Show the instruments placed in the stage plot and their specific information (this is generated automatically)
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-4">
          <div class="headLabel"><input id="scenary" type="checkbox" name="scenary"> Scenary</div>
          <div class="form-group">      
             Specify the dimensions and some other things
          </div>
        </div>
        <div class="col-lg-4">
          <div class="headLabel"><input id="backline" type="checkbox" name="backline" disabled checked> Backline</div>
          <div class="form-group">      
            Specify those elements the event should have in order to the band playing there
          </div>
        </div>
        <div class="col-lg-4">
          <div class="headLabel"><input id="camarin" type="checkbox" name="camarin"> Camarin</div>
          <div class="form-group">
            ....
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-4">
          <div class="headLabel"><input id="catering" type="checkbox" name="catering"> Catering</div>
          <div class="form-group" >      
            ....
          </div>
        </div>
      </div>

      <div class="form-group">
        <button class="btn btn-custom btn-large" id="Cform" onclick="CreateForm()">Generate</button>
      </div>
  </div>


<div class="col-lg-6">
           <?php $form=$this->beginWidget('CActiveForm', array(
              'method'=>'POST',
              'id'=>'label-form',
              'enableClientValidation'=>true,
              'clientOptions'=>array(
              'validateOnSubmit'=>true,
              ),
            )); ?>
          <div class="form-group">
            <div id="divStaff" class="hidden">
              <div class="form-group">
                  <a href="#openModalStaff">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name1="Staff";?>
                <?php echo $form->textField($model,"name1",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc1",array("class"=>"form-control", "rows"=>7));?>
                <br>
              <br>
            </div>
          </div>

          <div class="form-group">
            
            <div id="divPA" class="hidden">
                <div class="form-group">
                  <a href="#openModalPA">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name2="PA";?>
                <?php echo $form->textField($model,"name2",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc2",array("class"=>"form-control", "rows"=>7));?>
                <?php echo $form->error($model,"desc2");?>
                <br>
                
              <br>
            </div>
          </div>

          <div class="form-group">
            <div id="divScenary" class="hidden">
              <div class="form-group">
                  <a href="#openModalScenary">
                       <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name3="Scenary";?>
                <?php echo $form->textField($model,"name3",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc3",array("class"=>"form-control", "rows"=>7));?>
                <br>
              <br>
            </div>
          </div>

          <div class="form-group">
            <div id="divBackline" class="hidden">
              <div class="form-group">
                  <a href="#openModalBackline">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name4="Backline";?>
                <?php echo $form->textField($model,"name4",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc4",array("class"=>"form-control", "rows"=>7));?>
                <br>
              <br>
            </div>
          </div>

          <div class="form-group">
            <div id="divCamarin" class="hidden">
              <div class="form-group">
                  <a href="#openModalCamarin">
                       <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name5="Camarin";?>
                <?php echo $form->textField($model,"name5",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc5",array("class"=>"form-control", "rows"=>7));?>
                <br>
              <br>
            </div>
          </div>

          <div class="form-group">
            <div id="divCatering" class="hidden">
              <div class="form-group">
                  <a href="#openModalCatering">
                       <span class="round-tab">
                          <i class="glyphicon glyphicon-comment"></i>
                      </span>
                  </a>
                </div>
                <?php $model->name6="Catering";?>
                <?php echo $form->textField($model,"name6",array("class"=>"form-control","readonly"=>"true"));?>
                <br>
                <?php echo $form->textArea($model,"desc6",array("class"=>"form-control", "rows"=>7));?>
                <br>
              <br>
            </div>
          </div>

          <?php echo $form->textField($model,"idRider",array("class"=>"form-control", "value"=>1, "class"=>"hidden"));?>           

          <div id="divSubmit" class="hidden">
            <?php echo CHtml::submitButton('Save', array("class"=>"btn btn-primary btn-large")); ?>
          </div>

          <?php $this->endWidget(); ?>
      </div>
</div>



<div class="modalDialog" id="openModalPA">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>PA System</h2>
          <p>It's needed a PA system of 24 inputs.</p>
          <p>Console: 24 inputs x 4 subgroups x 2 master (options: Yamaha or Mackie).</p>
          <p>Speakers: Depending on the space of the place (preferred option: JBL/RCF).</p>
        </div>
</div>


<div class="modalDialog" id="openModalStaff">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>Staff</h2>
          <p>Musicians</p>
          <p>
            <ul>
              <li>Steve Danger: music keyboard</li>
              <li>Dan Phil: Bass</li>
              <li>Jean Ledger: Sax</li>
              <li>Laura Marano: Drums</li>
              <li>Paul Aguirre: Voice</li>
              <li>Anthony Padilla: Guitar</li>
            </ul> 
          </p>
          <p>Support</p>
          <p>Phil Dunphy: Life sound.</p>
        </div>
</div>

<div class="modalDialog" id="openModalScenary">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>Scenary</h2>
          <p>
            <ul>
              <li>Dimensions: 7m x 4m</li>
              <li>Scaffold in the back (drums and music keyboard)</li>
              <li>At leats 2 plugs, one next to the bass and the other for the music keyboard</li>
              <li>It must have a carpet for the drums (not anchored drums)</li>
            </ul> 
          </p>
        </div>
</div>

<div class="modalDialog" id="openModalBackline">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>Backline</h2>
          <p>
            The event must have the following instruments. If not, they have to inform to the band so it can be solved.<br>
            <ul>
              <li>1 floor tom (timbal) - 1 stand hi-hat</li>
              <li>Guitar amplifier Fender 100W (not Marshall)</li>
              <li>1 drum's bench</li>
              <li>1 amplifier for the keyboard Roland (NOT Marshall or Lancey)</li>
            </ul> 
          </p>
        </div>
</div>

<div class="modalDialog" id="openModalCamarin">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>Camarin</h2>
          <p>
             A place for at least 12 people, a door with key and security, ideal if it has mirrors, tables and chairs, also access to a
             bathroom.
          </p>
        </div>
</div>

<div class="modalDialog" id="openModalCatering">
        <div>
          <a title="Close" class="close" href="#close">X</a>
          <h2>Catering</h2>
          <p>
            Negotiable, 2 sandwich or similar, 2 drinks (juice, beer, ron) for each member. Suggestion: 1 sandwich, 1 snack, 2 beer pack,
             2 Cokes 3l.
          </p>
        </div>
</div>