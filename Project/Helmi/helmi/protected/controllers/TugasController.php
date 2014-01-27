<?php
class TugasController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	
	function actionCreate(){ 
		$model=new Tugas;
		if(isset($_POST['Tugas'])){
			$model->nim=$_POST['Tugas']['nim'];
			$model->nama=$_POST['Tugas']['nama'];
			$model->judul=$_POST['Tugas']['judul'];
			$model->status=$_POST['Tugas']['status'];
			$model->pembimbing=$_POST['Tugas']['pembimbing'];
			$model->penguji=$_POST['Tugas']['penguji'];
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}


	public function actionIndex(){		
	
	
		$data = Tugas::model()->findAll();	
		
		$this->render('index',array('data'=>$data));
  
	}
	
  public function actionDelete($nim){
    // menghapus data berdasarkan primary key, 
    if(Tugas::model()->deleteByPk($nim)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
}
?>
