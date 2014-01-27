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
			'tipe' => 'tipe',// isis record
			'nama' => 'nama ',
			
		
		);
	}
	
}
?>