<?php
     Yii::import('zii.widgets.CPortlet');
    Yii::import('feedback.models.Feedbacks');
    class FeedbackForm extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->items =  $items = News::model()->findAll(array('limit'=>10));
        parent::init();
    }
    
    
    protected function renderContent()
    {
		$model = new Feedbacks();
	#	var_dump($model);
	#	die();
	#	die();
	#	exit();
    if (isset ($this->items)) {
		$this->render('FeedbackForm', array('model'=>$model));
		}
    }
    
}	
