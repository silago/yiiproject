<?php
     Yii::import('zii.widgets.CPortlet');
    class SlidesItems extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->items =  $items = Slides::model()->findAll(array('limit'=>10));
        parent::init();
    }
    
    
    protected function renderContent()
    {
    if (isset ($this->items)) {
		$this->render('Slides', array('items'=>$this->items));
		}
    }
    
}	
