<?php

class DefaultController extends Controller
{	
	
	
	public $email = 'test@mail.ru';
	
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function sendMail($post)
	{
		

		$message = new YiiMailMessage;
		$message->view = 'mail';
		$message->setBody(array(), 'text/html');
		 
		 
		$message->addTo($this->email);
		$message->from = $this->email;
		
		Yii::app()->mail->send($message);	
		
	}	
	
	public function actionSuccess()
	{
		echo "done";
		die();
	}
	public function actionCreate()
	{
	#die('s');
	$model=new Feedbacks;	
	
	if(Yii::app()->getRequest()->getIsAjaxRequest()) {
		$a =  CActiveForm::validate( array( $model)); 
		if ($a == '[]')
			{
			$model->attributes=$_POST['Feedbacks'];
			if($model->save());
			$this->sendMail($_POST);
			}
		else echo $a;
		
		Yii::app()->end(); 
	}
	
	
	}

}

