<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
	<?php echo CHtml::encode($data->owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pubDate')); ?>:</b>
	<?php echo CHtml::encode($data->pubDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preview')); ?>:</b>
	<?php echo CHtml::encode($data->preview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_title')); ?>:</b>
	<?php echo CHtml::encode($data->html_title); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('html_description')); ?>:</b>
	<?php echo CHtml::encode($data->html_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->html_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_template')); ?>:</b>
	<?php echo CHtml::encode($data->html_template); ?>
	<br />

	*/ ?>

</div>