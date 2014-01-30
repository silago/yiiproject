<?php
/* @var $this PagesController */
/* @var $data Pages */
?>
	<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('pages/update/'.$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->owner); ?></td>

	<td><?php echo CHtml::encode($data->order); ?></td>
	
	<td><?php echo CHtml::encode($data->title); ?></td>
	<td><?php echo CHtml::encode($data->slug); ?></td>


	</tr>
