<?php
/* @var $this TblMkuliahController */
/* @var $model TblMkuliah */

$this->breadcrumbs=array(
	'Tbl Mkuliahs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblMkuliah', 'url'=>array('index')),
	array('label'=>'Create TblMkuliah', 'url'=>array('create')),
	array('label'=>'Update TblMkuliah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblMkuliah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMkuliah', 'url'=>array('admin')),
);
?>
<center>
<h1>View Tabel Mata Kuliah => <?php echo $model->id; ?></h1>
<p>=============================================================</p>
</center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'matakuliah',
		'sks',
		'semester',
		'ruang',
	),
)); ?>
