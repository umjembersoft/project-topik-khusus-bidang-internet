<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Jadwal';
$this->breadcrumbs=array(
	'Jadwal',
);
?>


<center>
<h2><marquee
bgcolor="purple" width="80%" scrollamount="2" behavior="alternate"><font size=“100” face=BerlinSansFBDemi” color="pink"><big>"Jadwal Kursus"</big></font></marquee>
</h2>
</center>

<center>
<?php
echo CHtml::image("images/time.jpg","images",array("width"=>350));

?>
</center>

<p>Senin			=>   	Sistem Basis Data 
							</br>Jam : 08.00-10.00</p>
<p>Selasa			=>   	Matematika Diskrit 
							</br>Jam : 08.30-10.30</p>
<p>Rabu				=>   	Jaringan Komputer 
							</br>Jam : 09.00-11.00</p>
<p>Kamis			=>		Pemrograman 
							</br>Jam : 08.30-10.30</p>
<p>Jum'at			=>   	Perangkat Keras 
							</br>Jam : 07.30-09.30</p>

