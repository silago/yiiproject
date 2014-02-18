<?php
class WtsController extends Controller
{
    public function actionIndex()
    {
        $model = new WtsConfigForm;

        foreach ($model->attributes as $attr => $val) {
            $model->$attr = Yii::app()->getModule('configpage')->config->get($attr);
        }

        $form = new CForm('configpage.views.wts.configForm', $model);
        if ($form->submitted('configPage') && $form->validate()) {

            foreach ($model->attributes as $attr => $val) {
                Yii::app()->getModule('configpage')->config->set($attr, $val);
            }
            $this->render('config', array('form' => $form));
        } else {
            $this->render('config', array('form' => $form));
        }
    }

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


}
?>
