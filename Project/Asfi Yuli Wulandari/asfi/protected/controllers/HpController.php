<?php
class HpController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	
	function actionCreate(){ 
	$data = Hp::model()->findAll();
		$model=new Hp;
		if(isset($_POST['Hp'])){
			$model->id=$_POST['Hp']['id'];
			$model->tipe=$_POST['Hp']['tipe'];
			$model->nama_pembeli=$_POST['Hp']['nama_pembeli'];
			$model->Merk=$_POST['Hp']['Merk'];
			$model->id_kategori=$_POST['Hp']['id_kategori'];
			$model->alamat=$_POST['Hp']['alamat'];
			
  		if($model->save()){
  			Yii::app()->user->setFlash('success', "Data berhasil disimpan !");
				$this->redirect(array('index'));
				
			}
        //$this->refresh();
					
		}
		
		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionIndex(){		
		$data = Hp::model()->findAll();
		$this->render('index',array('data'=>$data));		
	}
	
	public function actionUpdate($id){
		$model=Hp::model()->findByPk($id);
		if(isset($_POST['Hp'])){
			$model->id=$_POST['Hp']['id'];
			$model->tipe=$_POST['Hp']['tipe'];
			$model->nama_pembeli=$_POST['Hp']['nama_pembeli'];
			$model->Merk=$_POST['Hp']['Merk'];
			$model->id_kategori=$_POST['Hp']['id_kategori'];
			$model->alamat=$_POST['Hp']['alamat'];
			
			if($model->save()){
				Yii::app()->user->setFlash('success', "Data berhasil diupdate !");
				$this->redirect(array('index'));
				
			}
		}	
				$this->render('update',array(
				'model'=>$model,));
	}		


	public function actionDelete($id){
		if(Hp::model()->deleteByPk($id)){
			$this->redirect(array(self::INDEX));
		}else{
			throw new CHttpException(404,'The request page does not exist');
		}
	}
	}
?>
