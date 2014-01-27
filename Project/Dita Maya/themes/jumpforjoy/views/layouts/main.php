<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>JumpForJoy</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#">Jump For Joy</a></h1>
		<h2>Your tag line here</h2>
		<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/headerimg.png" width="940" height="200" alt=""><!-- header image -->
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
		<section id="container"><!-- #container -->
			<section id="content"><!-- #content -->
				<article>
					<?php echo $content ?>
				</article>
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
				<h3>Fun Places To Go</h3>
					<ul>
						<li><a href="#">Europe</a></li>
						<li><a href="#">Mediterranean</a></li>
						<li><a href="#">Caribbean</a></li>
						<li><a href="#">Australia</a></li>
						<li><a href="#">Hawaii</a></li>
					</ul>

				<h3>Check The Weather</h3>
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/weathericons.png" alt="" /></a>
					
			<h3>Fun Things To Do</h3>
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
						<li><a href="#">LinkedIn</a></li>
						<li><a href="#">Flickr</a></li>
					</ul>			

				<h3>Sponsors</h3>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/ad180.png" alt="" /><br /><br />		

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
