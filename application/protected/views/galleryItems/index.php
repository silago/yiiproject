<?php
/* @var $this GalleryItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Items',
);

$this->menu=array(
	array('label'=>'Create GalleryItems', 'url'=>array('create')),
	array('label'=>'Manage GalleryItems', 'url'=>array('admin')),
);
?>

<h1>Gallery Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
