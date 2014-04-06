
<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/adminactions.js', CClientScript::POS_END);
?>

<h1>Manage News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


</div><!-- search-form -->
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'ajaxUpdate'=>false,
    'filter'=>$model,
    'template'=>"{items}",

    'columns'=>array(
        'id',
        'title',
        'content',
        'status',
        'created_time',
        'updated_time',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),

        ),
)); ?>
<div id="AdmNewsView" data-url="<?php echo Yii::app()->createUrl('news/'); ?>"></div>