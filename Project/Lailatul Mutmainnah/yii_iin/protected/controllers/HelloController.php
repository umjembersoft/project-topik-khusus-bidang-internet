<?php
class HelloController extends Controller{	

  public $layout="NULL";

 	function actionIndex(){
	    // menampilkan teks melalui controller/function
   	  echo "<title>BAB 2</title>";
      echo "Hello World. Aku sedang belajar Yii Framework :)";	
	} 
	
	function actionHellov(){
      // menampilkan teks dengan merender ke file yang ada pada views/hello/hellov.php
      $this->render("Hellov");
  }

  function actionHellov2(){
	   // $daray menampung data array
     $daray=array("Ichigo","Nigo","V3");

     // render ke file views/hellov2
     $this->render("hellov2", array('data'=>$daray));
  }

}
?>
