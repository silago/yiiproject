<?php
/* @var $this UserController */
/* @var $data User */
?>

<tr>
	<td>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	</td>

	<td>
	<?php echo CHtml::encode($data->username); ?>
	</td>

	<td>
	<?php echo CHtml::encode($data->password); ?>
	</td>

	<td>
	<?php echo CHtml::encode($data->email); ?>
	</td>

	<td>
	<?php echo CHtml::encode($data->profile); ?>
	</td>
     <td>
	<?php echo CHtml::link('', array('delete', 'id'=>$data->id),array('class'=>'foundicon-remove general','onclick'=>'if (!confirm("Удалить")) return False;')); ?>

    </td>   
    
    <td>
	<?php echo CHtml::link('', array('update', 'id'=>$data->id),array('class'=>'foundicon-edit general')); ?>

    </td>


</td>
