<script type="text/javascript">
	
	function translite(str){
	var arr={ '.':'_','а':'a', 'б':'b', 'в':'v', 'г':'g', 'д':'d', 'е':'e', 'ж':'g', 'з':'z', 'и':'i', 'й':'y', 'к':'k', 'л':'l', 'м':'m', 'н':'n', 'о':'o', 'п':'p', 'р':'r', 'с':'s', 'т':'t', 'у':'u', 'ф':'f', 'ы':'i', 'э':'e', 'А':'A', 'Б':'B', 'В':'V', 'Г':'G', 'Д':'D', 'Е':'E', 'Ж':'G', 'З':'Z', 'И':'I', 'Й':'Y', 'К':'K', 'Л':'L', 'М':'M', 'Н':'N', 'О':'O', 'П':'P', 'Р':'R', 'С':'S', 'Т':'T', 'У':'U', 'Ф':'F', 'Ы':'I', 'Э':'E', 'ё':'yo', 'х':'h', 'ц':'ts', 'ч':'ch', 'ш':'sh', 'щ':'shch', 'ъ':'', 'ь':'', 'ю':'yu', 'я':'ya', 'Ё':'YO', 'Х':'H', 'Ц':'TS', 'Ч':'CH', 'Ш':'SH', 'Щ':'SHCH', 'Ъ':'', 'Ь':'',
	'Ю':'YU', 'Я':'YA'};
	var replacer=function(a){return arr[a]||a};
	return str.replace(/[А-яёЁ]/g,replacer)
	}
	//alert(translite('алексашка'))

	
	
	//translite
	$('document').ready( function () {
		$('#News_title').change( function()
		{	
			
			var d  = new Date();
			
			var t  = $('#News_title').val();
			var s = translite(t+'_'+d.toLocaleString());
			$('#News_slug').val(s);
		});
	});
</script>


<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
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
		<?php echo $form->labelEx($model,'preview'); ?>
		<?php echo $form->textArea($model,'preview',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'preview'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
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
		<?php echo $form->labelEx($model,'html_keywords'); ?>
		<?php echo $form->textField($model,'html_keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_template'); ?>
		<?php echo $form->textField($model,'html_template',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_template'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
