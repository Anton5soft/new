

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm'); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'content'); ?>

        <?php $this->widget('ImperaviRedactorWidget', array(
            // You can either use it for model attribute
            'model' => $model,
            'attribute' => 'content',
            'htmlOptions' => array(
                'style' => 'width: 300px; height: 300px;',),
            // or just for input field
            'name' => 'my_input_name',
            // Some options, see http://imperavi.com/redactor/docs/
            'options' => array(
                'lang' => 'ru',
                'toolbar' => true,
                'iframe' => true,
                'css' => 'wym.css',
            ),
        ));
        ?>

        <?php echo $form->error($model,'content'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->