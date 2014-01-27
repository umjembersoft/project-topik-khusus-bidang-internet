<?php
class Kuis extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'informasi';
	}
	
	public function attributeLabels(){
		return array(
			'nama' => 'nama',
			'penghasilan' => 'penghasilan',
			'jabatan'=>'jabatan',
			'instansi'=>'instansi',
			
		);
	}
	
}

?>