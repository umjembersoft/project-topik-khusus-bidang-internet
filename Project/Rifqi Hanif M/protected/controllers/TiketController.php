<?php
class TiketController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
	
	function actionCreate(){ 
		$model=new Tiket;
		if(isset($_POST['Tiket'])){
			$model->tipe=$_POST['Tiket']['tipe'];
			$model->nama=$_POST['Tiket']['nama'];
			
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	
}
?>
