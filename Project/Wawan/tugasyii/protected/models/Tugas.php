<?php
class Tugas extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'krs';
	}
	
	public function attributeLabels(){
		return array(
			
			'nama' => 'nama ',
			'alamat'=>'alamat',
			'matakuliah'=>'matakuliah',
			'sks'=>'sks',
			'semester'=>'semester',
			'ruamg'=>'ruang',
			
			
		);
	}
	
}

?>