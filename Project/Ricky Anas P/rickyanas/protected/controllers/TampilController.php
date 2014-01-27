<?php
class TampilController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	

	public function actionIndex(){		
	
		
		$this->render('index');	
		
	}
}
?>