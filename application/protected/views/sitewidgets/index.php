<?php
/* @var $this SitewidgetsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sitewidgets',
);

$this->menu=array(
	array('label'=>'Create Sitewidgets', 'url'=>array('create')),
	array('label'=>'Manage Sitewidgets', 'url'=>array('admin')),
);
?>

<h1>Sitewidgets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
