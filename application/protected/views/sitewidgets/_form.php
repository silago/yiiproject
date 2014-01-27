<?php
/* @var $this SitewidgetsController */
/* @var $model Sitewidgets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sitewidgets-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model,'group',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html'); ?>
<?php $attribute = 'html'; ?>
        	<?php $this->widget('application.widgets.redactor.ERedactorWidget',array(
		'model'=>$model,
		'attribute'=>$attribute,
		'options'=>array(
        'fileUpload'=>Yii::app()->createUrl('sitewidgets/fileUpload',array(
            'attr'=>$attribute
        )),
        'fileUploadErrorCallback'=>new CJavaScriptExpression(
            'function(obj,json) { alert(json.error); }'
        ),
        'imageUpload'=>Yii::app()->createUrl('sitewidgets/imageUpload',array(
            'attr'=>$attribute
        )),
        'imageGetJson'=>Yii::app()->createUrl('sitewidgets/imageList',array(
            'attr'=>$attribute
        )),
        'imageUploadErrorCallback'=>new CJavaScriptExpression(
            'function(obj,json) { alert(json.error); }'
        ),
		),
)); ?>


		<?php echo $form->error($model,'html'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
