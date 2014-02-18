<?php
/* @var $this GalleryGroupsController */
/* @var $model GalleryGroups */

$this->breadcrumbs=array(
	'Gallery Groups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryGroups', 'url'=>array('index')),
	array('label'=>'Create GalleryGroups', 'url'=>array('create')),
	array('label'=>'View GalleryGroups', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryGroups', 'url'=>array('admin')),
);
?>

<h1>Update GalleryGroups <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>