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

	public function actionGenerarPdf() {
		 $model = CActiveRecord::model("Label")->findAll(); //Consulta para buscar todos los registros
		 $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
		 $mPDF1->useOnlyCoreFonts = true;
		 $mPDF1->SetTitle("Technical Rider");
		 $mPDF1->SetAuthor("Name of Band");
		// $mPDF1->SetWatermarkText("wwww.tecnicalrider.com");
		 $mPDF1->showWatermarkText = true;
		 $mPDF1->watermark_font = 'DejaVuSansCondensed';
		 $mPDF1->watermarkTextAlpha = 0.1;
		 $mPDF1->SetDisplayMode('fullpage');
		 $mPDF1->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
		 $mPDF1->Output('Label'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
		 exit;
	 }


}

?>