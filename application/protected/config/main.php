<?php
#debug_backtrace();
#die();
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
#echo dirname(__FILE__).DIRECTORY_SEPARATOR.'..';
#die();
return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'../',
	'name'=>'yii app',
	 'language' => 'ru',
	// preloading 'log' component
	'preload'=>array('log'),
	
    'import'=>array(
		'application.models.*',
		'application.feedback.models.*',
		'application.components.*',
		'ext.easyimage.EasyImage',
		'application.extensions.yii-mail.*',
		'ext.mail.YiiMailMessage',
	),

	

        
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'feedback',
        /*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'hui',
	'ipFilters' => array('127.0.0.1', '*'),	
        // If removed, Gii defaults to localhost only. Edit carefully to taste.
		),*/

        'configpage' => array(
            'components' => array(
                'config' => array(
                    'class' => 'EConfig',
                    'strictMode' => false,
                ),
            ),
        ),
	),

	// application components
	'components'=>array(
	
		'mail' => array(             
	  'class' => 'ext.yii-mail.YiiMail',             
	  'transportType' => 'php',             
	  'viewPath' => 'application.views.mail',             
	  'logging' => true,             
	  'dryRun' => false         ),
	
	
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
		),
		 'urlManager'=>array(
			'rules'=>array(
				'admin/'=>'site/admin/',
                'pages/read/<slug:.*?>'=>'pages/view',
				'news/read/<slug:.*?>'=>'news/view',
				'pages/update/<id:.*?>'=>'pages/update',
				'pages/delete/<id:.*?>'=>'pages/delete',
				'news/delete/<id:.*?>'=>'news/delete',
				'news/update/<id:.*?>'=>'news/update',
				'feedback/create'=>'feedback/default/create',
				'feedback/success'=>'feedback/default/success'
				),
            'urlFormat'=>'path',
			'showScriptName'=>false, 
        ),
        
         'easyImage' => array(
			'class' => 'application.extensions.easyimage.EasyImage',),
        
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=insite_filolog',
			'emulatePrepare' => true,
			'username' => 'insite_filolog',
			'password' => 'insite_filolog',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	
	  'viewRenderer' => array(
      'class' => 'application.vendor.yiiext.twig-renderer.ETwigViewRenderer',
      'twigPathAlias' => 'application.vendor.twig.twig.lib.Twig',

      // All parameters below are optional, change them to your needs
     'fileExtension' => '.twig',
      'options' => array(
   //       'autoescape' => true,
      ),
     // 'extensions' => array(
     //     'My_Twig_Extension',
     // ),
      'globals' => array(
     //     'html' => 'CHtml'
      ),
      'functions' => array(
     //     'rot13' => 'str_rot13',
      ),
      'filters' => array(
     //     'jencode' => 'CJSON::encode',
      ),
      // Change template syntax to Smarty-like (not recommended)
      'lexerOptions' => array(
     //     'tag_comment'  => array('{*', '*}'),
      //    'tag_block'    => array('{', '}'),
      //    'tag_variable' => array('{$', '}')
      ),
  ),
	
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
	
	
        
	


);

