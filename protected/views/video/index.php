  <?php
    $baseUrl = Yii::app()->baseUrl;
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/jsslider/jquery.bxslider.min.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/jsslider/startslider.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerCssFile($baseUrl.'/jsslider/jquery.bxslider.css');
    ?>
<div class='videocont'>
    <ul class="bxslider">
        <?php echo "<li>" . implode("</li><li>", $items) . "</li>"; ?>
    </ul>
    </div>
