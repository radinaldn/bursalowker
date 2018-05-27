<?php

/**
 * This is the model class for table "pelamar".
 *
 * The followings are the available columns in table 'pelamar':
 * @property integer $id_pelamar
 * @property integer $id_kota
 * @property integer $id_jurusan
 * @property string $username
 * @property string $password
 * @property string $no_ktp
 * @property string $tgl_daftar
 * @property string $nama_lengkap
 * @property string $jenis_kelamin
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_hp
 * @property string $photo
 * @property string $id_telegram
 *
 * The followings are the available model relations:
 * @property Lamaran[] $lamarans
 * @property JurusanPendidikan $idJurusan
 * @property Kota $idKota
 */
class Pelamar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kabkota, id_jurusan, username, password, no_ktp, tgl_daftar, nama_lengkap, jenis_kelamin, tgl_lahir, alamat, no_hp, photo, id_telegram', 'required'),
			array('id_kabkota, id_jurusan, id_telegram', 'numerical', 'integerOnly'=>true),
			array('username, nama_lengkap', 'length', 'max'=>40),
			array('no_ktp', 'length', 'max'=>16),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('no_hp', 'length', 'max'=>12),
			array('photo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pelamar, id_kabkota, id_jurusan, username, password, no_ktp, tgl_daftar, nama_lengkap, jenis_kelamin, tgl_lahir, alamat, no_hp, photo, id_telegram', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'lamarans' => array(self::HAS_MANY, 'Lamaran', 'id_pelamar'),
			'idJurusan' => array(self::BELONGS_TO, 'JurusanPendidikan', 'id_jurusan'),
			'idKota' => array(self::BELONGS_TO, 'Kota', 'id_kabkota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pelamar' => 'Id Pelamar',
			'id_kabkota' => 'Id Kota',
			'id_jurusan' => 'Id Jurusan',
			'username' => 'username',
			'password' => 'Password',
			'no_ktp' => 'No Ktp',
			'tgl_daftar' => 'Tgl Daftar',
			'nama_lengkap' => 'Nama Lengkap',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tgl_lahir' => 'Tgl Lahir',
			'alamat' => 'Alamat',
			'no_hp' => 'No Hp',
			'photo' => 'Photo',
			'id_telegram' => 'Id Telegram',
		);
	}

	public function validatePassword($password)
	{
		return crypt($password,$this->password)===$this->password;
	}

	public function hashPassword($password)
	{
		return crypt($password, $this->generateSalt());
	}

	public function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		// Get some pseudo-random data from mt_rand().
		$rand='';
		for($i=0;$i<8;++$i)
			$rand.=pack('S',mt_rand(0,0xffff));
		// Add the microtime for a little more entropy.
		$rand.=microtime();
		// Mix the bits cryptographically.
		$rand=sha1($rand,true);
		// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pelamar',$this->id_pelamar);
		$criteria->compare('id_kabkota',$this->id_kabkota);
		$criteria->compare('id_jurusan',$this->id_jurusan);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('no_ktp',$this->no_ktp,true);
		$criteria->compare('tgl_daftar',$this->tgl_daftar,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('photo',$this->photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getAllValid(){
		$sql = "SELECT pelamar.id_pelamar, pelamar.nama_lengkap, pelamar.id_kabkota, tb_kabkota.name, pelamar.id_jurusan, jurusan_pendidikan.nama_jurusan, pelamar.username, pelamar.no_ktp, pelamar.photo, pelamar.id_telegram FROM pelamar INNER JOIN tb_kabkota, jurusan_pendidikan WHERE pelamar.id_kabkota = tb_kabkota.id_kabkota AND pelamar.id_jurusan = jurusan_pendidikan.id_jurusan AND pelamar.level = 'pelamar' ORDER BY pelamar.tgl_daftar DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllNonValid(){
		$sql = "SELECT pelamar.id_pelamar, pelamar.nama_lengkap, pelamar.id_kabkota, tb_kabkota.name, pelamar.id_jurusan, jurusan_pendidikan.nama_jurusan, pelamar.username, pelamar.no_ktp, pelamar.photo, pelamar.id_telegram FROM pelamar INNER JOIN tb_kabkota, jurusan_pendidikan WHERE pelamar.id_kabkota = tb_kabkota.id_kabkota AND pelamar.id_jurusan = jurusan_pendidikan.id_jurusan AND pelamar.level = '' ORDER BY pelamar.tgl_daftar DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getNonValidByPk($id){
		$sql = "SELECT pelamar.id_pelamar, pelamar.nama_lengkap, pelamar.id_kabkota, tb_kabkota.name, pelamar.id_jurusan, jurusan_pendidikan.nama_jurusan, pelamar.username, pelamar.no_ktp, pelamar.photo, pelamar.id_telegram FROM pelamar INNER JOIN tb_kabkota, jurusan_pendidikan WHERE pelamar.id_kabkota = tb_kabkota.id_kabkota AND pelamar.id_jurusan = jurusan_pendidikan.id_jurusan AND pelamar.level = '' AND pelamar.id_pelamar = '$id' ORDER BY pelamar.tgl_daftar DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getIdTelegram($id_pelamar){
		$sql = "SELECT pelamar.id_telegram FROM pelamar WHERE pelamar.id_pelamar = '$id_pelamar';";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

    public function kabkotaList()
    {
        $models = Kabkota::model()->findAll(array('condition' => 'id_provinsi = ' . $this->id_provinsi, 'order'=> 'name'));
        foreach ($models as $model)
            $_items[$model->id_kabkota] = $model->name;
        return $_items;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelamar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

