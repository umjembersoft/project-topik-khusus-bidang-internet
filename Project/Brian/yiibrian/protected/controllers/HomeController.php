<?php
class HomeController extends Controller{

	/*Jika anda ingin menggunakan layout ini pada setiap action/function dalam controller ini
	 *maka silahkan buang komentar kode sibawah ini.
	 *
	 * front_template merupakan nama file layout kita yang ada didalam folder views/layout
	 */
           public $layout="front_template";

	public function acctionIndex(){
	   /*kode $this->layout ini digunakan untuk jika anda ingin menggunakan template
	    *yang berbeda akan suatu function
	    */
	    $this->layout ="front_template";

	    /*
	     * ini digunakan untuk merender ke file index.php yang kosong, sehingga
   	     * template/layout yang ingin kita setting dapat kita lihat
	     * sudah berjalan dengan baik atau belum
	     * dan file index.php akan kita gunakan sebagai halaman
 	     */
	     $this->render('index');
	
	}
	
}
?>