<?php
     Yii::import('zii.widgets.CPortlet');
    class TuhesMenu extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->hideOnEmpty=true;
		$controllerId = Yii::app()->controller;
		
		
		$this->items = $this->getChildren();
		
		
		
		#$this->menu= "fooo";
		#}
        parent::init();
    }
    
    protected function getChildren($id = 0)
    {
		 $items = Pages::model()->findAll('owner=:owner', array(':owner'=>$id));
		 foreach ($items as $i)	$items['children']=$this->getChildren($i->id);
		 return $items;
	}
    
    protected function renderContent()
    {
    if (isset ($this->items)) {
		#foreach ($this->items as $r)
		#	echo $r->title;
		#var_dump($this->items);
		#die();
		$this->render('TuhesMenu', array('items'=>$this->items));
		}
    }
    
}	
