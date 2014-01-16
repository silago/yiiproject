<?php
/* @var $this SlidesController */
/* @var $model Slides */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Slides', 'url'=>array('index')),
	array('label'=>'Manage Slides', 'url'=>array('admin')),
);
?>

<h1>Create Slides</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>