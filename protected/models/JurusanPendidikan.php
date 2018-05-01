<?php

/**
 * This is the model class for table "jurusan_pendidikan".
 *
 * The followings are the available columns in table 'jurusan_pendidikan':
 * @property integer $id_jurusan
 * @property string $nama_jurusan
 *
 * The followings are the available model relations:
 * @property Lowongan[] $lowongans
 * @property Pelamar[] $pelamars
 */
class JurusanPendidikan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jurusan_pendidikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_jurusan', 'required'),
			array('nama_jurusan', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_jurusan, nama_jurusan', 'safe', 'on'=>'search'),
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
			'lowongans' => array(self::HAS_MANY, 'Lowongan', 'id_jurusan'),
			'pelamars' => array(self::HAS_MANY, 'Pelamar', 'id_jurusan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_jurusan' => 'Id Jurusan',
			'nama_jurusan' => 'Nama Jurusan',
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

		$criteria->compare('id_jurusan',$this->id_jurusan);
		$criteria->compare('nama_jurusan',$this->nama_jurusan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JurusanPendidikan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
