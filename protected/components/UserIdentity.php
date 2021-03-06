<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = Band::model()->findByAttributes(array('name_band'=>$this->username)); //create model in the models folder
		if ($user===null) { // No user found!
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if ($user->password_band !== $this->password ) { // Invalid password!
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else { // Okay!
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function signup()
	{
		$user = new Band;
		$user->name_band = $this->username;
		$user->code_band = $this->password; 
		$user->save();
		///return !$this->errorCode;
	}

}