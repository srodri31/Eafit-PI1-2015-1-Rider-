<?php
	/**
	* 
	*/
	class Band extends CActiveRecord
	{
		
		public function tableName()
		{
			return "tband";
		}
		
		public static function model($className=__CLASS__)
	    {
	        return parent::model($className);
	    }
	}
?>