<?php
/* @var $this PagesController */
/* @var $data Pages */
?>
	<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('pages/update/'.$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->owner); ?></td>
	<td><?php echo CHtml::encode($data->title); ?></td>
	<td><?php echo CHtml::encode($data->slug); ?></td>
	<td><?php echo CHtml::link(CHtml::encode(''), array('pages/delete/'.$data->id),array('class'=>'foundicon-remove general','onclick'=>'if (!confirm("Удалить?")) return false;')); ?></td>

	<td><?php echo CHtml::link(CHtml::encode(''), array('pages/update/'.$data->id),array('class'=>'foundicon-edit general')); ?></td>

	</tr>
