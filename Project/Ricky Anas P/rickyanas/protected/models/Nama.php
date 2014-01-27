<?php
class Nama extends CActiveRecord{
	
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
			'nohp'=>'nohp',
			'tahun_produksi'=>'tahun_produksi',
			
		
		);
	}
	
}
?>