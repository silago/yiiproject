<?php
/* @var $this GalleryGroupsController */
/* @var $model GalleryGroups */

$this->breadcrumbs=array(
	'Gallery Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryGroups', 'url'=>array('index')),
	array('label'=>'Manage GalleryGroups', 'url'=>array('admin')),
);
?>

<h1>Create GalleryGroups</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>