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

            
            <div id="navigation">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
					
						array('label'=>'Beranda', 'url'=>array('/site/index')),
						array('label'=>'Me', 'url'=>array('/site/page', 'view'=>'Biodata')),
						array('label'=>'Create', 'url'=>array('film/create')),
						array('label'=>'Views', 'url'=>array('film/index'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>		
            </div>
			
            
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
                    <a href='#' target='_blank'><?php echo Yii::app()->name; ?></a>
                </div>
			<div class="clear"></div>        
        </div>            
    </div> 

</body>
</html>