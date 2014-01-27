<?php

/**
 * This is the model class for table "tbl_mhs".
 *
 * The followings are the available columns in table 'tbl_mhs':
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 */
class TblMhs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblMhs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mhs'; #nama tbl_mhs
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nim', 'required'),
			array('nim', 'length', 'max'=>10),
			array('nama, alamat', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('tanggal_lahir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nim, nama, alamat, tanggal_lahir, jenis_kelamin', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() #atribut label
	{
		return array(
			'nim' => 'NIM',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nim',$this->nim,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}