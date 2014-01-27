<?php
class TugasController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	

	public function actionIndex(){		
	
	
		$data = Tugas::model()->findAll();
		
		$this->render('index',array('data'=>$data));	
		
	}
	}
?>