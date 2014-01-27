<?php
/* @var $this TblMkuliahController */
/* @var $model TblMkuliah */

$this->breadcrumbs=array(
	'Tbl Mkuliahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMkuliah', 'url'=>array('index')),
	array('label'=>'Manage TblMkuliah', 'url'=>array('admin')),
);
?>
<center>
<h1>Create Tabel Mata Kuliah</h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>