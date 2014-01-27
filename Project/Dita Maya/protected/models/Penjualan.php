<?php

/**
 * This is the model class for table "penjualan".
 *
 * The followings are the available columns in table 'penjualan':
 * @property integer $id
 * @property string $kode
 * @property integer $harga_jual
 * @property integer $jumlah_jual
 * @property integer $sub_total
 * @property string $nama_client
 * @property string $waktu_penjualan
 */
class Penjualan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penjualan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, kode, harga_jual, jumlah_jual, sub_total, nama_client, waktu_penjualan', 'required'),
			array('id, harga_jual, jumlah_jual, sub_total', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>7),
			array('nama_client', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode, harga_jual, jumlah_jual, sub_total, nama_client, waktu_penjualan', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'kode' => 'Kode',
			'harga_jual' => 'Harga Jual',
			'jumlah_jual' => 'Jumlah Jual',
			'sub_total' => 'Sub Total',
			'nama_client' => 'Nama Client',
			'waktu_penjualan' => 'Waktu Penjualan',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('harga_jual',$this->harga_jual);
		$criteria->compare('jumlah_jual',$this->jumlah_jual);
		$criteria->compare('sub_total',$this->sub_total);
		$criteria->compare('nama_client',$this->nama_client,true);
		$criteria->compare('waktu_penjualan',$this->waktu_penjualan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Penjualan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
