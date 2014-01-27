<?php

$this->breadcrumbs=array(
	'penerbit'=>array('index'),
	$model->IDBUKU,
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Create Penerbit', 'url'=>array('create')),
	array('label'=>'Update Penerbit', 'url'=>array('update', 'id'=>$model->IDPENERBIT)),
	array('label'=>'Delete Penerbit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPENERBIT),'confirm'=>'Anda yakin untuk menghapus ini?')),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<center>
<h1>View Tabel Penerbit=> <?php echo $model->IDPENERBIT; ?></h1>
<p></p>
</center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDPENERBIT',
		'IDCUSTOMER',
		'HARGA',
		'NAMAPENERBIT',
		'ALAMATPENERBIT',
		'TGLLAHIRPENERBIT',
		'NOTLPPENERBIT',
	),
)); ?>
<?php
?>
