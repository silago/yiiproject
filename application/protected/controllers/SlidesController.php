<?php

class SlidesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Slides;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		#if(isset($_POST['Slides']))
		#{
		#	$model->attributes=$_POST['Slides'];
		#	if($model->save())
		#		$this->redirect(array('view','id'=>$model->id));
		#}
		#$modSlides=new Slides;
		
		#$modMyModel=new MyModel;
		
        if(isset($_POST['Slides'])){
            $model->attributes=$_POST['Slides'];
            $model->file=CUploadedFile::getInstance($model,'file');
            
            if ($model->file){
				$f = pathinfo($model->file->getName());	
				$path = $_SERVER['DOCUMENT_ROOT'].'/application/uploads/';
				$prefix= (string)time();
				$name  = $prefix.'_'.$f['filename'].'.'.$f['extension'];
				
				$fileName = $path.$name;
				$thumbName = $path.'thumb_'.$name;
				#$thumbName = $_SERVER['DOCUMENT_ROOT'].'/application/uploads/thumb_'.time().'-'.$f['filename'].'.'.$f['extension'];
			
				
				#die($width);
			
			}
			
            if($model->save()){
				
				
				$model->file->saveAs($fileName)	;
				
			

				$model->file=  $name;
				$model->save();
				
				
				$imagevariables=getimagesize($fileName);
		
				$width_ = '957';  $wratio = $imagevariables[0]/$width_;
				$height_ = '297'; $hratio = $imagevariables[1]/$height_;
			#	echo $wratio;
			#	echo '-';
			#	echo $hratio;
				
				$new_width = $width_;
				$new_height = $height_;
				if ($wratio<$hratio)
					$new_height = NULL;
				else
					$new_width = NULL;
								
				$image = new EasyImage($fileName);
			#	echo '---'.$new_width;
			#	echo '---'.$new_height;
				#echo "<pre>";
				
#echo "width=".$image['width'];
				#$a = var_export(($image));
				#echo (gettype($a));
				
				#echo "</pre>";
			#	die();
				
				$image->resize($new_width, $new_height);
				$image->crop($width_, $height_);
				$image->save($thumbName);
	
            }
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Slides']))
		{
			$model->attributes=$_POST['Slides'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Slides');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Slides('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Slides']))
			$model->attributes=$_GET['Slides'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Slides the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Slides::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Slides $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='slides-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
}
