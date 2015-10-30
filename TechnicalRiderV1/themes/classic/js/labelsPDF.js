$(document).ready(function(){
	var form = document.getElementById("label-form");	
	elementos = form.elements, button = document.getElementById("btn-label");
	
	//Función de ayuda: reúne los datos a exportar en un solo objeto
	var getData = function () {
	    return {
	        bandName: "Exos",
	        staff: form.staffDesc.value,
	        pa: form.PADesc.value,
	        scenary: form.scenaryDesc.value ,
	        backline: form.backlineDesc.value,
	        camerin: form.camerinDesc.value,
	        catering: form.cateringDesc.value,
	        date: (new Date()).toLocaleDateString()
	    };
	};

	var createLabels = function(e){
		if(1 != 0){
			var doc = document.open("text/html","replace");
			var datos = getData();	

			doc.write("<html><body><legend><br>Exos Band</legend>");
			doc.write("<div><legend>Staff</legend><br>"+ datos.staff +"</div><br>");				
			doc.write("<div><legend>Pa</legend><br>"+ datos.pa +"</div><br>");	
			doc.write("<div><legend>Backline</legend><br>"+ datos.scenary +"</div><br>");
			doc.write("<div><legend>Camerin</legend><br>"+ datos.camerin +"</div><br>");	
			doc.write("<div><legend>Catering</legend><br>"+ datos.catering +"</div><br>")

			//This commented Line to redirect the browser to pdf document which still doesn'thave specifications
			 redirect(e);		
		} 
	};

	var pagina="http://localhost/yii/TechnicalRiderV1/label?pdf"

	var redirect = function (e){
		location.href=pagina
		e.preventDefault();
	} 
	setTimeout ("redirect()", 20000);

	form.addEventListener("submit", createLabels);
});

