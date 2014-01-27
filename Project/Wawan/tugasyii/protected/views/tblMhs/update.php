<?php
/* @var $this TblMhsController */
/* @var $model TblMhs */

$this->breadcrumbs=array(
	'Tbl Mhs'=>array('index'),
	$model->nim=>array('view','id'=>$model->nim),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMhs', 'url'=>array('index')),
	array('label'=>'Create TblMhs', 'url'=>array('create')),
	array('label'=>'View TblMhs', 'url'=>array('view', 'id'=>$model->nim)),
	array('label'=>'Manage TblMhs', 'url'=>array('admin')),
);
?>
<center>
<p>=============================================================</p>
<h1>Update Tabel Mahasiswa => <?php echo $model->nim; ?></h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>