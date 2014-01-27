<?php
class Elektronik extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'daftarpembeli';// nama table
	}
	
	public function attributeLabels(){
		return array(
			'idpembeli'=>'idpembeli',
			'namapembeli' => 'namapembeli',// isi record
			'alamat' => 'alamat',
			'nohp' => 'nohp',
			'Merk_Laptop' => 'Merk_Laptop',
			'Harga' => 'Harga',
			'Tahun_Produksi' => 'Tahun_Produksi',
		
		);
	}
	
}
?>