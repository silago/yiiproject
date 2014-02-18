<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error 123213 <?php echo $code; ?></h2>

<div class="error">1212312123
<?php echo CHtml::encode($message); ?>
</div>
