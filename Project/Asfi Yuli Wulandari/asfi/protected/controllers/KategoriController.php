<?php


class KategoriController extends Controller {
    //put your code here
    public $layout='column1';
    const INDEX = 'index';
    
    //function create
    public function actionCreate(){
        $model=new kategori;
        
        if(isset($_POST['kategori'])){
            $model->nama_kategori = $_POST['kategori']['nama_kategori'];
            $model->save();
        }
        
        $this->render('create',array('model'=>$model));
    }
    
    //function index ( read )
    public function actionIndex(){
            $model = new kategori;
            $data= $model->findAll();
            $this->render('index',array('data'=>$data));
    }
    
    //function update
    public function actionUpdate($id){
        $data=new kategori;
        $model=$data->findByPk($id);
        
        if(isset($_POST['kategori'])){
            $model->nama_kategori=$_POST['kategori']['nama_kategori'];
            
            if($model->save()){
                $this->redirect(array('index'));
            }
        }
        
        $this->render('update',array('model'=>$model));
    }
    
    //function delete
    public function actionDelete($id){
        $model = new kategori;
        if($model->deleteByPk($id)){
            $this->redirect(array(self::INDEX));
        }else{
            throw new CHttpException(404,'Data yang di minta tidak tersedia');
        }
    }
}

?>
