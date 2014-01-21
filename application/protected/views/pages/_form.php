<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="column-12">
<div class="form">
	<div>
	<p> &nbsp; </p>
	<p> </p>
	</div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php# var_dump($this);?>
		<?php
		# $a = $model->getTree(); 
		# var_dump($a);
		?>
		<?php
	#	var_dump($model->getTree());
		 echo $form->dropDownList($model, 'owner', $model->getTree(), array('0' => 'NULL'));
		   ?>
		<?php #echo $form->textField($model,'owner'); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		
		<?php  echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slug'); ?>
		<?php echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $attribute = 'content'; ?>
		<?php $this->widget('application.widgets.redactor.ERedactorWidget',array(
		'model'=>$model,
		'attribute'=>$attribute,
		'options'=>array(
        'fileUpload'=>Yii::app()->createUrl('pages/fileUpload',array(
            'attr'=>$attribute
        )),
        'fileUploadErrorCallback'=>new CJavaScriptExpression(
            'function(obj,json) { alert(json.error); }'
        ),
        'imageUpload'=>Yii::app()->createUrl('pages/imageUpload',array(
            'attr'=>$attribute
        )),
        'imageGetJson'=>Yii::app()->createUrl('pages/imageList',array(
            'attr'=>$attribute
        )),
        'imageUploadErrorCallback'=>new CJavaScriptExpression(
            'function(obj,json) { alert(json.error); }'
        ),
		),
)); ?>

		<?php /* echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50));*/ ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_template'); ?>
		<?php echo $form->textField($model,'html_template',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_template'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'html_title'); ?>
		<?php echo $form->textField($model,'html_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_description'); ?>
		<?php echo $form->textField($model,'html_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'htm_keywords'); ?>
		<?php echo $form->textField($model,'htm_keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'htm_keywords'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->
