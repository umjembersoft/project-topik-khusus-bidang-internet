<?php
/* @var $this FilmController */
/* @var $model Film */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Film', 'url'=>array('index')),
	array('label'=>'Tambah Film', 'url'=>array('create')),
	array('label'=>'Ubah Film', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'hapus Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Atur Film', 'url'=>array('admin')),
);
?>

<h1>View Film #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'judul',
		'jamtayang',
		'durasi',
		'tanggal',
		'hargatiket',
	),
)); ?>
