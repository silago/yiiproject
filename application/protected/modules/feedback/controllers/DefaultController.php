<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionCreate()
	{
	#die('s');
	$model=new Feedbacks;	
		
	if(Yii::app()->getRequest()->getIsAjaxRequest()) {

	echo CActiveForm::validate( array( $model)); 

	Yii::app()->end(); 

	}}

}

