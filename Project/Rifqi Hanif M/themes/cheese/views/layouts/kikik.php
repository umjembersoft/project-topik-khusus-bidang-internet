<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<h1><a href="http://localhost/RifqiHM/index.php?r=rifqi/page&view=about" title="WP Theme Demo
home page">Kiekey Uchiha</a></h1>
		 <div class="description">By Rifqi Hanif Maulana</div> 
		 	<?php echo CHtml::image("images/kikik.jpg","images",array("width"=>80)); ?>
	</div> <!-- end site_title -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Beranda', 'url'=>array('/rifqi/index')),
				array('label'=>'Biodata', 'url'=>array('/rifqi/page', 'view'=>'about')),
				array('label'=>'Kontak', 'url'=>array('/rifqi/contact')),
				array('label'=>'Masuk', 'url'=>array('/rifqi/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/rifqi/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Karya Ninja Konoha &copy;  by Kiekey Uchiha.<br/>
		<?php
echo CHtml::image("images/sasuke1.png","images",array("width"=>200));
?>
<center>
<?php echo date('D'); ?> <?php echo date('M'); ?> <?php echo date('Y'); ?>
</center>


	</div><!-- footer -->

</div><!-- page -->

</body>
</html>