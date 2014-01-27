<?php
class Buku extends CActiveRecord{
	
	//untuk mengembalikan model statis yaitu buku
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	//untuk menentukan tabel yang digunakan
	public function tableName(){
		return 'buku';
	}
	//untuk menentukan label dari field yang kan diinput
	public function attributeLabels(){
		return array(
			'id' => 'ID',
			'judul' => 'Judul Buku',
			'penulis'=>'Penulis Buku',
			'id_kategori'=>'Kategori',
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
    $this->tanggal_terbit=date('d F, Y',strtotime(str_replace("-", "", $this->tanggal_terbit)));       
  }

  protected function beforeSave(){//untuk dapat menyimpan data dalam bentuk tanggal pada tabel buku dalam format Date
    if(parent::beforeSave()){

      // ubah tanggal 20 September, 2012 menjadi 2012-09-20	
      $this->tanggal_terbit=date('Y-m-d', strtotime(str_replace(",", "", $this->tanggal_terbit)));
      return TRUE;
    }else{
      return FALSE;
    }    		
  }


  public function rules(){ // membuat function rules
	  return array(
	    // tentukan field yang wajib di isi	
	    array('judul, penulis, id_kategori', 'required'),

	    // tentukan tipe data yang harus di input
	    array('id_kategori','numerical','integerOnly'=>true),	
	  );
  }
	
}

?>