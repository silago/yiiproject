<?php
/* @var $this SlidesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Slides',
);

$this->menu=array(
	array('label'=>'Create Slides', 'url'=>array('create')),
	array('label'=>'Manage Slides', 'url'=>array('admin')),
);
?>

<h1>Slides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
