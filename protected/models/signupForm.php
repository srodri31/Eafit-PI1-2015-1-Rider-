<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class signupForm extends CFormModel
{
	public $name;
	public $password;
	public $page;
	public $email;
	public $genre;
	public $desc;

	private $_band;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, password, page, email, genre, desc', 'required'),

		);
	}
	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function signup()
	{
		$user = Band::model()->findByAttributes(array('name_band'=>$this->name)); //create model in the models folder
		if ($user!=null) { // user already exist
			$this->addError('name','This name already exists');
			return false;
		}else if($this->name == null){
			$this->addError('name','Name cannot be blank');
			return false;
		}else if($this->password == null){
			$this->addError('password','Password cannot be blank');
			return false;
		}
		$_band = new Band;
		$_band->page_band = $this->page;
		$_band->name_band = $this->name;
		$_band->password_band = $this->password; 
		$_band->gender_band = $this->genre;
		$_band->email_band = $this->email;
		$_band->desc_band = $this->desc;
		$_band->save();
		return true;
	}
}
