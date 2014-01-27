<?php
class LinkController extends Controller{
	
  public $layout="NULL";
	
	function actionIndex(){
		$this->render("index");	
	}
	
	function actionRiders(){
		$this->render("riders");
	}
}
?>
