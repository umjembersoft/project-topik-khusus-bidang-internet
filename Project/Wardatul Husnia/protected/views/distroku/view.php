<?php
/* @var $this DistrokuController */
/* @var $model Distroku */

$this->breadcrumbs=array(
	'Distrokus'=>array('index'),
	$model->kode_barang,
);

$this->menu=array(
	array('label'=>'List Distroku', 'url'=>array('index')),
	array('label'=>'Create Distroku', 'url'=>array('create')),
	array('label'=>'Update Distroku', 'url'=>array('update', 'id'=>$model->kode_barang)),
	array('label'=>'Delete Distroku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_barang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Distroku', 'url'=>array('admin')),
);
?>

<h1>View Distroku #<?php echo $model->kode_barang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_barang',
		'nama_barang',
		'stok',
		'harga',
		'kondisi',
	),
)); ?>
