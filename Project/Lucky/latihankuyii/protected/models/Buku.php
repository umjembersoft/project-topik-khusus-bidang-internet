<?php

class Buku extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'buku';
	}

	public function rules()
	{
		return array(
			array('IDBUKU', 'required'),
			array('IDBUKU', 'length', 'max'=>20),
			array('JUDULBUKU', 'length', 'max'=>20),
			array('JENISBUKU', 'length', 'max'=>20),
			array('GENRE', 'length', 'max'=>20),
			array('TAHUNTERBIT', 'safe'),
			array('IDBUKU, JUDULBUKU, JENISBUKU, GENRE, TAHUNTERBIT', 'safe', 'on'=>'search'),
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
			'IDBUKU' => 'IDBUKU',
			'JUDULBUKU' => 'JUDULBUKU',
			'JENISBUKU' => 'JENISBUKU',
			'GENRE' => 'GENRE',
			'TAHUNTERBIT' => 'TAHUNTERBIT',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('IDBUKU',$this->IDBUKU,true);
		$criteria->compare('JUDULBUKU',$this->JUDULBUKU,true);
		$criteria->compare('JENISBUKU',$this->JENISBUKU,true);
		$criteria->compare('GENRE',$this->GENRE,true);
		$criteria->compare('TAHUNTERBIT',$this->TAHUNTERBIT,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}