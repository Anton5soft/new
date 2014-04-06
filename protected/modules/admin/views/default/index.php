
<div class="admin">
    <?php
    Yii::app()->clientScript->registerScript('helpers', '
        baseUrl = '.CJSON::encode(Yii::app()->baseUrl).';
');
    $baseUrl = Yii::app()->baseUrl;
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/links.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/dialogadmin.js', CClientScript::POS_HEAD);
    ?>
<h1>Admin Panel</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>true, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Admin Panel', 'url'=>array('/admin'), 'active'=>true),
        array('label'=>'Create News', 'url'=>'#','linkOptions'=>array('class'=>'createnews')),
        array('label'=>'Manage News', 'url'=>'#','linkOptions'=>array('class'=>'adminnews')),
        array('label'=>'Add Video', 'url'=>'#','linkOptions'=>array('class'=>'videoadd')),
        array('label'=>'Manage Video', 'url'=>'#','linkOptions'=>array('class'=>'videoadmin')),
        array('label'=>'Add Tour', 'url'=>'#','linkOptions'=>array('class'=>'touradd')),
        array('label'=>'Manage Tour', 'url'=>'#','linkOptions'=>array('class'=>'touradmin')),
        array('label'=>'Add Image to gallery', 'url'=>'#','linkOptions'=>array('class'=>'imageadd')),
        array('label'=>'Manage Images', 'url'=>'#','linkOptions'=>array('class'=>'imageadmin')),
    ),
)); ?>

</div>
<div class="ajaxcont">
    <p>Admin Panel</p>
    <p>Here you can create and change you content</p>
</div>
<div id="newscreate" data-url="<?php echo Yii::app()->createUrl('news/create'); ?>"></div>
<div id="newsadmin" data-url="<?php echo Yii::app()->createUrl('news/admin'); ?>"></div>
<div id="videoadd" data-url="<?php echo Yii::app()->createUrl('video/create'); ?>"></div>
<div id="videoadmin" data-url="<?php echo Yii::app()->createUrl('video/admin'); ?>"></div>
<div id="touradd" data-url="<?php echo Yii::app()->createUrl('tour/create'); ?>"></div>
<div id="touradmin" data-url="<?php echo Yii::app()->createUrl('tour/admin'); ?>"></div>
<div id="imageadd" data-url="<?php echo Yii::app()->createUrl('document/create'); ?>"></div>
<div id="imageadmin" data-url="<?php echo Yii::app()->createUrl('document/admin'); ?>"></div>