<?php
/* @var $this SlidesController */
/* @var $model Slides */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slides-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>


	<p class="note">Поля помеченные <span class="required">*</span> необходимы к заполнению.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->fileField($model,'file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'button small')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
