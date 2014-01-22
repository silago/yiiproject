<?php
     Yii::import('zii.widgets.CPortlet');
    class TuhesMenu extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public $hui;
    public function init(){
		$this->hideOnEmpty=true;
		$controllerId = Yii::app()->controller;
		
		
		$this->items = $this->getChildren();
		
		
		
		#$this->menu= "fooo";
		#}
       ## parent::init();
    }
    
    protected function getChildren($id = 0)
    {	
		 $items = Pages::model()->findAll('owner=:owner', array(':owner'=>$id));
		 foreach ($items as &$i)	$i->children=$this->getChildren($i->id);
		#	 var_dump
		 return $items;
	}
    function run()
    {
		$this->renderContent();
	}
    protected function renderContent()
    {
    if (!empty ($this->hui)) {
		$this->render($this->hui, array('items'=>$this->items));
		}
    }
    
}	
