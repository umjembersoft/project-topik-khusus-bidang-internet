<?php
class TokoController extends Controller{
public $layout="helmi";
	const INDEX="index";
	
	public function actionCreate(){ 
		$model=new Toko;
		if(isset($_POST['Toko'])){
			$model->id=$_POST['Toko']['id'];
			$model->nama=$_POST['Toko']['nama'];
			$model->id_kategori=$_POST['Toko']['id_kategori'];
			$model->harga=$_POST['Toko']['harga'];
  		if ($model->save()){
			$this->redirect(array('index'));
			}	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionIndex(){
		$data = Toko::model()->findAll();	
		$this->render('index',array('data'=>$data));
		}
		
	public function actionUpdate($id){
		$model= Toko::model()->findByPk($id);
		if(isset($_POST['Toko'])){
			$model->id=$_POST['Toko']['id'];
			$model->nama=$_POST['Toko']['nama'];
			$model->kategori=$_POST['Toko']['kategori'];
			$model->harga=$_POST['Toko']['harga'];
			
  		if ($model->save()){
			$this->redirect(array('index'));
			}
		}
	$this->render('update',array(
		'model'=>$model,
	));
	}
			
	public function actionDelete($id){
    if(Toko::model()->deleteByPk($id)){
        $this->redirect(array(self::INDEX));
    }else{
        // jika proses menghapus data gagal, tampilkan error 404        
        throw new CHttpException(404,'The requested page  does not exist.');
    }
  }
}
	
?>
		