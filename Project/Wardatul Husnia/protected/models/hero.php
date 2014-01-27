<?php

class hero extends CActiveRecord{
public static function model($className=__CLASS__){
return parent::model($className);
}
//menentukan tabel yang akan digunakan
public function tableName(){
return"heroes";
}
//function rules untuk validasi
public function rules (){
return array(
array("name","required"),//set name wajib di isi
array("image","file",//set image harus bertipe file
"types"=>"jpg,gif,png",//tipe file yang di izinkan
"allowEmpty"=>true,),//diperbolehkan kosong
);
}
//set label
public function attributeLabels(){
return array (
"id"=>"ID",
"name"=>"Hero Name",
"image"=>"Hero Image",
);
}
}
?>
