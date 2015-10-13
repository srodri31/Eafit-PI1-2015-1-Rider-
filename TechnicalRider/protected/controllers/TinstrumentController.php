<?php
class TinstrumentController extends Controller{
	
	public function actionIndex(){
		$model=new Tinstrument();
		//consultar todos los datos de la tabla
		$tinstrument = Tinstrument::model()->findAll();
		//se envian datos a la vista
		$this->render('index',array(
		/*var en la vista*/'tinstrument'=>$tinstrument));
	}
	
	public function actionCreate()
	{
	
	$model=new Tinstrument;
		if(isset($_POST['Tinstrument']))
		{
			$model->attributes=$_POST['Tinstrument'];
			if($model->save()){
			  
			  $this->redirect(array('index'));	
			}
				
		}

		$this->render('create',array('model'=>$model));
	}
	
	public function actionUpdate($id)
	{
		$model=Tinstrument::model()->findByPk($id);
		if(isset($_POST['Tinstrument']))
		{
			$model->attributes=$_POST['Tinstrument'];
			if($model->save()){
			  $this->redirect(array('index'));	
			}
				
		}

		$this->render('update',array('model'=>$model));
	}
	
	public function actionDelete($id)
	{
		$model=Tinstrument::model()->deleteByPk($id);
	    $this->redirect(array('index'));	
	}
	
	
	
	
	
}