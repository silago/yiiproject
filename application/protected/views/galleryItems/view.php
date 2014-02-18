<?php
/* @var $this GalleryItemsController */
/* @var $model GalleryItems */

$this->breadcrumbs=array(
	'Gallery Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GalleryItems', 'url'=>array('index')),
	array('label'=>'Create GalleryItems', 'url'=>array('create')),
	array('label'=>'Update GalleryItems', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GalleryItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryItems', 'url'=>array('admin')),
);
?>

<h1>View GalleryItems #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner',
		'name',
		'filename',
	),
)); ?>
