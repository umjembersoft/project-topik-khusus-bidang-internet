<?php
class Toko extends CActiveRecord{

	public static function model($className=__CLASS__){
			return parent::model($className);
	}
	
	public function tableName(){
	return 'toko';
	}
	
	public function attributeLabels(){
		return array(
			'id' => 'id',
			'nama' => 'nama',
			'id_kategori'=>'kategori',
			'harga'=>'harga',
			
		);
	}
	public function relations(){ // pembuatan function relations
    return array(
	    // menentukan classname dan tipe relation	
        'kategori' => array(self::BELONGS_TO,
        'kategori', // nama tabel/nama model
        'id_kategori' // foreign key
        ),
    );
  }
	
}
?>
	