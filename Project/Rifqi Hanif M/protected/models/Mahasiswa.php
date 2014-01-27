<?php
class Mahasiswa extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'mahasiswa';
	}
	
	public function attributeLabels(){
		return array(
			'nim' => 'NIM',
			'nama' => 'Nama',
			'jurusan' => 'Jurusan',
			
		
		);
	}
	
	
	
}
?>