<?php
class Layout extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'film';
	}
	
	public function attributeLabels(){
		return array(
			
			'idfilm'=>'idfilm',
			'judul_film' => 'judul_film',
			'genre' => 'genre',
			'jumlah'=>'jumlah',
			
			
			
			
		);
	}
	
}

?>