<?php
/* @var $this GalleryGroupsController */
/* @var $model GalleryGroups */

$this->breadcrumbs=array(
	'Gallery Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GalleryGroups', 'url'=>array('index')),
	array('label'=>'Create GalleryGroups', 'url'=>array('create')),
	array('label'=>'Update GalleryGroups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GalleryGroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryGroups', 'url'=>array('admin')),
);
?>

<h1>View GalleryGroups #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner',
		'name',
		'slug',
		'image',
	),
)); ?>
