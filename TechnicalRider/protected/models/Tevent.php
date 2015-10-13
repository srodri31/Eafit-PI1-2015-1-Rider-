<?php
class Tevent extends CActiveRecord{
	//Nos permite hacer la consultas en le modelo
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	
	public function tableName()
	{
		return 'tevent';
	}
	
	//Reglas de validacion
	//Nota: al campo id no se le
	// asignan reglas de validacion
	public function rules()
	{
		return array(
			array('name_event, dateStart_event, dateEnd_event, timeStart_event, timeEndevent, desc_event, gender_event, image_event, id_company', 'required'),
			array('id_company', 'numerical', 'integerOnly'=>true),
		);
	}
	
	
}