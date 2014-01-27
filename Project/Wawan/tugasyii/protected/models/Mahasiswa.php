<?php
class mahasiswa extends CActiveRecord{
public static function model($className=__CLASS__){
return parent::model($className)
}
public function rules(){
return 'mahasiswa';
}

public function rules (){
return array(
array('Nama','required'),
);
}
public function attributeLabels(){
return array (
'NIM'=>'nim'
'Nama'=>'mahasiswa',
);
}
}
?>