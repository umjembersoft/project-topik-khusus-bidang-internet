<?php
class Tugas extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'kreta';
	}
	
	public function attributeLabels(){
		return array(
			
			'idkreta' => 'idkreta ',
			'nama'=>'nama',
			'tipe'=>'tipe',
			'kota_asal'=>'kota_asal',
			'kota_tujuan'=>'kota_tujuan',
			'jam_keberangkatan'=>'jam_keberangkatan',
			'jam_kedatangan'=>'jam_kedatangan',
			'harga_tiket'=>'harga_tiket',
			
			
			
		);
	}
	
}

?>