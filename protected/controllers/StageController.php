<?php
class StageController extends Controller
{
	
	public function actionIndex()
	{
		//Wind
		$wind = new CDbCriteria();
		$wind->condition = "class_instrument = 1";
		$modelwind = CActiveRecord::model("Instrument")->findAll($wind);

		//String
		$string = new CDbCriteria();
		$string->condition = "class_instrument = 2";
		$modelstring = CActiveRecord::model("Instrument")->findAll($string);

		//Percussion
		$percussion = new CDbCriteria();
		$percussion->condition = "class_instrument = 4";
		$modelpercussion = CActiveRecord::model("Instrument")->findAll($percussion);

		//Key
		$key = new CDbCriteria();
		$key->condition = "class_instrument = 3";
		$modelkey = CActiveRecord::model("Instrument")->findAll($key);
		
		$this -> render("index", array("modelwind"=>$modelwind, "modelstring"=>$modelstring,"modelpercussion"=>$modelpercussion,"modelkey"=>$modelkey));	
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