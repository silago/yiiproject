<?php
     Yii::import('zii.widgets.CPortlet');
    class NewsItems extends CPortlet
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
    if (isset ($this->items)) {
		$this->render('NewsItems', array('items'=>$this->items));
		}
    }
    
}	
