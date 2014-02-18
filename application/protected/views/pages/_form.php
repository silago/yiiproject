<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CCustomForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">
	<div class="large-8 columns">
	<div>
	<p> &nbsp; </p>
	<p> </p>
	</div>




	<p class="note">Поля помеченные <span class="required">*</span> необходимы к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
        <select name="Pages[owner]">
        <option value="0"> Без родительского элемента </option>
		<?php
		 echo $form->dropDownList($model->getTree());
	    
    
    ?>
        </select>
		<?php #echo $form->textField($model,'owner'); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>


	
	
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $attribute = 'content'; ?>
		<?php $this->widget('application.widgets.redactor.ERedactorWidget',array(
		'model'=>$model,
		'attribute'=>$attribute,
		'options'=>array(
        'lang'=>'ru',
	    'minHeight'=>'200',
		'convertDivs' => false,
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
	
	
		<div class="row buttons"><br/>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',array('class'=>'button')); ?>	
	</div>
	
	</div>
	
	
<div class="large-3 columns">	
		<div>
	<p>  </p>
	<p> </p>
	</div>
	<br/>
	<br/> <div  style="border-bottom:1px solid lightgray; padding-bottom:5px;" class="row"> 
	<h6> Расширенные параметры </h6>
	<small> ( Необязательны к заполнению ) </small></div>
	<div style="zdisplay:none;">
   <div class="row"> 
    <br/>
    <?php echo $form->labelEx($model,'in_menu',array('style'=>'float:left; margin-right:20px;')); ?>
    <?php echo $form->checkBox($model,'in_menu', array('value'=>1, 'uncheckValue'=>0)); ?>
    <?php echo $form->error($model,'in_menu'); ?> 
  </div>`

	<div class="row">
		<?php echo $form->labelEx($model,'redirect'); ?>
		<?php echo $form->textField($model,'redirect',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'redirect'); ?>
	</div>



	
	<div class="row">
		<?php echo $form->labelEx($model,'additional_content'); ?>
		<?php $attribute = 'additional_content'; ?>
		<?php $this->widget('application.widgets.redactor.ERedactorWidget',array(
		'model'=>$model,
		'attribute'=>$attribute,
		'options'=>array(
        'lang'=>'ru',
		'convertDivs' => false,
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
		<?php echo $form->error($model,'additional_content'); ?>
	</div>
	
	<div class="row">
	<br/>
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
	</div>
	

	
<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->
