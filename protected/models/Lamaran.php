<?php

/**
 * This is the model class for table "lamaran".
 *
 * The followings are the available columns in table 'lamaran':
 * @property integer $id_lamaran
 * @property integer $id_pelamar
 * @property integer $id_lowongan
 * @property string $tgl_lamar
 * @property string $lampiran
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Pelamar $idPelamar
 * @property Lowongan $idLowongan
 */
class Lamaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lamaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pelamar, id_lowongan, tgl_lamar, lampiran', 'required'),
			array('id_pelamar, id_lowongan', 'numerical', 'integerOnly'=>true),
			array('lampiran','file','types'=>'zip, rar', 'allowEmpty'=>true,'safe'=>true),
			//array('lampiran', 'length', 'max'=>255),
			array('status', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lamaran, id_pelamar, id_lowongan, tgl_lamar, lampiran, status', 'safe', 'on'=>'search'),
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
			'idPelamar' => array(self::BELONGS_TO, 'Pelamar', 'id_pelamar'),
			'idLowongan' => array(self::BELONGS_TO, 'Lowongan', 'id_lowongan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lamaran' => 'Id Lamaran',
			'id_pelamar' => 'Id Pelamar',
			'id_lowongan' => 'Id Lowongan',
			'tgl_lamar' => 'Tgl Lamar',
			'lampiran' => 'Lampiran',
			'status' => 'Status',
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

		$criteria->compare('id_lamaran',$this->id_lamaran);
		$criteria->compare('id_pelamar',$this->id_pelamar);
		$criteria->compare('id_lowongan',$this->id_lowongan);
		$criteria->compare('tgl_lamar',$this->tgl_lamar,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function cekPengajuan($id_pelamar, $id_lowongan){
		$sql = "SELECT COUNT(id_lamaran) AS jumlah_lamaran FROM lamaran WHERE lamaran.id_lowongan = '$id_lowongan' AND lamaran.id_pelamar = '$id_pelamar';";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAll(){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lowongan.pekerjaan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar, lowongan WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = lowongan.id_lowongan;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllTerima(){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lowongan.pekerjaan, lowongan.tgl_panggilan, perusahaan.nama_perusahaan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar, lowongan, perusahaan WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lamaran.status = 'Diterima' ORDER BY lamaran.tgl_lamar DESC";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllTolak(){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lowongan.pekerjaan, perusahaan.nama_perusahaan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar, lowongan, perusahaan WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lamaran.status = 'Ditolak' ORDER BY lamaran.tgl_lamar DESC";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllByPelamar($id_pelamar){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lowongan.id_perusahaan, perusahaan.nama_perusahaan, lowongan.pekerjaan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar, lowongan, perusahaan WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = lowongan.id_lowongan AND lamaran.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lamaran.id_pelamar = '$id_pelamar';";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllByPerusahaan($id_perusahaan){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_perusahaan = $id_perusahaan;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getCountLamaranByPerusahaan($id_lowongan){
		$sql = "SELECT COUNT(id_lamaran) AS total_lamaran FROM lamaran WHERE lamaran.id_lowongan = $id_lowongan";
		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getCountDiterimaByPerusahaan($id_lowongan){
		$sql = "SELECT COUNT(id_lamaran) AS total_lamaran FROM lamaran WHERE lamaran.id_lowongan = $id_lowongan AND lamaran.status = 'Diterima'";
		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getCountDitolakByPerusahaan($id_lowongan){
		$sql = "SELECT COUNT(id_lamaran) AS total_lamaran FROM lamaran WHERE lamaran.id_lowongan = $id_lowongan AND lamaran.status = 'Ditolak'";
		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getLamaranByPerusahaan($id_lowongan){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, pelamar.nama_lengkap, lamaran.id_lowongan, lamaran.tgl_lamar, lamaran.lampiran, lamaran.status FROM lamaran INNER JOIN pelamar WHERE lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = $id_lowongan";
		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function klikTerima($id)
	{
		$sql = "UPDATE lamaran SET status = 'Diterima' WHERE id_lamaran = $id";

		$model = Yii::app()->db
			->createCommand($sql)
			->execute();
		return $model;
	}

	public function klikTolak($id)
	{
		$sql = "UPDATE lamaran SET status = 'Ditolak' WHERE id_lamaran = $id";

		$model = Yii::app()->db
			->createCommand($sql)
			->execute();
		return $model;
	}

	public function getDataPelamarByLamaran($id_lamaran){
		$sql = "SELECT lamaran.id_pelamar, lamaran.id_lowongan, pelamar.nama_lengkap as nama_pelamar, lowongan.pekerjaan as pekerjaan_pelamar, lowongan.id_perusahaan, lowongan.tgl_panggilan, perusahaan.nama_perusahaan as perusahaan_pelamar, perusahaan.nama_kontak as kontak_perusahaan, perusahaan.no_hp as hp_perusahaan, perusahaan.situs as situs_perusahaan FROM lamaran INNER JOIN pelamar, lowongan, perusahaan WHERE lamaran.id_lamaran = '$id_lamaran' AND lamaran.id_pelamar = pelamar.id_pelamar AND lamaran.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = perusahaan.id_perusahaan;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lamaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
