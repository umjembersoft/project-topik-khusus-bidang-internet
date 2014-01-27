<?php
class FilmController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	
	function actionCreate(){ 
		$model=new Film;
		if(isset($_POST['Film'])){
			$model->id=$_POST['Film']['id'];
			$model->judul=$_POST['Film']['judul'];
			$model->genre=$_POST['Film']['genre'];
			$model->tanggal_release=$_POST['Film']['tanggal_release'];
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	
	public function actionIndex(){		
		$data = Film::model()->findAll();
		$this->render('index',array('data'=>$data));		
	}
	
	public function actionUpdate($id){
   
    $model=Film::model()->findByPk($id);
    if(isset($_POST['Film'])){
        	// set data pada model buku
        $model->judul=$POST['Film']['id'];
 		$model->judul=$_POST['Film']['judul'];
 		$model->genre=$_POST['Film']['genre'];
		$model->tanggal_release=$Post['Film']['tanggal_release'];

        	// simpan data (jika berhasil)
        	if($model->save()){
            		//alihkan ke halaman index 
            		$this->redirect(array('index'));
        }
    }
    // render ke form update
    $this->render('update',array(
        'model'=>$model,
    ));
  }
	
	public function actionDelete($id){
    // menghapus data berdasarkan primary key, 
    if(Film::model()->deleteByPk($id)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
  }
?>