<?php

$this->breadcrumbs=array(
	'buku'=>array('index'),
	'Update',
	$model->IDBUKU=>array('view','id'=>$model->IDBUKU),
	
);

$this->menu=array(
	array('label'=>'List Buku', 'url'=>array('index')),
	array('label'=>'Create Buku', 'url'=>array('create')), 
	array('label'=>'View Buku', 'url'=>array('view', 'id'=>$model->IDBUKU)),
	array('label'=>'Manage Buku', 'url'=>array('admin')),
);
?>
<center>
<h1>Update Tabel BUKU => <?php echo $model->IDBUKU; ?></h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>