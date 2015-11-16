<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LabelForm extends CFormModel
{
	public $name1;
	public $desc1;
	public $name2;
	public $desc2;
	public $name3;
	public $desc3;
	public $name4;
	public $desc4;
	public $name5;
	public $desc5;
	public $name6;
	public $desc6;
	public $idRider;

	private $_label;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('name1, name2, name3, name4, name5, name6, desc1, desc2, desc3, desc4, desc5, desc6, idRider', 'required'),
		);
	}

	public function verify(){
		if($this->name1 != null && $this->desc1 == null){
			$this->addError('desc1','This cannot be blank');
			return false;
		}
		if($this->name2 != null && $this->desc2 == null){
			$this->addError('desc2','This cannot be blank');
			return false;
		}
		if($this->name3 != null && $this->desc3 == null){
			$this->addError('desc3','This cannot be blank');
			return false;
		}
		if($this->name4 != null && $this->desc4 == null){
			$this->addError('desc4','This cannot be blank');
			return false;
		}
		if($this->name5 != null && $this->desc5 == null){
			$this->addError('desc5','This cannot be blank');
			return false;
		}
		if($this->name6 != null && $this->desc6 == null){
			$this->addError('desc6','This cannot be blank');
			return false;
		}
		return true;
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function register()
	{
		$this->_label = new Label;
		$this->_label->name_label = $this->name1;
		$this->_label->desc_label = $this->desc1;
		$this->_label->id_rider = $this->idRider;
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}
		$this->_label = new Label;
		$this->_label->name_label = $this->name2;
		$this->_label->desc_label = $this->desc2; 
		$this->_label->id_rider = $this->idRider;
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}else{
			return false;
		}
		$this->_label = new Label;
		$this->_label->name_label = $this->name3;
		$this->_label->desc_label = $this->desc3; 
		$this->_label->id_rider = $this->idRider;
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}
		$this->_label = new Label;
		$this->_label->name_label = $this->name4;
		$this->_label->desc_label = $this->desc4;
		$this->_label->id_rider = $this->idRider; 
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}
		$this->_label = new Label;
		$this->_label->name_label = $this->name5;
		$this->_label->desc_label = $this->desc5; 		 
		$this->_label->id_rider = $this->idRider;
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}
		$this->_label = new Label;
		$this->_label->name_label = $this->name6;
		$this->_label->desc_label = $this->desc6; 
		$this->_label->id_rider = $this->idRider;
		if($this->_label->name_label!=null && $this->_label->desc_label!=null){
			$this->_label->save();
		}
		return true;
	}
}
