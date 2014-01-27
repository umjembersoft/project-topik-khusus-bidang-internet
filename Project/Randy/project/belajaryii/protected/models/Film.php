<?php
class Film extends CActiveRecord{
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'film';
	}
	
	public function attributeLabels(){
		return array(
			'id' => 'ID',
			'judul' => 'Judul Film',
			'genre'=>'Genre Film',
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
			protected function afterFind(){ // membuat function afterfind
    parent::afterFind();

    // ubah format tanggal 2012-09-20 menjadi 20 September, 2012
    $this->tanggal_release=date('d F, Y',strtotime(str_replace("-", "", $this->tanggal_release)));       
  }

  protected function beforeSave(){
    if(parent::beforeSave()){

      // ubah tanggal 20 September, 2012 menjadi 2012-09-20	
      $this->tanggal_release=date('Y-m-d', strtotime(str_replace(",", "", $this->tanggal_release)));
      return TRUE;
    }else{
      return FALSE;
    }    		
  }
  public function rules(){ // membuat function rules
	  return array(
	    // tentukan field yang wajib di isi	
	    array('id, judul, genre, tanggal_release','required'),

	    // tentukan tipe data yang harus di input
	    array('id_kategori','numerical','integerOnly'=>true),	
	  );
  }
}
	
?>