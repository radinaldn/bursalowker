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

	// Default Generate
	// public function authenticate()
	// {
	// 	$users=array(
	// 		// username => password
	// 		'demo'=>'demo',
	// 		'admin'=>'admin',
	// 	);
	// 	if(!isset($users[$this->username]))
	// 		$this->errorCode=self::ERROR_USERNAME_INVALID;
	// 	elseif($users[$this->username]!==$this->password)
	// 		$this->errorCode=self::ERROR_PASSWORD_INVALID;
	// 	else
	// 		$this->errorCode=self::ERROR_NONE;
	// 	return !$this->errorCode;
	// }

	public function authenticate()
	{
		$user=Admin::model()->findByAttributes(array('username'=>$this->username));
		//$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($user->password!==$this->password)
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->username=$user->username	;
			$this->setState('username', $user->username);
			$this->setState('nama', $user->nama);
			$this->setState('id_admin', $user->id_admin);
			//$this->setState('status', $user->level=='1');
			$this->setState('level', $user->level);
			
			Yii::app()->session->add('username', $user->username);
			Yii::app()->session->add('nama', $user->nama);
			Yii::app()->session->add('id_admin', $user->id_admin);
			Yii::app()->session->add('level', $user->level);

			$user->save();
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}	
}