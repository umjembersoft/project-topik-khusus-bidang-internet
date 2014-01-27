<?php
class OpenController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="open2";
	

	public function actionIndex(){		
	
		
		$this->render('open2');	
		
	}
}
?>