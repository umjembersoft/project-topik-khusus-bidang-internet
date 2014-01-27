<?php
/* @var $this ParselController */
/* @var $model Parsel */

$this->breadcrumbs=array(
	'Parsels'=>array('index'),
	$model->namabarang,
);

$this->menu=array(
	array('label'=>'List Parsel', 'url'=>array('index')),
	array('label'=>'Create Parsel', 'url'=>array('create')),
	array('label'=>'Update Parsel', 'url'=>array('update', 'id'=>$model->namabarang)),
	array('label'=>'Delete Parsel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->namabarang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parsel', 'url'=>array('admin')),
);
?>

<h1>View Parsel #<?php echo $model->namabarang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'namabarang',
		'harga',
		'ukuran',
		'lama_pesan',
	),
)); ?>
