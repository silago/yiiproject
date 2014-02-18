<?php
/* @var $this SlidesController */
/* @var $data Slides */
?>


	<tr>
        <td>
            <?php echo CHtml::link(CHtml::encode($data->id), array('update', 'id'=>$data->id)); ?>
        </td>
        <td>
        <img src="/application/uploads/thumb_<?php echo CHtml::encode($data->file); ?>" width=100/>
        </td>
        	<td><?php echo CHtml::link(CHtml::encode(''), array('slieds/delete/'.$data->id),array('class'=>'foundicon-remove general','onclick'=>'if (!confirm("Удалить?")) return false;')); ?></td>

	<td><?php echo CHtml::link(CHtml::encode(''), array('update','id'=>$data->id),array('class'=>'foundicon-edit general')); ?></td>
        </td>
   </tr>


