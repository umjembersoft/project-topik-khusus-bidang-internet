<?php
class VCD extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'film';// nama table
	}
	
	public function attributeLabels(){
		return array(
			'idfilm'=>'idfilm',
			'judul_film' => 'judul_film',// isis record
			'genre' => 'genre',
			'jumlah'=>'jumlah',
			
			
		
		);
	}
	
}
?>