<?php
class MataKuliah extends CASctiveRecord{
public static function model ($className=__CLASS__){
return parent::model($className);
}
public function tableName(){
return 'matakuliah';;
}
public function attributeLabel(){
return array(
'Id_matakuliah' => 'ID'
'Nama_matakuliah' => 'nama_matkul'
'Ruang' => 'ruang'
);
}
public function relations(){
return array(
'mahasiswa' => array(self::BELLONGS_TO, 'mahasiswa','NIM'),);
)
}
}
?>