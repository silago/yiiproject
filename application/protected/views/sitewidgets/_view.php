<?php
/* @var $this SitewidgetsController */
/* @var $data Sitewidgets */
?>

<div class="view">
    <tr>
    <td>
	    <?php echo CHtml::link(CHtml::encode($data->id), array('update', 'id'=>$data->id)); ?>
	</td>
    <td>
        <?php echo $data->html; ?>
    </td>
   
   
   
   	<td><?php echo CHtml::link(CHtml::encode(''), array('sitewidgets/delete/'.$data->id),array('class'=>'foundicon-remove general','onclick'=>'if (!confirm("Удалить?")) return false;')); ?></td>

	<td><?php echo CHtml::link(CHtml::encode(''), array('sitewidgets/update/id/'.$data->id),array('class'=>'foundicon-edit general')); ?></td>

   
   
   
   
   </tr>


</div>
