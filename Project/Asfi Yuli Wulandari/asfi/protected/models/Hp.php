<?php
class Hp extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'hp';// nama table
	}
	
	public function attributeLabels(){
		return array(
			'id' => 'id',
			'tipe' => 'tipe',// isis record
			'nama_pembeli' => 'nama_pembeli',
			'Merk' => 'Merk',
			'id_kategori'=>'kategori',
			'alamat' => 'alamat',
		
		);
		
	}
	
	public function relations(){
		return array(
			'kategori' => array(self::BELONGS_TO,
			'kategori',
			'id_kategori'
			),
		);
	}
	
}
?>