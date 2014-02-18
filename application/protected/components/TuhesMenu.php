<?php
     Yii::import('zii.widgets.CPortlet');
    class TuhesMenu extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public $showHidden;
    public $id;
    public function init(){
		$this->hideOnEmpty=true;
		$controllerId = Yii::app()->controller;
	    
      	
		if (empty($this->id)) $this->id = 0;
		$this->items = $this->getChildren($this->id);
		
		
		
		#$this->menu= "fooo";
		#}
       ## parent::init();
    }

        function renderDecoration()
    {
		
	}

	function run()
    {
		$this->renderContent();
	}



    protected function getChildren($id = 0)
    {
    
    
        if ($this->showHidden=='0')
		     $items = Pages::model()->findAll('owner=:owner and in_menu=:in_menu', array(':owner'=>$id,':in_menu'=>1));
         else			     $items = Pages::model()->findAll('owner=:owner', array(':owner'=>$id));	 
         foreach ($items as &$i)	$i->children=$this->getChildren($i->id);
         #foreach ($items as &$i)	$i->children=$this->getChildren($i->id);
		 
         
         return $items;
	}
    protected function renderContent()
    {
    #$url =  Yii::app()->urlManager->parseUrl(Yii::app()->request);
    $url =  (Yii::app()->request->url);
    #var_dump($url);
    #echo "######";
    #die();
    
    if (empty($this->items)) return false;
	$this->render('TuhesMenu', array('items'=>$this->items,'url'=>$url));
    }
    
}	
