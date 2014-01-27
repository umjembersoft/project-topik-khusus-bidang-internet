<?php

class Penerbit extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'penerbit';
	}

	public function rules()
	{
		return array(
			array('IDPENERBIT', 'required'),
			array('IDPENERBIT', 'length', 'max'=>20),
			array('IDCUSTOMER', 'length', 'max'=>20),
			array('HARGA', 'length', 'max'=>11),
			array('NAMAPENERBIT', 'length', 'max'=>20),
			array('ALAMATPENERBIT', 'length', 'max'=>20),
			array('TGLLAHIRPENERBIT', 'length', 'max'=>20),
			array('NOTLPPENERBIT', 'safe'),
			array('IDPENERBIT, IDCUSTOMER, HARGA, NAMAPENERBIT,ALAMATPENERBIT,TGLLAHIRPENERBIT, NOTLPPENERBIT', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'IDPENERBIT' => 'IDPENERBIT',
			'IDCUSTOMER' => 'IDCUSTOMER',
			'HARGA' => 'HARGA',
			'NAMAPENERBIT' => 'NAMAPENERBIT',
			'ALAMATPENERBIT' => 'ALAMATPENERBIT',
			'TGLLAHIRPENERBIT' => 'TGLLAHIRPENERBIT',
			'NOTLPPENERBIT' => 'NOTLPPENERBIT',
				);
	}

	public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('IDPENERBIT',$this->IDPENERBIT,true);
		$criteria->compare('IDCUSTOMER',$this->IDCUSTOMER,true);
		$criteria->compare('HARGA',$this->HARGA,true);
		$criteria->compare('NAMAPENERBIT',$this->NAMAPENERBIT,true);
		$criteria->compare('ALAMATPENERBIT',$this->ALAMATPENERBIT,true);
		$criteria->compare('TGLLAHIRPENERBIT',$this->TGLLAHIRPENERBIT,true);
		$criteria->compare('NOTLPPENERBIT',$this->NOTLPPENERBIT,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}