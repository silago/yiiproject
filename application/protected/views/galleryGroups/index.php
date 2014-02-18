<?php
/* @var $this GalleryGroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Groups',
);

$this->menu=array(
	array('label'=>'Create GalleryGroups', 'url'=>array('create')),
	array('label'=>'Manage GalleryGroups', 'url'=>array('admin')),
);
?>

<h1>Gallery Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
