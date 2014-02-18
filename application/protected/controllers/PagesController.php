<?php

class PagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/public_base.twig'; 
	public $catTree = array();
	
	
	
    public function actions()
    {
        return array(
            'fileUpload'=>'application.widgets.redactor.actions.FileUpload',
            'imageUpload'=>'application.widgets.redactor.actions.ImageUpload',
            'imageList'=>'application.widgets.redactor.actions.ImageList',
        );
    }

	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		#	'postOnly + delete', // we only allow deletion via POST request
		);
	}
	




	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','actions','imageList','fileUpload','imageUpload'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($slug)
	{	#die($slug);
		$model = Pages::model()->find('slug=:slug', array(':slug'=>$slug));
		if ($model == NULL)
            throw new CHttpException(404, 'Записи не найдено!');
        
        if (($model->redirect) && (!empty($model->redirect)))
            {
            $this->redirect($model->redirect);
            return 1;
            }
        
        if (!empty($model->html_template)) 
			$this->render($model->html_template,array('model'=> $model));
		else
        $this->render('view_side',array('model'=> $model));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	
   

	public function actionCreate()
	{
		$model=new Pages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pages']))
		{
			$model->attributes=$_POST['Pages'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
        $model=$this->loadModel($id);

		if(isset($_POST['Pages']))
		{
			$model->attributes=$_POST['Pages'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	
	public function set($obj,$val)
	{
		$this->$obj = $val;
	
	}
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{			$dataProvider=new CActiveDataProvider('Pages',array('pagination' => array('pageSize' => 30,)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
