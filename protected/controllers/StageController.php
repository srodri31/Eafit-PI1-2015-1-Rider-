<?php
class StageController extends Controller
{
	
	public function actionIndex()
	{
		//$Criteria = new CDbCriteria();
		//$Criteria->condition = "id_classification = 1";
		$model = CActiveRecord::model("Instrument")->findAll();
		//$categories = CActiveRecord::model("Classification")->findAll();
		$this -> render("index", array("model"=>$model));	
	}
	
	public function actionDeleteBD(){
		Tstage_information::model()->deleteAll('idRider = :id',array('id' => '1'));
		
	}

	public function actionSaveInfoBd(){
	  $model= new Tstage_information();
      
	  if(isset($_POST['name'])){
		$name = json_decode($_POST['name']);
		$micro = json_decode($_POST['microphone']);
		$posLeftImg = json_decode($_POST['posLeft']);
		$posTopImg = json_decode($_POST['posTop']);
	
		$model->name= $name;
		$model->microphone= $micro;
		$model->positionLeft= $posLeftImg;
		$model->positionTop= $posTopImg;
		$model->idRider= 1;
		$model->save();
	  }
	}
	
	
	public function actionGetInfoBd(){
		
		$model=new Tstage_information();
		$idR = 1;
		$resultData = Tstage_information::model()->findAllBySql('SELECT name,microphone,positionLeft,positionTop FROM tstage_information WHERE idRider=1');
		foreach($resultData as $data){
			echo $data->name;
			echo "~";
			echo $data->microphone;
			echo "~";
			echo $data->positionLeft;
			echo "~";
			echo $data->positionTop;
			echo "¬";
	    }	
	}
	
}

?>