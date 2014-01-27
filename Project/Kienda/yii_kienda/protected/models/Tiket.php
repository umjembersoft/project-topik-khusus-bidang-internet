<?php
class Tiket extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'kreta';// nama table
	}
	
	public function attributeLabels(){
		return array(
			'idkreta'=>'idkreta',
			'tipe' => 'tipe',// isis record
			'nama' => 'nama ',
			'kota_asal'=>'kota_asal',
			'kota_tujuan'=>'kota_tujuan',
			'jam_keberangkatan'=>'jam_keberangkatan',
			'jam_kedatangan'=>'jam_kedatangan',
			'harga_tiket'=>'harga_tiket',
			
		
		);
	}
	
}
?>