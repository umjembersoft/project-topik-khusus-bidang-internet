<?php
/* @var $this TblMhsController */
/* @var $model TblMhs */

$this->breadcrumbs=array(
	'Tbl_mhs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblMhs', 'url'=>array('index')),
	array('label'=>'Create TblMhs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tbl-mhs-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<center>
<p>=============================================================</p>
<h1>Manage Tabel Mahasiswa</h1>
<p>=============================================================</p>
</center>
<p></p>

<?php echo CHtml::link('Pencarian Lengkap','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-mhs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nim',
		'nama',
		'alamat',
		'tanggal_lahir',
		'jenis_kelamin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
?>

<b><font size=“100” face=“TimesNewRoman” color="purple"><big>
<?php

mysql_connect("localhost","root","");

#Pilih database tempat tabel akan dibuat
mysql_select_db("tugasyii");

$query = mysql_query("SELECT * FROM tbl_mhs WHERE jenis_kelamin='L' ");

$jumlah = mysql_num_rows($query);

echo "Jumlah Mahasiswa Laki-laki adalah : $jumlah orang";
?>
<br>
<?php

mysql_connect("localhost","root","");

#Pilih database tempat tabel akan dibuat
mysql_select_db("tugasyii");

$query = mysql_query("SELECT * FROM tbl_mhs WHERE jenis_kelamin='P' ");

$jumlah = mysql_num_rows($query);

echo "Jumlah Mahasiswa Perempuan adalah : $jumlah orang";
?>
</b></big></font>