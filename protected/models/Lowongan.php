<?php

/**
 * This is the model class for table "lowongan".
 *
 * The followings are the available columns in table 'lowongan':
 * @property integer $id_lowongan
 * @property integer $id_kategori
 * @property integer $id_perusahaan
 * @property string $id_provinsi
 * @property integer $id_kabkota
 * @property integer $id_jurusan
 * @property string $tgl_buat
 * @property string $pekerjaan
 * @property string $tipe_pekerjaan
 * @property string $deskripsi
 * @property string $persyaratan
 * @property string $tawaran_gaji
 * @property string $usia_max
 * @property string $jenis_kelamin
 * @property string $batas_lamaran
 * @property string $status
 * @property string $tgl_panggilan
 *
 * The followings are the available model relations:
 * @property TbKabkota $idKabkota
 * @property Perusahaan $idPerusahaan
 * @property Kategori $idKategori
 */
class Lowongan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lowongan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kategori, id_perusahaan, id_provinsi, id_kabkota, id_jurusan, tgl_buat, pekerjaan, tipe_pekerjaan, deskripsi, persyaratan, tawaran_gaji, usia_max, jenis_kelamin, batas_lamaran, tgl_panggilan', 'required'),
			array('id_kategori, id_perusahaan, id_kabkota, id_jurusan', 'numerical', 'integerOnly'=>true),
			array('id_provinsi, usia_max', 'length', 'max'=>2),
			array('pekerjaan', 'length', 'max'=>50),
			array('tipe_pekerjaan, status', 'length', 'max'=>15),
			array('tawaran_gaji', 'length', 'max'=>25),
			array('jenis_kelamin', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lowongan, id_kategori, id_perusahaan, id_provinsi, id_kabkota, id_jurusan, tgl_buat, pekerjaan, tipe_pekerjaan, deskripsi, persyaratan, tawaran_gaji, usia_max, jenis_kelamin, batas_lamaran, status, tgl_panggilan', 'safe', 'on'=>'search'),
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
			'idKabkota' => array(self::BELONGS_TO, 'TbKabkota', 'id_kabkota'),
			'idPerusahaan' => array(self::BELONGS_TO, 'Perusahaan', 'id_perusahaan'),
			'idKategori' => array(self::BELONGS_TO, 'Kategori', 'id_kategori'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lowongan' => 'Id Lowongan',
			'id_kategori' => 'Id Kategori',
			'id_perusahaan' => 'Id Perusahaan',
			'id_provinsi' => 'Id Provinsi',
			'id_kabkota' => 'Id Kabkota',
			'id_jurusan' => 'Id Jurusan',
			'tgl_buat' => 'Tgl Buat',
			'pekerjaan' => 'Pekerjaan',
			'tipe_pekerjaan' => 'Tipe Pekerjaan',
			'deskripsi' => 'Deskripsi',
			'persyaratan' => 'Persyaratan',
			'tawaran_gaji' => 'Tawaran Gaji',
			'usia_max' => 'Usia Max',
			'jenis_kelamin' => 'Jenis Kelamin',
			'batas_lamaran' => 'Batas Lamaran',
			'status' => 'Status',
			'tgl_panggilan' => 'Tgl Panggilan',
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

		$criteria->compare('id_lowongan',$this->id_lowongan);
		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('id_perusahaan',$this->id_perusahaan);
		$criteria->compare('id_provinsi',$this->id_provinsi,true);
		$criteria->compare('id_kabkota',$this->id_kabkota);
		$criteria->compare('id_jurusan',$this->id_jurusan);
		$criteria->compare('tgl_buat',$this->tgl_buat,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('tipe_pekerjaan',$this->tipe_pekerjaan,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('persyaratan',$this->persyaratan,true);
		$criteria->compare('tawaran_gaji',$this->tawaran_gaji,true);
		$criteria->compare('usia_max',$this->usia_max,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('batas_lamaran',$this->batas_lamaran,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tgl_panggilan',$this->tgl_panggilan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getAll(){
		$sql = "SELECT lowongan.id_lowongan, lowongan.id_kategori, kategori.nama_kategori, lowongan.id_perusahaan, perusahaan.nama_perusahaan, lowongan.id_kabkota, tb_kabkota.name, lowongan.id_jurusan, jurusan_pendidikan.nama_jurusan, lowongan.tgl_buat, lowongan.pekerjaan, lowongan.tipe_pekerjaan, lowongan.deskripsi, lowongan.persyaratan, lowongan.tawaran_gaji, lowongan.usia_max, lowongan.jenis_kelamin, lowongan.batas_lamaran, lowongan.status, lowongan.tgl_panggilan FROM lowongan INNER JOIN kategori, perusahaan, tb_kabkota, jurusan_pendidikan WHERE lowongan.id_kategori = kategori.id_kategori AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lowongan.id_kabkota = tb_kabkota.id_kabkota AND lowongan.id_jurusan = jurusan_pendidikan.id_jurusan ORDER BY lowongan.tgl_buat DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllByPelamarJurusan($id_jurusan){
		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d");
		$today = $date;


		$sql = "SELECT lowongan.id_lowongan, lowongan.id_kategori, kategori.nama_kategori, lowongan.id_perusahaan, perusahaan.nama_perusahaan, lowongan.id_kabkota, tb_kabkota.name, lowongan.id_jurusan, jurusan_pendidikan.nama_jurusan, lowongan.tgl_buat, lowongan.pekerjaan, lowongan.tipe_pekerjaan, lowongan.deskripsi, lowongan.persyaratan, lowongan.tawaran_gaji, lowongan.usia_max, lowongan.jenis_kelamin, lowongan.batas_lamaran, lowongan.status, lowongan.tgl_panggilan FROM lowongan INNER JOIN kategori, perusahaan, tb_kabkota, jurusan_pendidikan WHERE lowongan.id_kategori = kategori.id_kategori AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lowongan.id_kabkota = tb_kabkota.id_kabkota AND lowongan.id_jurusan = jurusan_pendidikan.id_jurusan AND lowongan.id_jurusan = '$id_jurusan' AND lowongan.batas_lamaran >= '$today' ORDER BY lowongan.id_lowongan DESC;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllByPk($id){
		$sql = "SELECT lowongan.id_lowongan, lowongan.id_kategori, kategori.nama_kategori, lowongan.id_perusahaan, perusahaan.nama_perusahaan, lowongan.id_kabkota, tb_kabkota.name, lowongan.id_jurusan, jurusan_pendidikan.nama_jurusan, lowongan.tgl_buat, lowongan.pekerjaan, lowongan.tipe_pekerjaan, lowongan.deskripsi, lowongan.persyaratan, lowongan.tawaran_gaji, lowongan.usia_max, lowongan.jenis_kelamin, lowongan.batas_lamaran, lowongan.status, lowongan.tgl_panggilan FROM lowongan INNER JOIN kategori, perusahaan, tb_kabkota, jurusan_pendidikan WHERE lowongan.id_kategori = kategori.id_kategori AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lowongan.id_kabkota = tb_kabkota.id_kabkota AND lowongan.id_jurusan = jurusan_pendidikan.id_jurusan AND lowongan.id_perusahaan = $id ORDER BY lowongan.tgl_buat DESC;";

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

	

	// public function keldesaList(){
	// 	$models = Keldesa::model()->findAll(array('condition' => 'id_kec = ' . $this->id_kec, 'order'=> 'nama'));
	// 	foreach ($models as $model)
	// 		$_items[$model->id_keldesa] = $model->nama;
	// 	return $_items;
	// }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lowongan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
