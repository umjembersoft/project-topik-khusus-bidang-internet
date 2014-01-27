<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<style type="text/css">
  body {
    color: black;
    background-color: black }
    address {
    margin-top: 1em;
    padding-top: 1em;
    border-top: thin dotted }
  </style>
  <center>
  <h1>Selamat Datang di Web <i><?php echo CHtml::encode (Yii::app()->name);?></i></h1>
  </center>
  **************************************************************************
 <p> 
<h1><font color="black" face="arial" size="4"><marquee>Menampilan,Menambah,Mengupdate,Menghapus Daftar Buku </marquee></h1>
</p>

<p>
<li><font color="black" face="arial" size="4"><a href="http://localhost/latihankuyii/index.php?r=buku">Daftar Buku </a> </li>
</p>

<center>
<?php
echo CHtml::image("images/makasi.gif","images",array("width"=>200));
?>
</center>