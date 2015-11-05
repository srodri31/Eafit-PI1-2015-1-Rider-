<?php
class Tstage_information extends CActiveRecord{
	
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	
	public function tableName()
	{
		return 'tstage_information';
	}
	
}