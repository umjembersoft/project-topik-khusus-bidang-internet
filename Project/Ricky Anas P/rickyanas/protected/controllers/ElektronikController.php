<?php
class ElektronikController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
			
	function actionCreate(){ 
		$model=new Elektronik;
		
		if(isset($_POST['Elektronik'])){
		
			$model->idpembeli=$_POST['Elektronik']['idpembeli'];
			$model->namapembeli=$_POST['Elektronik']['namapembeli'];
			$model->alamat=$_POST['Elektronik']['alamat'];
			$model->nohp=$_POST['Elektronik']['nohp'];
			$model->Merk_Laptop=$_POST['Elektronik']['Merk_Laptop'];
			$model->Harga=$_POST['Elektronik']['Harga'];
			$model->Tahun_Produksi=$_POST['Elektronik']['Tahun_Produksi'];
			
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

}

?>
