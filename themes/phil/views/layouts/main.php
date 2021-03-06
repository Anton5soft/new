<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </div>
	<?php Yii::app()->bootstrap->register(); ?>

    <?php
    $baseUrl = Yii::app()->baseUrl;
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/links.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/bootstrap-carousel.js', CClientScript::POS_HEAD);
    ?>
</head>

<body class="">

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
            'type'=>'inverse',
            'items'=>array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'items'=>array(
                        array('label'=>'News',
                             'url'=>'#',
                             'linkOptions'=>array('class'=>'menunews'),
                        ),
                        array('label'=>'Videos',
                             'url'=>'#',
                             'linkOptions'=>array('class'=>'menuvideo'),

                        ),
                        array('label'=>'Tour',
                            'url'=>'#',
                            'linkOptions'=>array('class'=>'menutour'),

                        ),
                        array('label'=>'Gallery',
                            'url'=>'#',
                            'linkOptions'=>array('class'=>'menugallery'),

                        ),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),

                ),
            ),
        )); ?>

<div class="container" id="page">
    <br>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
</body>
</html>
