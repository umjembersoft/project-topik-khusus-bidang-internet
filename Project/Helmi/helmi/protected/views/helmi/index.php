<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Selamat Datang di Web <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
--------------------------------------------------------------------------------------
<h1> <font color="#CC66FF" face="Papyrus" size="4"><marquee> Sistem Informasi Penjualan di Toko Makmur </marquee></font></h1>

<ul>
	<li><font color="#333333" face="Chiller" size="6"><a href ="http://localhost/helmi/index.php?r=toko">Daftar Barang</a></font></li>
</ul>

<center>
<?php
echo CHtml::image("images/gambar.gif","images",array("width"=>120));
?>
</center>
