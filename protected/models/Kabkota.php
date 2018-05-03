<?php

/**
 * This is the model class for table "tb_kabkota".
 *
 * The followings are the available columns in table 'tb_kabkota':
 * @property integer $id_kabkota
 * @property string $id_provinsi
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Lowongan[] $lowongans
 * @property Pelamar[] $pelamars
 * @property Perusahaan[] $perusahaans
 * @property TbProvinsi $idProvinsi
 */
class Kabkota extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_kabkota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kabkota, id_provinsi, name', 'required'),
			array('id_kabkota', 'numerical', 'integerOnly'=>true),
			array('id_provinsi', 'length', 'max'=>2),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kabkota, id_provinsi, name', 'safe', 'on'=>'search'),
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
			'lowongans' => array(self::HAS_MANY, 'Lowongan', 'id_kota'),
			'pelamars' => array(self::HAS_MANY, 'Pelamar', 'id_kota'),
			'perusahaans' => array(self::HAS_MANY, 'Perusahaan', 'id_kota'),
			'idProvinsi' => array(self::BELONGS_TO, 'TbProvinsi', 'id_provinsi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kabkota' => 'Id Kabkota',
			'id_provinsi' => 'Id Provinsi',
			'name' => 'Name',
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

		$criteria->compare('id_kabkota',$this->id_kabkota);
		$criteria->compare('id_provinsi',$this->id_provinsi,true);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kabkota the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}