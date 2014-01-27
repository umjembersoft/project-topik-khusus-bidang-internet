<?php
class BukuController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	
	function actionCreate(){ 
		$model=new Buku;
		if(isset($_POST['Buku'])){
			$model->judul=$_POST['Buku']['judul'];
			$model->penulis=$_POST['Buku']['penulis'];
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionIndex(){		
		$data = Buku::model()->findAll();
		$this->render('index',array('data'=>$data));		
	}

  public function actionUpdate($id){
    // mendapatkan data berdasarkan primary key
    $model=Buku::model()->findByPk($id);
    // jika data dikirim 
    if(isset($_POST['Buku'])){
        	// set data pada model buku
 		$model->judul=$_POST['Buku']['judul'];
 		$model->penulis=$_POST['Buku']['penulis'];

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
    if(Buku::model()->deleteByPk($id)){
        // setelah berhasil menghapus data, alihkan ke index
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }

  function actionKriteria(){
	   // untuk memanggil CDbCriteria
	   $criteria=new CDbCriteria(array(
	     //order by
	     'order'=>'id DESC',		 
	   ));
	   // untuk find semua data dengan parameter $criteria	
	   $model = Buku::model()->findAll($criteria);
		
	   // render ke file views\buku\kriteria.php	
	   $this->render('kriteria',array(
	     'data'=>$model // panggil $model 
	   ));
  }
	
}
?>
