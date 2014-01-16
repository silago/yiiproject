<?php
/* @var $this SlidesController */
/* @var $model Slides */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Slides', 'url'=>array('index')),
	array('label'=>'Create Slides', 'url'=>array('create')),
	array('label'=>'Update Slides', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Slides', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Slides', 'url'=>array('admin')),
);
?>

<h1>View Slides #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file',
		'order',
	),
)); ?>
