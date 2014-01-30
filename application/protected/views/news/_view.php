<?php
/* @var $this NewsController */
/* @var $data News */
?>

<tr>
	<td> <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	</td>

	<td><?php echo CHtml::encode($data->pubDate); ?>
	</td>

	<td><?php echo CHtml::encode($data->title); ?>
	</td>

	<td><?php echo CHtml::encode($data->preview); ?>
	</td>

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
