    var staff;
    var PA;
    var scenary;
    var backline;
    var camarin;
    var catering;
    var div;
    var bool = false;

$(document).ready(function() {
   
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
           $("#divStaff").addClass("hidden");
        }

        if(PA){
          $("#divPA").removeClass("hidden");
        }else{
          $("#divPA").addClass("hidden");
        }

        if(scenary){
          $("#divScenary").removeClass("hidden");
        }else{
          $("#divScenary").addClass("hidden");
        }

        if(backline){
          $("#divBackline").removeClass("hidden");
        }else{
          $("#divBackline").addClass("hidden");
        }

        if(camarin){
          $("#divCamarin").removeClass("hidden");
        }else{
          $("#divCamarin").addClass("hidden");
        }

        if(catering){
          $("#divCatering").removeClass("hidden");
        }else{
          $("#divCatering").addClass("hidden");
        }

        $("#divSubmit").removeClass("hidden");       
   }
