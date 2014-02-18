<?php
class ConfigpageModule extends CWebModule
{

    public function init()
    {
        $this->setImport(array(
            'configpage.models.*',
            'configpage.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            return true;
        }
        else
            return false;
    }
}
?>
