<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of buku
 *
 * @author Jin Toples
 */
class buku extends CActiveRecord{
    //put your code here
    
    public static function model($className = __CLASS__) {
        parent::model($className);
    }
    
    public function tablename(){
        return 'buku';
    }
    
    public function attributeLabels() {
        return array('id'=>'id','judul'=>'judul buku','penulis'=>'penulis buku');
    }
    
    public function relations(){
        return array('kategori'=>array(self::BELONGS_TO, 'kategori','id_kategori'));
    }
}

?>
