<?php
class Pembeli extends CActiveRecord{
public static function model($className=_CLASS_){
return parent::model($className);
}
public function tableName(){
return 'pembeli';
}
public function rules(){
return array(
array('nama_categori', 'required'),
);
}
public function attributeLabels(){
return array(
'id' ='ID',
'nama_pembeli' => 'pembeli',
);
}
}
?>