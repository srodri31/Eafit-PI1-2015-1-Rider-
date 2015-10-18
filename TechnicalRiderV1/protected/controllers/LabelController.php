<?php
/**
* 
*/
#http://localhost/yii/TechnicalRider2/stage/index
class LabelController extends Controller
{
	
	public function actionIndex(){
		$model=new Label;
		if(isset($_POST['Label']))
		{
			$model->attributes=$_POST['Label'];
			if($model->save()){
			  $this->redirect(array('index'));	
			}
				
		}

		$this->render('index',array('model'=>$model));
	}

	public function actionRider(){

		$this->render('rider');
	}
}

?>