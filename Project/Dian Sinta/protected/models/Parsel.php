<?php

/**
 * This is the model class for table "parsel".
 *
 * The followings are the available columns in table 'parsel':
 * @property string $namabarang
 * @property integer $harga
 * @property string $ukuran
 * @property string $lama_pesan
 */
class Parsel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parsel the static model class
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
		return 'parsel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namabarang, harga, ukuran, lama_pesan', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('namabarang, ukuran, lama_pesan', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('namabarang, harga, ukuran, lama_pesan', 'safe', 'on'=>'search'),
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
	public function attributeLabels()
	{
		return array(
			'namabarang' => 'Namabarang',
			'harga' => 'Harga',
			'ukuran' => 'Ukuran',
			'lama_pesan' => 'Lama Pesan',
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

		$criteria->compare('namabarang',$this->namabarang,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('ukuran',$this->ukuran,true);
		$criteria->compare('lama_pesan',$this->lama_pesan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}