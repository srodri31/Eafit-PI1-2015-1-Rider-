<?php

class SiteController extends Controller
{
	public function actions(){
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('rider'));
		}
		// display the login form
		$this->render('index',array('model'=>$model));
	}

	public function actionSignup()
	{
		$model=new signupForm;
        $user=new LoginForm;

		if(isset($_POST['signupForm']))
		{
			$model->attributes=$_POST['signupForm'];
			// validate user input and redirect to the previous page if valid
			if($model->signup()){
				$user->username=$model->name;
				$user->password=$model->password;
				if($user->login())
					$this->redirect(array('rider'));
			}
		}

		$this->render('signup',array('model'=>$model));
	}

	public function actionRider()
	{
		$band = new CDbCriteria();
		$user = Yii::app()->user->name;		
		$resultData = new Band();
		$resultData = Band::model()->findAllBySql('SELECT id_band FROM tband WHERE name_band = "'.$user.'"');
		//echo $resultData;
		$band->condition = "id_band = ".$resultData[0]->id_band;		 
		$bandInfo = CActiveRecord::model("Band")->findAll($band);
		$model = CActiveRecord::model("Rider")->findAll($band);
		$this->render('rider', array('model'=>$model, 'user'=>$user, "bandInfo"=>$bandInfo));
	}

	public function actionGeneral()
	{
		$model = CActiveRecord::model("Rider")->findAll();
		$this->render('general', array('model'=>$model));
	}

	public function actionExportOptions()
	{
		$this->render('exportOption');
	}

	public function actionLabel(){
		$model=new LabelForm;

		if(isset($_POST['LabelForm']))
		{
			$model->attributes=$_POST['LabelForm'];			
			if($model->register())
				$this->redirect(array("callExport", 'id'=>$model->idRider));				
		}

		$this->render('label',array('model'=>$model));
	}

	public function actionCallExport($id){
		$this->redirect(array("exportoptions", array('id'=>$id)));
	}

	public function actionCallLabel($id){
		$this->redirect(array("label", array('id'=>$id)));
	}

	public function actionDeletelbl(){
		if(isset($_POST['id'])){
			$idR = json_decode($_POST['id']);
		}	
		Label::model()->deleteAll('id_rider = :id',array('id' => $idR));
		
	}

	public function actionGenerarPdf() {
		
		//Channel List : select * from labels where id_rider && name_label = channel
		//pa : select * from labels where id_rider && name_label = pa
		//nameLabel : select * from labels where id_rider && name_label = nameLabel
		//The next block is fROM stageController and its just to a test
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

		//end of block


		 $Criteria = new CDbCriteria();
		 $Criteria->condition = "id_rider = 1";

		 //Stage Info And Ubication
		 $model=new Tstage_information();
		 $stage = Tstage_information::model()->findAllBySql('SELECT name,microphone,positionLeft,positionTop FROM tstage_information WHERE idRider=1');		 
		 //$stageInfo = implode("", $stage);
		 $stageInfo = "tube~Default~-286px~86px¬tube~Default~-314px~129px¬trumpet~Default~-409px~77px¬tube~Default~-14px~129px¬tube~Default~-286px~86px¬trumpet~Default~-409px~77px¬";
		 echo "<script>";	
		 echo "restoreInformationBD($stageInfo)";
		 echo "</script>";

		 $channelList = CActiveRecord::model("Tstage_information")->findAll();
		 $model = CActiveRecord::model("Label")->findAll(); 

		

		 $this->renderPartial('pdfReport', array('model'=>$model, 'channels'=>$channelList, 'stage'=>$stage, "modelwind"=>$modelwind, "modelstring"=>$modelstring,"modelpercussion"=>$modelpercussion,"modelkey"=>$modelkey));
	 }


	 
	public function actionPdf(){
	 	 $band = new CDbCriteria();
		 $user = Yii::app()->user->name;
		
		 $resultData = new Band();
		 $resultData = Band::model()->findAllBySql('SELECT id_band FROM tband WHERE name_band = "'.$user.'"');
		//echo $resultData;
		 $band->condition = "id_band = ".$resultData[0]->id_band;		 
		 $bandInfo = CActiveRecord::model("Band")->findAll($band);

		 $model=new Tstage_information();
		 $stage = Tstage_information::model()->findAllBySql('SELECT name,microphone,positionLeft,positionTop FROM tstage_information WHERE idRider=1');		 		 
		 $channelList = CActiveRecord::model("Tstage_information")->findAll();
		 $model = CActiveRecord::model("Label")->findAll();
		 $labels = CActiveRecord::model("Label")->findAll(); 
		 date_default_timezone_set('America/Cordoba');
		 $html2pdf = Yii::app()->ePdf->HTML2PDF();
         $html2pdf->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model, 'channels'=>$channelList, 'stage'=>$stage, 'labels'=>$labels, 'bandInfo'=>$bandInfo), true));
         $html2pdf->Output();        
	}

	public function actionStage()
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
		
		$this -> render("stage", array("modelwind"=>$modelwind, "modelstring"=>$modelstring,"modelpercussion"=>$modelpercussion,"modelkey"=>$modelkey));	
	}
	
	public function actionDeleteBD(){
		if(isset($_POST['id'])){
			$idR = json_decode($_POST['id']);
		}	
		Tstage_information::model()->deleteAll('idRider = :id',array('id' => $idR));
		
	}

	public function actionSaveInfoBd(){
	  $model= new Tstage_information();
      
	  if(isset($_POST['name'])){
		$name = json_decode($_POST['name']);
		$micro = json_decode($_POST['microphone']);
		$posLeftImg = json_decode($_POST['posLeft']);
		$posTopImg = json_decode($_POST['posTop']);
		$idR = json_decode($_POST['id']);
	
		$model->name= $name;
		$model->microphone= $micro;
		$model->positionLeft= $posLeftImg;
		$model->positionTop= $posTopImg;
		$model->idRider= $idR;
		$model->save();
		
	  }


	}

	public function actionRiderName(){
		if(isset($_POST['id'])){
			$idR = json_decode($_POST['id']);
			$name = json_decode($_POST['nameR']);
		}
		$user = Yii::app()->user->name;
		$resultData = new Band();
		$resultData = Band::model()->findAllBySql('SELECT id_band FROM tband WHERE name_band = "'.$user.'"');
		Rider::model()->deleteAll('id_rider = :id',array('id' => $idR));
		$rider = new Rider;
		$rider->id_rider = $idR;
		$rider->name_rider=$name;
		$rider->id_band=$resultData[0]->id_band;
		$rider->save();
		//aqui va el codigo
	}

	public function actionNewGeneral(){
		$user = Yii::app()->user->name;
		$resultData = new Band();
		$resultData = Band::model()->findAllBySql('SELECT id_band FROM tband WHERE name_band = "'.$user.'"');
		$rider = new Rider;
		$rider->name_rider="Nuevo rider";
		$rider->id_band=$resultData[0]->id_band;
		$rider->save();
		$this->redirect(array("general", array('id'=>$rider->id_rider)));
	}
	
	public function actionCallStage($id){
		$this->redirect(array("stage", array('id'=>$id)));
	}

	public function actionCallGeneral($id){
		$this->redirect(array("general", array('id'=>$id)));
	}


	public function actionGetInfoBd(){	
		
	if(isset($_POST['id'])){
		$idR = json_decode($_POST['id']);
	}	
	$model=new Tstage_information();
		
		$resultData = Tstage_information::model()->findAllBySql('SELECT name,microphone,positionLeft,positionTop FROM tstage_information WHERE idRider='.$idR);
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

	public function actionDelete($id)
	{
		Tstage_information::model()->deleteAll('idRider = :id',array('id' => $id));
	    Label::model()->deleteAll('id_rider = :id',array('id' => $id));
		Rider::model()->deleteAll('id_rider = :id',array('id' => $id));
		$this->redirect(array('rider'));	
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError(){
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}