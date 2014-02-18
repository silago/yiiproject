<?php
/* @var $this GalleryItemsController */
/* @var $model GalleryItems */

$this->breadcrumbs=array(
	'Gallery Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryItems', 'url'=>array('index')),
	array('label'=>'Manage GalleryItems', 'url'=>array('admin')),
);
?>

<h1>Create GalleryItems</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>