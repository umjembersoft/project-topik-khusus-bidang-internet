<?php
class FormController extends Controller{
	public $layout="NULL";
	public function actionIndex(){
	
	$angka1 = $_POST["angka1"];
	$angka2 = $_POST["angka2"];
     	if (isset($_POST["jumlah"])){
           $hasil = $angka1 + $angka2;
     	}else if (isset($_POST["kurang"])){
           $hasil = $angka1 - $angka2;
    	 }else if (isset($_POST["kali"])){
           $hasil = $angka1 * $angka2;
        }else if (isset($_POST["bagi"])){
           $hasil = $angka1 / $angka2;
        }


	/*
		//$view=new create;
			$angka1= $_GET['create']['angka1'];
			$angka2=$_GET['create']['angka2'];
			$operator=$_GET['create']['operator'];
			
			if(operator==kali){
			$a=$angka1*$angka2;
							
			}elseif(operator == bagi){
				$a=$angka1/$angka2;
			}elseif(operator == tambah){
			$a=$angka1+$angka2;	
			}elseif(operator == kurang){
			$a=$angka1-$angka2;	
			}
			}
		//$a=2+3;
		//$this->render('index', array('hasil'=>$a,));
		}
		*/
	$this->render("index");
?>

