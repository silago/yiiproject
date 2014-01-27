<?php
     Yii::import('zii.widgets.CPortlet');
    class TuhesSlides extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public $hui;
    public function init(){
		$this->hideOnEmpty=true;
		$controllerId = Yii::app()->controller;
		
		
		$this->items = Slides::model()->findAll();
		
		
		
		#$this->menu= "fooo";
		#}
        parent::init();
    }
    
   
    
    protected function renderContent()
    {
   # if (!empty ($this->hui)) {
		$this->render('TuhesSlides', array('items'=>$this->items));
	#	}
    }
    
}	
