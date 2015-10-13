<?php
/**
* 
*/
#http://localhost/yii/TechnicalRider2/stage/index
class StageController extends Controller
{
	
	public function actionIndex()
	{
		$model = CActiveRecord::model("Instrument")->findAll();
		$this -> render("index", array("model"=>$model));
	}
}

?>