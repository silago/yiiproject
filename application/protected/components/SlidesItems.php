<?php
     Yii::import('zii.widgets.CPortlet');
    class SlidesItems extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->title=NULL;
		$this->items =  $items = Slides::model()->findAll();
    #   parent::init(array('title'=>'asd','id'=>'hui','class'=>'hui','htmlOptions'=>array('tagName'=>'div','id'=>"hui",'class'=>'hui')));
	#	parent->id='hui';
	}
    function renderDecoration()
    {
		
	}

	function run()
    {
		$this->renderContent();
	}

    protected function renderContent()
    {
    if (isset ($this->items)) {
		$this->render('SlidesItems', array('items'=>$this->items));
		}
    }
    
}	
