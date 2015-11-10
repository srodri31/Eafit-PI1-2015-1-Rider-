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
			if($model->register()){	}
			$this->redirect(array("generarpdf"));				
		}

		$this->render('index',array('model'=>$model));
	}


	public function actionGenerarPdf() {
		
		//Channel List : select * from labels where id_rider && name_label = channel
		//pa : select * from labels where id_rider && name_label = pa
		//nameLabel : select * from labels where id_rider && name_label = nameLabel

		 $Criteria = new CDbCriteria();
		 $Criteria->condition = "id_rider = 1";
		 //Model is a variable to get the label's values
		 $channelList = CActiveRecord::model("Tstage_information")->findAll();
		 $model = CActiveRecord::model("Label")->findAll(); 

		 $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); 
		 $mPDF1->useOnlyCoreFonts = true;
		 $mPDF1->SetTitle("Technical Rider");
		 $mPDF1->SetAuthor("Name of Band");
		 $mPDF1->showWatermarkText = true;
		 $mPDF1->watermark_font = 'DejaVuSansCondensed';
		 $mPDF1->watermarkTextAlpha = 0.1;
		 $mPDF1->SetDisplayMode('fullpage');
		 $mPDF1->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model, 'channels'=>$channelList), true)); 
		 $mPDF1->Output('Label'.date('YmdHis'),'I');  
	 }

}

?>