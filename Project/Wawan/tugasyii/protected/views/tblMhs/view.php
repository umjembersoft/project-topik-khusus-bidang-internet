<?php
/* @var $this TblMhsController */
/* @var $model TblMhs */

$this->breadcrumbs=array(
	'Tbl Mhs'=>array('index'),
	$model->nim,
);

$this->menu=array(
	array('label'=>'List TblMhs', 'url'=>array('index')),
	array('label'=>'Create TblMhs', 'url'=>array('create')),
	array('label'=>'Update TblMhs', 'url'=>array('update', 'id'=>$model->nim)),
	array('label'=>'Delete TblMhs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nim),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMhs', 'url'=>array('admin')),
);
?>

<center>
<p>=============================================================</p>
<h1>View Tabel Mahasiswa => <?php echo $model->nim; ?></h1>
<p>=============================================================</p>
</center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nim',
		'nama',
		'alamat',
		'tanggal_lahir',
		'jenis_kelamin',
	),
)); ?>
