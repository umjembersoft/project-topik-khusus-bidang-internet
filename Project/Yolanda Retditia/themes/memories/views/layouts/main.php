<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 7]>
<style>
#content
{
    height:600px !important;
}
</style>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css' type='text/css' />
</head>

<body class='wsite-theme-light wsite-page- weeblypage-'>
<div id="wrapper">
        <div id="container">
            <div class="title"><span class='wsite-logo'><table style='height:131px'><tr><td><a href='#'><span id="wsite-title"><?php echo Yii::app()->name ;?></span></a></td></tr></table></span></div>
            <div id="header" class="wsite-header"></div>
			
			<div style="position: fixed; bottom: 0px; left: 10px;width:130px;height:160px;"><a href="http://permathic.blogspot.com/" target="_blank"><img border="0" src="http://s.myniceprofile.com/myspacepic/243/th/24365.gif" title="My widget" alt="animasi bergerak gif" /></a><small><center><a href="http://permathic.blogspot.com/2012/05/kumpulan-animasi-bergerak-yang-lucu-dan.html" target="_blank">My Widget</a></center></small></div>

			
            <div id="navigation">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Data Murid Kursus', 'url'=>array('/student/admin')),
						array('label'=>'Jadwal', 'url'=>array('/site/page', 'view'=>'Jadwal')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'MP3', 'url'=>array('/protected/extensions')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
            </div>
			
			<div align="center"><iframe align="center" src="http://www.calendarlabs.com/calendars/web-content/calendar.php?cid=1002&uid=1140314293&c=8&l=en&cbg=CC9966&cfg=990000&hfg=990000&hfg1=990000&ct=60&cb=0&cbc=990000&cf=verdana&cp=bottom&sw=0&hp=t&ib=1&ibc=5C0201&i=images/boy-with-toy.jpg" width="183" height="373" marginwidth=0 marginheight=0 frameborder=no scrolling=no allowtransparency='true'>Loading...</iframe><div align="center" style="width:140px;font-size:10px;color:#666;">Powered by <a  href="http://www.calendarlabs.com/" target="_blank" style="font-size:10px;text-decoration:none;color:#666;">Calendar</a> Labs</div></div><!-------Do not change above this line------->

            <div style="position: fixed; bottom: 0px; right: 30px;width:160px;height:160px;"><a href="http://permathic.blogspot.com/2012/05/kumpulan-animasi-bergerak-yang-lucu-dan.html" target="_blank"><img src="http://content.sweetim.com/sim/cpie/emoticons/0002032D.gif" border="0" /></a><small><center><a href="http://permathic.blogspot.com/2012/05/kumpulan-animasi-bergerak-yang-lucu-dan.html" target="_blank">Widget-Animasi-Blog</a></center></small></div>
            <div id="contenttop">
                <div id="contentbtm">
                    <div id="content">
                <div id='wsite-content' class='wsite-not-footer'>
					<?php echo $content; ?>
				</div>

                    <div class="clear"></div>
                    </div>
                </div>        
            </div>
                <div id="footer">
                    <a href='#' target='_blank'><?php echo Yii::app()->name; ?></a> by you
                </div>
			<div class="clear"></div>        
        </div>            
    </div>
	
</body>
</html>
