<?php
class TugasController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
	

	public function actionIndex(){		
	
	
		$data = Tugas::model()->findAll();
		
		$this->render('index',array('data'=>$data));	
		
	}
	
	public function actionDelete($idkreta){
    // menghapus data berdasarkan primary key, 
    if(Tugas::model()->deleteByPk($idkreta)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
  
  public function actionUpdate($idkreta){
  //  $data=new kreta;
        $model=Tiket::model()->findByPk($idkreta);
        
        if(isset($_POST['Tiket'])){
            $model->nama=$_POST['Tiket']['nama'];
			$model->tipe=$_POST['Tiket']['tipe'];
			$model->kota_asal=$_POST['Tiket']['kota_asal'];
			$model->kota_tujuan=$_POST['Tiket']['kota_tujuan'];
			$model->jam_keberangkatan=$_POST['Tiket']['jam_keberangkatan'];
			$model->jam_kedatangan=$_POST['Tiket']['jam_kedatangan'];
			$model->harga_tiket=$_POST['Tiket']['harga_tiket'];
            
            if($model->save()){
                $this->redirect(array('index'));
            }
        }
        
        $this->render('update',array('model'=>$model,)); 
    
  }
	}
?>