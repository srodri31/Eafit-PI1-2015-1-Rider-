 var staff;
    var PA;
    var scenary;
    var backline;
    var camarin;
    var catering;
    var div;
    var bool = false;

$(document).ready(function() {
    if(bool){
      var div = document.getElementById("generate");
      div.parentNode.removeChild(div);
    }
})

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
   }