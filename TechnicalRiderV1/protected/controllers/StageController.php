<?php
/**
* 
*/
#http://localhost/yii/TechnicalRider2/stage/index
class StageController extends Controller
{
	
	public function actionIndex()
	{
		$Criteria = new CDbCriteria();
		$Criteria->condition = "id_classification = 1";
		$model = CActiveRecord::model("Instrument")->findAll($Criteria);
		$categories = CActiveRecord::model("Classification")->findAll();
		$this -> render("index", array("model"=>$model, "categories" =>$categories));
	}
}

?>