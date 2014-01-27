<?php
class CdController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	
	function actionCreate(){ 
		$model=new Cd;
		if(isset($_POST['Cd'])){
			$model->judul=$_POST['Cd']['judul'];
			$model->pembuat=$_POST['Cd']['pembuat'];
			$model->id_kategori=$_POST['Cd']['id_kategori'];
			$model->tanggal_terbit=$_POST['Cd']['tanggal_terbit'];
			
      if($model->save()){
          // skrip SetFlash  
          Yii::app()->user->setFlash('success', "Data berhasil disimpan!");
          $this->redirect(array('index'));		
      }				
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionIndex(){		
	   $criteria= new CDbCriteria();

    // hitung jumlah data buku	
    $count= Buku::model()->count($criteria);

	  // panggil class Cpagination dengan parameter $count	
    $pages = new CPagination($count);
	
    // tentukan jumlah data yang ditampilkan per halaman
    $pages->pageSize=5;
    $pages->applyLimit($criteria);
		
    // sorting
    $sort= new CSort('Cd');

    // tentukan field yang akan di sorting
    $sort->attributes=array('id','judul','pembuat','id_kategori','tanggal_terbit');
    $sort->applyOrder($criteria);
	
 	  // cari data dengan parameter $criteria	
    $data=Buku::model()->findAll($criteria);
		
    $this->render('index',array(
        'data'=>$data, // panggil $data
        'pages'=>$pages, // panggil $pages
        'sort'=>$sort, // panggil $sort
    ));
	}
    
  public function actionUpdate($id){
    // mendapatkan data berdasarkan primary key
    $model=Cd::model()->findByPk($id);
    // jika data dikirim 
    if(isset($_POST['Cd'])){
        	// set data pada model buku
 		$model->judul=$_POST['Cd']['judul'];
 		$model->pembuat=$_POST['Cd']['pembuat'];

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
	   $model = Cd::model()->findAll($criteria);
		
	   // render ke file views\buku\kriteria.php	
	   $this->render('kriteria',array(
	     'data'=>$model // panggil $model 
	   ));
  }
	
}
?>
