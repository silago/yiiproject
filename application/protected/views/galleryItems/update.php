<?php
/* @var $this GalleryItemsController */
/* @var $model GalleryItems */

$this->breadcrumbs=array(
	'Gallery Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryItems', 'url'=>array('index')),
	array('label'=>'Create GalleryItems', 'url'=>array('create')),
	array('label'=>'View GalleryItems', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryItems', 'url'=>array('admin')),
);
?>

<h1>Update GalleryItems <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>