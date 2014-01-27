<?php
class NamaController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	

	public function actionIndex(){		
	
	
		$data = Nama::model()->findAll();
		
		$this->render('index',array('data'=>$data));	
		
	}
	
	 public function actionDelete($idpembeli){
    // menghapus data berdasarkan primary key, 
    if(Nama::model()->deleteByPk($idpembeli)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
  //fungsi update
    public function actionUpdate($idpembeli){
      //  $data=new Elektronik;        
		$model=Elektronik::model()->findByPk($idpembeli);
		if(isset($_POST['Elektronik'])){					
			$model->namapembeli=$_POST['Elektronik']['namapembeli'];
			$model->alamat=$_POST['Elektronik']['alamat'];
			$model->nohp=$_POST['Elektronik']['nohp'];
			$model->Merk_Laptop=$_POST['Elektronik']['Merk_Laptop'];
			$model->Harga=$_POST['Elektronik']['Harga'];
			$model->Tahun_Produksi=$_POST['Elektronik']['Tahun_Produksi'];
            
            if($model->save()){
                $this->redirect(array('index'));
            }
        }
        
        $this->render('update',array('model'=>$model,));
    }
  
  
  
	}
?>