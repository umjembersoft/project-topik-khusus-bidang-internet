<?php
class Kategori extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'kategori';
	}
	
	public function rules(){
		return array(
			array('nm_kategori', 'required'),	 
		);
	}
	
	public function attributeLabels(){
		return array(
			'id_kategori' => 'ID',
			'nm_kategori' => 'Kategori',		
		);
	}
}
?>