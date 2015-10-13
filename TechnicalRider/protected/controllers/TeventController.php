<?php
class TeventController extends Controller{
	
	public function actionIndex(){
		$model=new Tevent();
		//consultar todos los datos de la tabla
		$tevent = Tevent::model()->findAll();
		//se envian datos a la vista
		$this->render('index',array(
		/*var en la vista*/'tevent'=>$tevent));
	}
	
	public function actionCreate()
	{
	
	$model=new Tevent;
		if(isset($_POST['Tevent']))
		{
			$model->attributes=$_POST['Tevent'];
			if($model->save()){
			  
			  $this->redirect(array('index'));	
			}
				
		}

		$this->render('create',array('model'=>$model));
	}
	
	public function actionUpdate($id)
	{
		$model=Tevent::model()->findByPk($id);
		if(isset($_POST['Tevent']))
		{
			$model->attributes=$_POST['Tevent'];
			if($model->save()){
			  $this->redirect(array('index'));	
			}
				
		}

		$this->render('update',array('model'=>$model));
	}
	
	public function actionDelete($id)
	{
		$model=Tevent::model()->deleteByPk($id);
	    $this->redirect(array('index'));	
	}
	
	
	
	
	
}