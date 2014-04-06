<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/jssliderimage/startslider.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/jssliderimage/jquery.lightbox-0.5.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile($baseUrl.'/jssliderimage/css/jquery.lightbox-0.5.css');
?>
<div class="gallery">
<h1>Gallery</h1>
    <?php foreach($items as $item): ?>
    <?php echo CHtml::openTag('a',array('href'=>$item)); ?>
    <?php  echo CHtml::image($item,"picture",
        array('height'=>'113','width'=>'150')); ?>

    <?php  echo CHtml::closeTag('a'); ?>
    <?php endforeach; ?>
</div>

