<?php
/* @var $this TblMhsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl_mhs', #nama tabel
);

$this->menu=array(
	array('label'=>'Create TblMhs', 'url'=>array('create')),
	array('label'=>'Manage TblMhs', 'url'=>array('admin')),
);
?>
<center>
<p>=============================================================</p>
<h1>Daftar Mahasiswa</h1>
<p>=============================================================</p>
</center>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>

<b><font size=“100” face=“TimesNewRoman” color="red"><big>
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