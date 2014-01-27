<?php
/* @var $this SitewidgetsController */
/* @var $model Sitewidgets */

$this->breadcrumbs=array(
	'Sitewidgets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sitewidgets', 'url'=>array('index')),
	array('label'=>'Create Sitewidgets', 'url'=>array('create')),
	array('label'=>'Update Sitewidgets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sitewidgets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sitewidgets', 'url'=>array('admin')),
);
?>

<h1>View Sitewidgets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order',
		'group',
		'html',
		'link',
	),
)); ?>
