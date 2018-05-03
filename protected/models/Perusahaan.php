<?php

/**
 * This is the model class for table "perusahaan".
 *
 * The followings are the available columns in table 'perusahaan':
 * @property integer $id_perusahaan
 * @property integer $id_kota
 * @property string $username
 * @property string $password
 * @property string $tgl_daftar
 * @property string $nama_perusahaan
 * @property string $alamat
 * @property string $no_telp
 * @property string $situs
 * @property string $nama_kontak
 * @property string $no_hp
 *
 * The followings are the available model relations:
 * @property Lowongan[] $lowongans
 * @property Kota $idKota
 */
class Perusahaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perusahaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kota, username, password, tgl_daftar, nama_perusahaan, alamat, no_telp, situs, nama_kontak, no_hp', 'required'),
			array('id_kota', 'numerical', 'integerOnly'=>true),
			array('username, nama_perusahaan, situs', 'length', 'max'=>40),
			array('no_telp, no_hp', 'length', 'max'=>12),
			array('nama_kontak', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perusahaan, id_kota, username, password, tgl_daftar, nama_perusahaan, alamat, no_telp, situs, nama_kontak, no_hp', 'safe', 'on'=>'search'),
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
			'lowongans' => array(self::HAS_MANY, 'Lowongan', 'id_perusahaan'),
			'idKota' => array(self::BELONGS_TO, 'Kota', 'id_kota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_perusahaan' => 'Id Perusahaan',
			'id_kota' => 'Id Kota',
			'username' => 'username',
			'password' => 'Password',
			'tgl_daftar' => 'Tgl Daftar',
			'nama_perusahaan' => 'Nama Perusahaan',
			'alamat' => 'Alamat',
			'no_telp' => 'No Telp',
			'situs' => 'Situs',
			'nama_kontak' => 'Nama Kontak',
			'no_hp' => 'No Hp',
		);
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

		$criteria->compare('id_perusahaan',$this->id_perusahaan);
		$criteria->compare('id_kota',$this->id_kota);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('tgl_daftar',$this->tgl_daftar,true);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('situs',$this->situs,true);
		$criteria->compare('nama_kontak',$this->nama_kontak,true);
		$criteria->compare('no_hp',$this->no_hp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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

	public function getAllValid(){
		$sql = "SELECT perusahaan.id_perusahaan, perusahaan.nama_perusahaan, perusahaan.id_kota, tb_kabkota.name, perusahaan.username, perusahaan.alamat, perusahaan.no_telp FROM perusahaan INNER JOIN tb_kabkota WHERE perusahaan.id_kota = tb_kabkota.id_kabkota AND perusahaan.level = 'perusahaan' ORDER BY perusahaan.tgl_daftar DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllNonValid(){
		$sql = "SELECT perusahaan.id_perusahaan, perusahaan.nama_perusahaan, perusahaan.id_kota, tb_kabkota.name, perusahaan.username, perusahaan.alamat, perusahaan.no_telp FROM perusahaan INNER JOIN tb_kabkota WHERE perusahaan.id_kota = tb_kabkota.id_kabkota AND perusahaan.level = '' ORDER BY perusahaan.tgl_daftar DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perusahaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

