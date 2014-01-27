<?php
class FilmController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	

	public function actionIndex(){		
	
	
		$data = Film::model()->findAll();
		
		$this->render('index',array('data'=>$data));	
		
	}
	
	public function actionDelete($idfilm){
    // menghapus data berdasarkan primary key, 
    if(Film::model()->deleteByPk($idfilm)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
  
  public function actionUpdate($idfilm){
   // $data=new film;
        $model=Film::model()->findByPk($idfilm);
        
        if(isset($_POST['Film'])){
            $model->judul_film=$_POST['Film']['judul_film'];
			$model->genre=$_POST['Film']['genre'];
			$model->jumlah=$_POST['Flm']['jumlah'];
            
            if($model->save()){
                $this->redirect(array('index'));
            }
        }
        
        $this->render('update',array('model'=>$model,)); 
    
  }
	}
?>