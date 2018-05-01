<?php

/**
 * This is the model class for table "notifikasi_lamaran".
 *
 * The followings are the available columns in table 'notifikasi_lamaran':
 * @property integer $id_lamaran
 * @property string $waktu
 * @property integer $sudah_dibaca
 *
 * The followings are the available model relations:
 * @property Lamaran $idLamaran
 */
class NotifikasiLamaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notifikasi_lamaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_lamaran, waktu, sudah_dibaca', 'required'),
			array('id_lamaran, sudah_dibaca', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lamaran, waktu, sudah_dibaca', 'safe', 'on'=>'search'),
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
			'idLamaran' => array(self::BELONGS_TO, 'Lamaran', 'id_lamaran'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lamaran' => 'Id Lamaran',
			'waktu' => 'Waktu',
			'sudah_dibaca' => 'Sudah Dibaca',
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
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('sudah_dibaca',$this->sudah_dibaca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NotifikasiLamaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getByPelamar($id_pelamar){
		$sql = "SELECT lamaran.id_lamaran, lamaran.id_pelamar, lamaran.id_lowongan, lamaran.status, lowongan.pekerjaan, perusahaan.nama_perusahaan, notifikasi_lamaran.sudah_dibaca, notifikasi_lamaran.waktu FROM lamaran INNER JOIN notifikasi_lamaran, lowongan, perusahaan WHERE lamaran.id_lamaran = notifikasi_lamaran.id_lamaran AND lamaran.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = perusahaan.id_perusahaan AND lamaran.id_pelamar = '$id_pelamar' AND notifikasi_lamaran.sudah_dibaca = '0';";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

    public function getCount($id_pelamar){
		$sql = "SELECT COUNT(*) as total_notifikasi FROM (
				SELECT COUNT(lamaran.id_lamaran) AS id_lamaran FROM lamaran INNER JOIN notifikasi_lamaran ON lamaran.id_lamaran = notifikasi_lamaran.id_lamaran AND lamaran.id_pelamar = '$id_pelamar' AND notifikasi_lamaran.sudah_dibaca = '0') t;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function sendMessage($telegram_id, $message_text, $secret_token) {
    	$url = "https://api.telegram.org/" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    	$url = $url . "&text=" . urlencode($message_text);
    	$ch = curl_init();
    	$optArray = array(
        	    CURLOPT_URL => $url,
            	CURLOPT_RETURNTRANSFER => true
    	);
    	curl_setopt_array($ch, $optArray);
    	$result = curl_exec($ch);
    	curl_close($ch);

    	echo "<script>alert('Pesan telegram berhasil terkirim!'); window.location.href = './';</script>";
		}
		/*----------------------
		only basic POST method :
		-----------------------*/
		// $telegram_id = $_POST ['telegram_id'];
		// $message_text = $_POST ['message_text'];
		/*--------------------------------
		Isi TOKEN dibawah ini: 
		--------------------------------*/
		//$secret_token = "bot579741209:AAHELNwUG-8hwTBnszEO4m5eMA_4AnJnnD8";
		//sendMessage($telegram_id, $message_text, $secret_token);
}
