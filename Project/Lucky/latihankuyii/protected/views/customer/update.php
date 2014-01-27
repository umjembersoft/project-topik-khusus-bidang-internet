<?php
/* @var $this TblMkuliahController */
/* @var $model TblMkuliah */

$this->breadcrumbs=array(
	'Tbl Mkuliahs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMkuliah', 'url'=>array('index')),
	array('label'=>'Create TblMkuliah', 'url'=>array('create')),
	array('label'=>'View TblMkuliah', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblMkuliah', 'url'=>array('admin')),
);
?>
<center>
<h1>Update Tabel Mata Kuliah => <?php echo $model->id; ?></h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>