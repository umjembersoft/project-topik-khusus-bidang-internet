<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo Yii::app()->name ?></title>
<meta name="generator" content="WordPress 3.1" />
<!-- 4 stats -->

<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/ie.css" type="text/css" media="screen" />
<![endif]-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

</head>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>

<body>

<div id="background">

<div id="header">

<div id="menu">
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

<div id="logo">
                  <a href="<?php echo Yii::app()->request->baseUrl ?>" title="<?php echo Yii::app()->name ?>">
<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png"/></a>
         
</div><!--END LOGO-->


	
</div><!--END HEADER-->


<div id="container">

	<div id="content">
			<?php echo $content ?>

		<?php /*
				<div id="post-2" class="post">
			<h1 class="post-title">Sample Page</h1>
			<div class="post-content">
				<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
<blockquote><p>Hi there! I&#8217;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin&#8217; caught in the rain.)</p></blockquote>
<p>&#8230;or something like this:</p>
<blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
<p>As a new WordPress user, you should go to <a href="http://angrybirds.themesnack.net/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
			</div>
		</div><!-- .post -->
		*/ ?>

	</div><!-- #content -->

<div id="sidebar" class="sidebar">

<div class='widget' style='height: 250px'>
<h3>Blog Subscription</h3>
<ul id='subscription'>

      <li>
        
        <a href="http://twitter.com/">
<img alt="Twitter" src="<?php echo Yii::app()->theme->baseUrl ?>/images/twitter.png"/></a>
        <h4><a href="http://twitter.com/">Follow me</a></h4>
        <p>You can follow my updates on Twitter</p>

      </li>

      <li>
        
        <a href="#">
<img alt="Feed" src="<?php echo Yii::app()->theme->baseUrl ?>/images/rss.png"/></a>
        <h4><a href="#">Posts RSS</a></h4>
        <p>Read my full posts on your favorite feed reader</p>
      </li>
<li>
        
        <a href="">
<img alt="Facebook" src="<?php echo Yii::app()->theme->baseUrl ?>/images/facebook.png"/></a>
        <h4><a href="">Facebook</a></h4>
        <p>Become a fan of Angry Birds on Facebook</p>
      </li>
    </ul>
</div>

<div class="widget">
<h3>Search this blog</h3>
<div id="searchform">
<form method="get" id="search" action="">
<div><input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" class="btn" />
</div>
</form>
</div>
</div>

<div class="widget">
<h3>Categories</h3>
<ul> 
	<li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Category 1">Category 1</a></li>
	<li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Category 2">Category 2</a></li>
	<li class="cat-item cat-item-6"><a href="#" title="View all posts filed under Category 3">Category 3</a></li>
</ul>
</div>

</div><!--END SIDEBAR-->
<div style="clear: both"></div>
</div><!--END CONTAINER-->
<div id="footer-wrapper">
<div id="footer">

<div class="footerbox" id="footerbox1">
<h4>Recent Posts</h4>
<ul>
	<li><a href="#">Introducing WP Theme</a></li>
	<li><a href="#">Another image in a post</a></li>
	<li><a href="#">An image in a post</a></li>
</ul>
</div>

<div class="footerbox" id="footerbox2">
<h4>Recent Comments</h4>

<ul>
<li>Claudia: <a href="#" title="on Introducing WP Theme">Threaded comment</a></li>
<li>Claudia: <a href="#" title="on Introducing WP Theme">Testing comments</a></li>
<li>Mr WordPress: <a href="#" title="on Category Hierarchy">Hi, this is a comment.To</a></li>
</ul></div>

<div class="footerbox" id="footerbox3">
<h4>Archives</h4>
<ul>
	<li><a href='#' title='August 2011'>September 2011</a></li>
	<li><a href='#' title='August 2011'>August 2011</a></li>
	<li><a href='#' title='August 2011'>July 2011</a></li>
	<li><a href='#' title='August 2011'>June 2011</a></li>
</ul>
</div>

<div style="clear: both"></div>

</div><!--END FOOTER-->
</div><!--END FOOTER-WRAPPER--><div id="credit-wrapper">
<div id="credit">
<?php echo Yii::app()->name ?> (c) <?php echo date("Y"); ?> | Designed by <a href="http://angry-birds-online.com/">Angry Birds Online</a> with <a href="http://angrybirdspcandmac.com ">Angry Birds PC</a>, <a href="http://playangrybirdsonlinegame.org">Play Angry Bird</a> and <a href="http://downloadangrybirdsfree.com">Download Angry Birds</a>
</div>
</div>
</div></body>
</html>
