<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Red Planet</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

</head>
<body>
<div id="header">
  <div id="logo">
    <h1>Red Planet</h1>
    <h2><a href="http://www.free-css.com/">Free CSS Templates</a></h2>
  </div>
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
</div>
<div id="splash"><a href="http://www.free-css.com/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/img4.jpg" alt="" width="877" height="140" /></a></div>
<div id="content">
  <div id="colOne">
    <?php echo $content; ?>
    <!--
    <h2>Welcome to Sitename.com!</h2>
    <p><strong>RedPlanet</strong> is a free template from Free CSS Templates released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. The header image of Mars’ surface is from NASA (slightly edited). You're free to use this template for both commercial or personal use. I only ask that you link back to my site in some way. Enjoy :)</p>
    <p>Sed vel quam. Vestibulum pellentesque. Morbi sit amet magna ac lacus dapibus interdum. Donec pede nisl, Maecenas sed sem sit amet lectus mattis molestie. Integer quis eros lorem ipsum dolor sit amet.</p>
    <div class="posted">
      <p>posted by <a href="http://www.free-css.com/">Someone</a> on January 10, 2007</p>
      <p class="comments"><a href="http://www.free-css.com/">64 comments</a></p>
    </div>
    <h2>Lorem Ipsum Dolor</h2>
    <p>Sed vel quam. Vestibulum pellentesque. Morbi sit amet magna ac lacus dapibus interdum. Donec pede nisl, Maecenas sed sem sit amet lectus mattis molestie. Integer quis eros lorem ipsum dolor sit amet. Sed vel quam. Vestibulum pellentesque. Morbi sit amet magna ac lacus dapibus interdum. Donec pede nisl, Maecenas sed sem sit amet lectus mattis molestie. Integer quis eros lorem ipsum dolor sit amet.</p>
    <div class="posted">
      <p>posted by <a href="http://www.free-css.com/">Someone</a> on January 10, 2007</p>
      <p class="comments"><a href="http://www.free-css.com/">32 comments</a></p>
    </div>
    -->
  </div>
  <div id="colTwo">
    <h3>Search</h3>
    <form id="form1" method="get" action="http://www.free-css.com/">
      <div>
        <input name="textfield1" type="text" id="textfield1" />
        <input name="submit1" type="submit" id="submit1" value="Search" />
      </div>
    </form>
    <p></p>
    <h3>Veroeros Etiam</h3>
    <ul>
      <li><a href="http://www.free-css.com/">Sed vel quam nulla</a></li>
      <li><a href="http://www.free-css.com/">Vestibulum pellentesque</a></li>
      <li><a href="http://www.free-css.com/">Morbi sit amet magna</a></li>
      <li><a href="http://www.free-css.com/">Lacus dapibus interdum</a></li>
      <li><a href="http://www.free-css.com/">Donec pede nisl dolore</a></li>
      <li><a href="http://www.free-css.com/">Maecenas sed sem</a></li>
    </ul>
    <h3>Quam Maecenas</h3>
    <ul>
      <li><a href="http://www.free-css.com/">Morbi sit amet magna</a></li>
      <li><a href="http://www.free-css.com/">Lacus dapibus interdum</a></li>
      <li><a href="http://www.free-css.com/">Maecenas sed sem</a></li>
      <li><a href="http://www.free-css.com/">Donec pede nisl dolore<br />
        </a></li>
    </ul>
  </div>
  <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <p>(c) <?php echo date( 'Y', time() ); ?> <?php echo CHtml::encode( Yii::app()->name )?>. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
</body>
</html>
