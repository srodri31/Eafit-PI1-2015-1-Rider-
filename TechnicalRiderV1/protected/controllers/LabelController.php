<?php
/**
* 
*/
#http://localhost/yii/TechnicalRider2/stage/index
class LabelController extends Controller
{
	
	public function actionIndex(){
		$model=new LabelForm;

		if(isset($_POST['LabelForm']))
		{
			$model->attributes=$_POST['LabelForm'];

			//$model->register();
			if($model->register()){
			
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