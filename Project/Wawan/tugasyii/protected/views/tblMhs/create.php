<?php
/* @var $this TblMhsController */
/* @var $model TblMhs */

$this->breadcrumbs=array(
	'Tbl Mhs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMhs', 'url'=>array('index')),
	array('label'=>'Manage TblMhs', 'url'=>array('admin')),
);
?>
<center>
<p>=============================================================</p>
<h1>Input Tabel Mahasiswa</h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>