<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<center>
<h1><a href ="http://localhost/rickyanas/index.php"<b><?php echo CHtml::encode(Yii::app()->name); ?></b></a></h1>
<p>___________________________________________________</p>
</center>

<h2>
<div align="center"><font face="georgia" color="black"><strong><marquee 
bgcolor="white" width="70%" scrollamount="3" behavior="scroll">"Daftar Pembeli Laptop di Ricky COM"</marquee></strong></font></div>
</h2>

<center>
<?php
echo CHtml::image("images/laptop.jpg","images",array("width"=>200));
?>
</center>


<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" 
direction="down" width="100%" height="100" align="center"> 
<a href="http://rickyanasp.blogspot.com/">Blog </a><br/>
<a href=" http://www.slideshare.net/ricky93">SlideShare</a><br/> 
<a href="id.linkedin.com/pub/ricky-anas-prayogo/67/533/a08/">Linkedin </a><br/> 
</marquee>
