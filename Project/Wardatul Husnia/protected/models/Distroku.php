<?php

/**
 * This is the model class for table "distroku".
 *
 * The followings are the available columns in table 'distroku':
 * @property integer $kode_barang
 * @property string $nama_barang
 * @property string $stok
 * @property integer $harga
 * @property string $kondisi
 */
class Distroku extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'distroku';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	 /* public function rules()
	  {
return array(
array('Nama, Email, No_tlp, id_barang','required'),
array('id_barang','numerical','integerOnly'=>true),
);
}*/
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_barang, stok, harga, kondisi', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('nama_barang', 'length', 'max'=>20),
			array('stok', 'length', 'max'=>5),
			array('kondisi', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode_barang, nama_barang, stok, harga, kondisi', 'safe', 'on'=>'search'),
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
			'kode_barang' => 'Kode Barang',
			'nama_barang' => 'Nama Barang',
			'stok' => 'Stok',
			'harga' => 'Harga',
			'kondisi' => 'Kondisi',
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

		$criteria->compare('kode_barang',$this->kode_barang);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('stok',$this->stok,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('kondisi',$this->kondisi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Distroku the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
