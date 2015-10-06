<?php
/**
* 
*/
#http://localhost/yii/TechnicalRider2/stage/index
class StageController extends Controller
{
	
	public function actionIndex()
	{
		$model = CActiveRecord::model("Band")->findAll();
		$twiter = "@Rider";
		$this -> render("index", array("model"=>$model, "twiter"=>$twiter));
	}
}

?>