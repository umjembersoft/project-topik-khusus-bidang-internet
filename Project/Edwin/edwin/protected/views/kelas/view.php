<?php
$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Update Kelas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>View Kelas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'namaKelas',
		'waliKelas',
	),
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$murid,
	'columns'=>array(
		'id',
		'nama',
		'jk',
		 array(
            'name'=>'Kelas',
            'value'=>'Kelas::model()->findByPk($data->kelas)->namaKelas',
        ),
	),
)); ?>