<?php
class HeroesController extends Controller{
   public $layout="column1"; // set layout 

   // tentukan folder tempat penyimpanan file gambar	
   const URLUPLOAD='/../images/'; 
 
   function actionCreate(){
      $model=new Hero; // panggil model hero
      if(isset($_POST['Hero'])){ //jika data dikirim
   	    // cek file	
   	    $cekfile=$model->image=CUploadedFile::getInstance($model,'image');

	      if(empty($cekfile)){ //jika file kosong
           // ambil data yg di input
      	   $model->attributes=$_POST['Hero'];	
      	   $model->save(); //simpan data
   	    }else{ // jika file tidak kosong
		      // ambil data yg diinput
      	  $model->attributes=$_POST['Hero'];
      	  // ambil file
      	  $model->image=CUploadedFile::getInstance($model,'image');
      	if($model->save()){ //jika data disimpan
         	   // upload image ke folder 
         	   $model->image->saveAs(Yii::app()->basePath.self::URLUPLOAD.$model->image.'');

         	   // alihkan ke halaman index/function actionIndex()
         	   $this->redirect(array('heroes/'));
      	}
   	   }
     }
	   // render ke views\heroes\create.php
     $this->render('create',array(
		    'model'=>$model,
	   ));
   }
	
   function actionIndex(){ 
      $data=Hero::model()->findAll(); // ambil data

      // render ke views\heroes\index.php
      $this->render('index',array('data'=>$data));
   }
}
?>
