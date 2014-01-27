<?php
     Yii::import('zii.widgets.CPortlet');
    class SitewidgetsItems extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->items =  $items = Sitewidgets::model()->findAll(array('limit'=>10));
        parent::init();
    }
    
    
    protected function renderContent()
    {
    if (isset ($this->items)) {
		$this->render('SitewidgetsItems', array('items'=>$this->items));
		}
    }
    
}	
