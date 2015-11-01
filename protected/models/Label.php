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

	}
?>