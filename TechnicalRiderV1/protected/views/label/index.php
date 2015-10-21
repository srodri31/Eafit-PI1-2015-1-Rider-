<style>
  #hidden {
    visibility: hidden;
  }

  .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
  }

  .modalDialog:target {
    opacity:1;
    pointer-events: auto;
  }

  .modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
  }

  .close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
  }

  .close:hover { background: #00d9ff; }
  
</style>

<script type="text/javascript">

    var staff;
    var PA;
    var scenary;
    var backline;
    var camarin;
    var catering;
    var div;
    
   function CreateForm(){
        //var uno = document.getElementById("try");
        //uno.parentNode.removeChild(uno);  
        staff = document.getElementById("staff").checked;
        PA = document.getElementById("PA").checked;
        scenary = document.getElementById("scenary").checked;
        backline = document.getElementById("backline").checked;
        camarin = document.getElementById("camarin").checked;
        catering = document.getElementById("catering").checked;
        
        if(staff){
           $("#divStaff").removeClass("hidden");
        }else{
          div = document.getElementById("divStaff");
          div.parentNode.removeChild(div);
        }

        if(PA){
          $("#divPA").removeClass("hidden");
        }

        if(scenary){
          $("#divScenary").removeClass("hidden");
        }else{
          div = document.getElementById("divScenary");
          div.parentNode.removeChild(div);
        }

        if(backline){
          $("#divBackline").removeClass("hidden");
        }

        if(camarin){
          $("#divCamarin").removeClass("hidden");
        }else{
          div = document.getElementById("divCamarin");
          div.parentNode.removeChild(div);
        }

        if(catering){
          $("#divCatering").removeClass("hidden");
        }else{
          div = document.getElementById("divCatering");
          div.parentNode.removeChild(div);
        }

        $("#divSubmit").removeClass("hidden");

        div = document.getElementById("generate");
        div.parentNode.removeChild(div);
   }
</script>

<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rider's 
                    <small>labels</small>
                </h1>
            </div>
        </div>

<br>
<div id="generate" class="row">
<div class="form-group">
Select the labels you think are necessary for your rider.<br>
Some of them are already selected because they are required in any technical rider.
</div>
<div class="form-group">
  <input id="staff" type="checkbox" name="staff">
  Staff: Describe the muscicians integrated in the band and also the support group
</div>
<div class="form-group">
  <input id="PA" type="checkbox" name="PA" disabled checked>
  PA system: amplification system that will be used during the presentation
</div>
<div class="form-group">
  <input type="checkbox" name="input" disabled checked>
  Input list: show the instruments placed in the stage plot and their specific information (this is generated automatically)
</div>
<div class="form-group">
  <input id="scenary" type="checkbox" name="scenary">
  Scenary: specify the dimensions and some other things
</div>
<div class="form-group">
  <input id="backline" type="checkbox" name="backline" disabled checked>
  Backline
</div>
<div class="form-group">
  <input id="camarin" type="checkbox" name="camarin">
  Camarin
</div>
<div class="form-group">
  <input id="catering" type="checkbox" name="catering">
  Catering
</div>
  <br>
  <div>
    <button class="btn btn-primary btn-large" id="Cform" onclick="CreateForm()">Generate</button>
  </div>
  <br><br>
</div>

<div id="form" class="row">
  <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'label-form',
  'enableClientValidation'=>true,
  'clientOptions'=>array(
    'validateOnSubmit'=>true,
  ),
)); ?>

  <div id="divStaff" class="hidden">
      <?php $model->name1="Staff";?>
      <?php echo $form->textField($model,"name1",array("class"=>"form-control","readonly"=>"true"));?>
      <a href="#openModalStaff">See an example</a>
      <br>
      <?php echo $form->textArea($model,"desc1",array("class"=>"form-control"));?>
      <br>
    <br>
  </div>

  <div id="divPA" class="hidden">
      <?php $model->name2="PA";?>
      <?php echo $form->textField($model,"name2",array("class"=>"form-control","readonly"=>"true"));?>
      <a href="#openModalPA">See an example</a>
      <br>
      <?php echo $form->textArea($model,"desc2",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"desc2");?>
      <br>
    <br>
  </div>

  <div id="divScenary" class="hidden">
      <?php $model->name3="Scenary";?>
      <?php echo $form->textField($model,"name3",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc3",array("class"=>"form-control"));?>
      <br>
    <br>
  </div>

  <div id="divBackline" class="hidden">
      <?php $model->name4="Backline";?>
      <?php echo $form->textField($model,"name4",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc4",array("class"=>"form-control"));?>
      <br>
    <br>
  </div>

  <div id="divCamarin" class="hidden">
      <?php $model->name5="Camarin";?>
      <?php echo $form->textField($model,"name5",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc5",array("class"=>"form-control"));?>
      <br>
    <br>
  </div>

  <div id="divCatering" class="hidden">
      <?php $model->name6="Catering";?>
      <?php echo $form->textField($model,"name6",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc6",array("class"=>"form-control"));?>
      <br>
    <br>
  </div>

  <div id="divSubmit" class="hidden">
    <input type="submit" value="Save" class="btn btn-primary btn-large">
  </dic>

<?php $this->endWidget(); ?>
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