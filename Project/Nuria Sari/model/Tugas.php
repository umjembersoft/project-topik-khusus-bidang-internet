<?php
class Tugas extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'tabelmhs';
	}
	
	public function attributeLabels(){
		return array(
			'nim' => 'nim',
			'nama' => 'nama ',
			'judul'=>'judul',
			'status'=>'status',
			'pembimbing'=>'pembimbing',
			'penguji'=>'penguji',
			
		);
	}
	
}

?>