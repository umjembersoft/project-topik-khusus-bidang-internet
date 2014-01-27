<?php
class TiketController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
	
	function actionCreate(){ 
		$model=new Tiket;
		if(isset($_POST['Tiket'])){
			$model->idkreta=$_POST['Tiket']['idkreta'];
			$model->tipe=$_POST['Tiket']['tipe'];
			$model->nama=$_POST['Tiket']['nama'];
			$model->kota_asal=$_POST['Tiket']['kota_asal'];
			$model->kota_tujuan=$_POST['Tiket']['kota_tujuan'];
			$model->jam_keberangkatan=$_POST['Tiket']['jam_keberangkatan'];
			$model->jam_kedatangan=$_POST['Tiket']['jam_kedatangan'];
			$model->harga_tiket=$_POST['Tiket']['harga_tiket'];
			
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

}

?>
