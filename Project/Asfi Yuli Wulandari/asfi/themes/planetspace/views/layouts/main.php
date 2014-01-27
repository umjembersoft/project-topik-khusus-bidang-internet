<!doctype html>
<html lang="en">
<head>
	<title><?php  echo $this->pageTitle ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/print.css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

		<header>
			<h1><?php echo Yii::app()->name ?></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
		</header>
	<div id="content">
		<article class="articlecontent">
			<?php echo $content ?>
		</article>

		<?php 
		/*

		// Left these here for examples!
		<article class="articlecontent">
					<h2><a href="#">This is the title of your article</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. <a href="#">Cras enim nibh, sodales ultricies elementum vel</a>, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio. Curabitur in odio augue. Morbi congue auctor interdum. Phasellus sit amet metus justo. Phasellus vitae tellus orci, at elementum ipsum. In in quam eget diam adipiscing condimentum. Maecenas gravida diam vitae nisi convallis vulputate quis sit amet nibh. Nullam ut velit tortor. Curabitur ut elit id nisl volutpat consectetur ac ac lorem. Quisque non elit et elit lacinia lobortis nec a velit. Sed ac nisl sed enim consequat porttitor.</p>
					
						<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/space1.jpg" alt="space" class="alignleft" />	<p>Pellentesque ut sapien arcu, egestas mollis massa. Fusce lectus leo, fringilla at aliquet sit amet, volutpat non erat. Aenean molestie nibh vitae turpis venenatis vel accumsan nunc tincidunt. Suspendisse id purus vel felis auctor mattis non ac erat. Pellentesque sodales venenatis condimentum. Aliquam sit amet nibh nisi, ut pulvinar est. Donec hendrerit fringilla ligula, ac rutrum nulla bibendum id. Cras sapien ligula, tincidunt eget euismod nec, ultricies eu augue. Nulla vitae velit sollicitudin magna mattis eleifend. Nam enim justo, vulputate vitae pretium ac, rutrum at turpis. Aenean id magna neque. Sed rhoncus aliquet viverra.</p>

				</article>

				<article class="articlecontent">
					<h2><a href="#">Here's another article title</a></h2>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/cosmos.jpg" alt="cosmos" class="alignright" /><p>Vivamus vitae nulla dolor. Suspendisse eu lacinia justo. Vestibulum a felis ante, non aliquam leo. Aliquam eleifend, est viverra semper luctus, metus purus commodo elit, a elementum nisi lectus vel magna. Praesent faucibus leo sit amet arcu vehicula sed facilisis eros aliquet. Etiam sodales, enim sit amet mollis vestibulum, ipsum sapien accumsan lectus, eget ultricies arcu velit ut diam. Aenean fermentum luctus nulla, eu malesuada urna consequat in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque massa lacus, sodales id facilisis ac, lobortis sed arcu. </p>
				</article>
			*/ ?>
		</div>
		
		<aside>
		
			<section>
				<h3>Menu</h3>
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>

			</section>

			<section>
				<h3>Categories</h3>
				<ul>
					<li><a href="#">Telescopes</a></li>
					<li><a href="#">Astronauts</a></li>
					<li><a href="#">Private Space Travel</a></li>
					<li><a href="#">Name A Star</a></li>
					<li><a href="#">Observatories</a></li>
					<li><a href="#">Star Colors</a></li>
					<li><a href="#">Planet Sizes</a></li>
					<li><a href="#">Galaxies</a></li>
					<li><a href="#">Astronomy</a></li>
					<li><a href="#">Black Holes</a></li>
				</ul>
			</section>
			
			<section>
				<h3>Recent Articles</h3>
					<ul>
						<li><a href="#">Which Planets Have Water?</a></li>
						<li><a href="#">When Can I Go To Outer Space?</a></li>
						<li><a href="#">Space: The Final Frontier</a></li>
						<li><a href="#">Planetary Observations</a></li>
					</ul>
			</section>
			
			<section>
				<h3>Connect With Us</h3>
				<ul>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Google Buzz</a></li>
				</ul>
			</section>

		</aside>

	<footer>
		<br />
		<p>&copy; 2010 <a href="#" title="your site name">yoursite.com</a></p>
	</footer>
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
