<?php
class Tinstrument extends CActiveRecord{
	//Nos permite hacer la consultas en le modelo
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	
	public function tableName()
	{
		return 'tinstrument';
	}
	
	//Reglas de validacion
	//Nota: al campo id no se le
	// asignan reglas de validacion
	public function rules()
	{
		return array(
			array('name_instrument', 'required'),
		);
	}
	
	
}