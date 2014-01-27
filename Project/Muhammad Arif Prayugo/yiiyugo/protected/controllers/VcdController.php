<?php
class VcdController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
	
	function actionCreate(){ 
		$model=new VCD;
		if(isset($_POST['VCD'])){
			$model->idfilm=$_POST['VCD']['idfilm'];
			$model->judul_film=$_POST['VCD']['judul_film'];
			$model->genre=$_POST['VCD']['genre'];
			$model->jumlah=$_POST['VCD']['jumlah'];
			
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

}

?>
