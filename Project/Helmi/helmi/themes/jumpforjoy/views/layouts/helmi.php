<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Toko Bhina Sejahtera</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#">Sistem Informasi Penjualan di Toko Bhina sejahtera</a></h1>
		
		<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/toko1.jpg" width="940" height="200" alt=""><!-- header image -->
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
		<div class="menu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Halaman Utama', 'url'=>array('/helmi/index')),
				array('label'=>'Tentang', 'url'=>array('/helmi/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/helmi/contact')),
				array('label'=>'Login', 'url'=>array('/helmi/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/helmi/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
		</div>
	</nav><!-- end of top nav -->


	<section id="main"><!-- #main content and sidebar area -->
		<section id="container"><!-- #container -->
			<section id="content"><!-- #content -->
				<article>
					<?php echo $content ?>
				</article>
				
<h1><font color="#CC6600" size="2"> ****************************************************************** </font></h1>
				<center>
				<div id="footer">
				<font color="#9900FF" face="Papyrus" size="4">

		  by Helmi Mahfudhatul Harum<br/>
		Universitas Muhammadiyah Jember<br/>
		<?php echo date('Y'); ?>
		</font>
	</div><!-- footer -->
	</center>
	
	<?php	
		/*
        		<article>
							<h2><a href="#">Laugh and Play With Us</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>
						</article>
						
        		<article>
							<h2><a href="#">Fun In The Sun</a></h2>
							<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/ontheplayground.png" alt="" class="aligncenter" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.</p>
						</article>
						*/
	?>				
			</section><!-- end of #content -->
		</section><!-- end of #container -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Kunjungilah tempat berikut</h3>
					<ul>
						<li>Jatim Park 2 Malang</li>
						<li>Wisata Bahari Lamongan</li>
						<li>Batu Night Spectaculer</li>
						<li>Trans Studio Bandung</li>
						<li>Dufan</li>
					</ul>

				<h3>Cek Cuaca</h3>
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/weathericons.png" alt="" /></a>		
					
				<h3>Connect With Us</h3>
					<ul>
						<li><a href="https://twitter.com/HelmyLovely">Twitter</a></li>
						<li><a href="https://www.facebook.com/helmi.lovely">Facebook</a></li>
						<li><a href="http://www.slideshare.net/Helmi_Mahfudhatul">Slideshare</a></li>
						<li><a href="http://www.helmimahfudhatul18319.blogspot.com">Blog</a></li>
					</ul>			

				<h3>Sponsors</h3>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.gif" width="150" height="150" alt="" /><br /><br />		

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->

	<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
					<aside id="first" class="footer-segment">
							<h3>More Cool Stuff</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #first footer segment -->

					<aside id="second" class="footer-segment">
							<h3>Just For Kids</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #second footer segment -->

					<aside id="third" class="footer-segment">
							<h3>Rainy Day Fun</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #third footer segment -->
					
					<aside id="fourth" class="footer-segment">
							<h3>Did You Know?</h3>
								<p>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. </p>
					</aside><!-- end of #fourth footer segment -->

			</section><!-- end of #footer-outer-block -->

		</section><!-- end of #footer-area -->
	</footer>

</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
