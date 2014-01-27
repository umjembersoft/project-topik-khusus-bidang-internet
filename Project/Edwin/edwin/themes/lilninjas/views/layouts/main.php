<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo CHtml::encode( Yii::app()->name ) ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#">FILM</a></h1>
		<h2><?php echo CHtml::encode( Yii::app()->name ) ?></h2>
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
		<div class="menu">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); ?>

		</div>
	</nav><!-- end of top nav -->
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
            <article>
                <?php echo $content; ?>
            </article>
        		<!-- <article>
							<h2><a href="#">First Article Title</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.</p>
							<p>Omnium perfecto delicata no mel, vim homero efficiendi reformidans et. Cu phaedrum consulatu pertinacia mel, pro cu omnes officiis persecuti. Id debet ancillae forensibus pri, aliquid scribentur contentiones ne vel, laoreet graecis pro ne. Et alia accommodare reprehendunt mei, te sea eirmod intellegam interpretaris, vis delectus repudiandae id. Vitae aliquyam an vix. Et est porro exerci philosophia, at justo legere principes nam. An vix dolorem adolescens voluptatum, ea vix tamquam eruditi, id est suas possim ancillae.</p>
						</article>-->
						
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Things To Do</h3>
					<ul>
						<li><a href="#">Play Games</a></li>
						<li><a href="#">Chat With Friends</a></li>
						<li><a href="#">Swap Stories</a></li>
						<li><a href="#">Sell Stuff</a></li>
						<li><a href="#">Buy Stuff</a></li>
						<li><a href="#">Trade Stuff</a></li>
					</ul>
					
				<h3>Connect With Us</h3>
					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
					</ul>

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->
	
		<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
					<aside class="footer-segment">
							<h4>Friends</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #first footer segment -->

					<aside class="footer-segment">
							<h4>Awesome Stuff</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #second footer segment -->

					<aside class="footer-segment">
							<h4>Coolness</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #third footer segment -->
					
					<aside class="footer-segment">
							<h4>Blahdyblah</h4>
								<p>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
					</aside><!-- end of #fourth footer segment -->

			</section><!-- end of footer-outer-block -->

		</section><!-- end of footer-area -->
	</footer>
	
</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
