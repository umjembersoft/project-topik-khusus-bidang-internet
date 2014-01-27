<?php

$this->breadcrumbs=array(
	'buku'=>array('index'),
	$model->IDBUKU,
);

$this->menu=array(
	array('label'=>'List Buku', 'url'=>array('index')),
	array('label'=>'Create Buku', 'url'=>array('create')),
	array('label'=>'Update Buku', 'url'=>array('update', 'id'=>$model->IDBUKU)),
	array('label'=>'Delete Buku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDBUKU),'confirm'=>'Anda yakin untuk menghapus ini?')),
	array('label'=>'Manage Buku', 'url'=>array('admin')),
);
?>

<div class="view">
</div>

<center>
<h1>View Tabel Buku=> <?php echo $model->IDBUKU; ?></h1>
<p></p>
</center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDBUKU',
		'JUDULBUKU',
		'JENISBUKU',
		'GENRE',
		'TAHUNTERBIT',
	),
)); ?>
<?php
?>
