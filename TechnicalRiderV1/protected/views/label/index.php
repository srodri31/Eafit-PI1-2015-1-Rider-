<style>
  #hidden {
    visibility: hidden;
  }
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

<div>
Select the labels you think are necessary for your rider.<br>
Some of them are already selected because they are required in any technical rider.
</div>
<br>
<div id="generate" class="row">
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

  <div id="divStaff" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="Staff";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <br>
      <?php echo $form->error($model,"name_label");?>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

  <div id="divPA" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="PA";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"name_label");?> 
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

  <div id="divScenary" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="Scenary";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"name_label");?> 
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

  <div id="divBackline" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="Backline";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"name_label");?> 
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

  <div id="divCamarin" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="Camarin";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"name_label");?> 
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

  <div id="divCatering" class="hidden">
    <?php $form =/*esto hace referencia al controlador*/
        $this->beginWidget("CActiveForm");?>
      <?php $model->name_label="Catering";?>
      <?php echo $form->textField($model,"name_label",array("class"=>"form-control","readonly"=>"true"));?>
      <br>
      <?php echo $form->textArea($model,"desc_label",array("class"=>"form-control"));?>
      <?php echo $form->error($model,"name_label");?> 
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
    <?php $this->endWidget();?>
    <br>
  </div>

</div>