<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentityPelamar extends CUserIdentity
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
		$user=Pelamar::model()->findByAttributes(array('username'=>$this->username));
		//$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($user->password!==$this->password)
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else if($user->level == 'pelamar' ){
			$this->username=$user->username	;
			$this->setState('username', $user->username);
			$this->setState('nama_lengkap', $user->nama_lengkap);
			$this->setState('id_pelamar', $user->id_pelamar);
			$this->setState('id_jurusan', $user->id_jurusan);
			//$this->setState('status', $user->level=='1');
			$this->setState('level', $user->level);
			
			$token_bot = "bot579741209:AAHELNwUG-8hwTBnszEO4m5eMA_4AnJnnD8";
			$nama_lengkap = $user->nama_lengkap;
			$id_telegram = $user->id_telegram;

			$pesan = "Halo ".$nama_lengkap.". Anda berhasil login ke dalam Sistem Informasi Bursa Lowongan Kerja. Terimakasih";
			
			Yii::app()->session->add('username', $user->username);
			Yii::app()->session->add('nama_lengkap', $user->nama_lengkap);
			Yii::app()->session->add('id_pelamar', $user->id_pelamar);
			Yii::app()->session->add('id_jurusan', $user->id_jurusan);
			Yii::app()->session->add('level', $user->level);

			$user->save();
			$send_telegram = NotifikasiLamaran::model()->sendMessage($id_telegram, $pesan, $token_bot);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}	
}