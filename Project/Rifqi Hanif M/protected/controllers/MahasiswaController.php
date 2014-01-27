<?php
class MahasiswaController extends Controller{
	 
	//public $layout="column1"; 
	//const INDEX="index";
	
	
	function actionCreate(){ 
		$model=new Mahasiswa;
		if(isset($_POST['Mahasiswa'])){
			$model->nim=$_POST['Mahasiswa']['nim'];
			$model->nama=$_POST['Mahasiswa']['nama'];
			$model->jurusan=$_POST['Mahasiswa']['jurusan'];
			
  		$model->save();	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	//fungsi cari data
	public function actionSearch() {
		 
		$jurusan = $_POST['jurusan'];
		$criteria = new CDbCriteria( array(
		//spesifik field
			'select' => '*',
		//where kondition
			'condition' => "jurusan LIKE '$jurusan%'",

		//order by
			'order' => 'nim ASC', ));

		$model = Mahasiswa::model() -> findAll($criteria);

		
		$this -> render('search', array('data' => $model));
	}

	//fungsi read
    public function actionIndex(){
            $model = new Mahasiswa;
            $data= $model->findAll();
            $this->render('index',array('data'=>$data));
    }
	
	//fungsi update
    public function actionUpdate($nim){
        $data=new Mahasiswa;
        $model=$data->findByPk($nim);
        
        if(isset($_POST['Mahasiswa'])){
            $model->nim=$_POST['Mahasiswa']['nim'];
            $model->nama=$_POST['Mahasiswa']['nama'];
			$model->jurusan=$_POST['Mahasiswa']['jurusan'];
            
            if($model->save()){
                $this->redirect(array('index'));
            }
        }
        
        $this->render('update',array('model'=>$model));
    }
	 
	//Fungsi delete
	public function actionDelete($nim){
        $model = new Mahasiswa;
        if($model->deleteByPk($nim)){
            $this->redirect(array('index'));
        }else{
            throw new CHttpException(404,'Data yang di minta tidak tersedia');
        }
		
	

}	
}
?>
