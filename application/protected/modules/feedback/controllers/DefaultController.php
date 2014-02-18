<?php

class DefaultController extends Controller
{	
	public $layout='//layouts/public_base.twig'; 
	
	public $email = 'test@mail.ru';
	
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function sendMail($post)
	{
		
        $to = Yii::app()->params['adminEmail'];
        $from = Yii::app()->params['fromEmail'];

		$message = new YiiMailMessage;
		$message->view = 'mail';
		$message->setBody(array(), 'text/html');
		 
		 
		$message->addTo($to);
		$message->from = $from;
		
		Yii::app()->mail->send($message);	
		
	}	
	
	public function actionSuccess()
	{
	    $this->redirect('/application/site/feedback/');
        #$this->render('view');
		#die();
	}
	public function actionCreate()
	{
	$model=new Feedbacks;	
    #echo "sart";	
	if(Yii::app()->getRequest()->getIsAjaxRequest()) {
		$a =  CActiveForm::validate( array( $model)); 
		if ($a == '[]')
			{
			$model->attributes=$_POST['Feedbacks'];
			if($model->save());
			$this->sendMail($_POST);
			#echo "send";
            }
		echo $a;
		#echo "not send";
		Yii::app()->end(); 
	}
	
	
	}

}

