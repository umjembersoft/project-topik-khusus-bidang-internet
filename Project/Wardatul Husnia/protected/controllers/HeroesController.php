<?php
class HeroesController extends Controller{
public $layout="column1";//set layout
//tentukan folder tempat penyimpanan file gambar
const URLUPLOAD="/../images/";
function actionCreate(){
$model=new Hero;//Panggil model hero 
if(isset($_POST["Hero"])){//jika data dikirim
//cek file
$cekfile=$model->image=CUploadFile::getInstance($model,"image");
if(empty($cekfile)){//jika file kosong
//ambil data yang diinput
$model->attributes=$_POST["Hero"];
$model->save();//simpan data
}else{
$model->attributes=$_POST["Hero"];
$model->image=CUploadFile::getInstance($model,"image");
if($model->save()){
$model->image->saveAs(Yii::app()->basePath.self::URLUPLOAD.$model->image.'');
$this->redirect(array("heroes/"));
}
}
}
$this->render('create',array('model'=>$model,));
}
function actionIndex(){
$data=Hero::model()->findAll();
$this->render('index',array('data'=>$data));
}
}
?>
