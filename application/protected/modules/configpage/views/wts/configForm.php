<?php
return array(
    'elements'=>array(

        'mainSettings'=>array(
            'type'=>'form',
            'title'=>'Основные настройки',
            'elements'=>array(
                'applicationName'=>array('type'=>'text',),
                'applicationShortDesc'=>array('type'=>'text',),
            ),
        ),

        'systemSettings'=>array(
            'type'=>'form',
            'title'=>'Системные настройки',
            'elements'=>array(
                'adminEmail'=>array('type'=>'text',),
                'fromEmail'=>array('type'=>'text',),
                'giiPassword'=>array('type'=>'text', ),
            ),
        ),
    ),

    'buttons'=>array(
        'configPage'=>array(
            'type'=>'submit',
            'label'=>'Сохранить',
        ),
    ),
);

?>
