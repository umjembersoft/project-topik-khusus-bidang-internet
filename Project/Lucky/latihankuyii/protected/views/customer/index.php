<?php
/* @var $this TblMkuliahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl_mkuliah',
);

$this->menu=array(
	array('label'=>'Create customer', 'url'=>array('create')),
	array('label'=>'Manage customer', 'url'=>array('admin')),
);
?>
<center>
<h1>Daftar Mata Kuliah</h1>
<p>=============================================================</p>
</center>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
