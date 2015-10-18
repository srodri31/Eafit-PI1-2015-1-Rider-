<?php
	/**
	* 
	*/
	class Label extends CActiveRecord
	{
		public static function model($ClassName=__CLASS__)
		{
			return parent::model($ClassName);
		}

		public function tableName()
		{
			return "tlabel";
		}

		public function rules()
	{
		return array(
			array('name_label, desc_label', 'required'),
		);
	}
	}
?>