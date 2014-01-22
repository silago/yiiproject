<?php
	#die('400000');

    Yii::import('zii.widgets.CPortlet');
    class TuhesFeedback extends CPortlet
    {
    public $title;
    public $menu;
    public $items;
    public function init(){
		$this->title=NULL;
		$this->items =  $items = Slides::model()->findAll();
    #   parent::init(array('title'=>'asd','id'=>'hui','class'=>'hui','htmlOptions'=>array('tagName'=>'div','id'=>"hui",'class'=>'hui')));
	#	parent->id='hui';

	# public static function registerUrlPatterns()
	
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
