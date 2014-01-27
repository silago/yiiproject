<?php
/* @var $this SitewidgetsController */
/* @var $model Sitewidgets */

$this->breadcrumbs=array(
	'Sitewidgets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sitewidgets', 'url'=>array('index')),
	array('label'=>'Create Sitewidgets', 'url'=>array('create')),
	array('label'=>'View Sitewidgets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sitewidgets', 'url'=>array('admin')),
);
?>

<h1>Update Sitewidgets <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>