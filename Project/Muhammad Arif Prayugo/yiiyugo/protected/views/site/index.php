<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<center>
<h1>SELAMAT DATANG <?php echo CHtml::encode(Yii::app()->name); ?></h1>
<p>_____________________________________________________</p>
</center>

<center>
<?php
echo CHtml::image("images/yugo.jpg","images",array("width"=>300));
?>
</center>