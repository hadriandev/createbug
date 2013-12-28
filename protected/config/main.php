<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Hadrian',

	// preloading 'log' component
	'preload'=>array('bootstrap','log'),
	'theme'=>'bootstrap', 
	// autoloading model and component classes
	'import' => array( 
		'application.models.*', 
		'application.components.*', 
		'application.modules.user.models.*', 
		'application.modules.registration.models.*', 
		'application.modules.user.components.*', 
		'application.modules.user.controllers.*', 
		'application.modules.profile.models.*', 
		'application.modules.profile.components.*', 
		'application.modules.profile.controllers.*', 
		'application.modules.avatar.controllers.*', 
		'application.modules.avatar.models.*', 
		'application.modules.role.models.*', 
		'application.modules.friendship.controllers.*', 
		'application.modules.friendship.models.*', 
		'application.modules.message.controllers.*', 
		'application.modules.message.models.*', 
		'application.modules.message.components.*', 
		'ext.yii-mail.YiiMailMessage', 
		'application.extensions.crugeconnector.*', 
		'application.modules.hybridauth.controllers.*',
    	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
        'shop' => array( 'debug' => 'true'),
	'avatar' => array(), 
        'user' => array( 
          
            'avatarScaleImage' => TRUE, 
            'layout' => '//layouts/main', 
            'userLayout' => '//layouts/main', 
            'avatarPath' => '//images/avatar', 
            'enableProfileImage' => TRUE, 
            'profileImagePath' => dirname(__FILE__) . '/../../uploads/profiles/', 
            'profileImageWebPath' => '/uploads/profiles/', 
            //'returnUrl' => '//profile/view', 
            'debug' => false, 
            'registrationType' => 2, 
              'facebookConfig' => array(
                'appId' => '209756659189960',
                'secret' => '45bc7556a2d00c389fd8aaab2401a525',
                'domain' => 'http://www.yii-facebook.com/hadrian',
                'status' => true,
                'xfbml' => true,
                'cookie' => true,
                'lang' => 'en_US'
            ),
            'loginType' => 9,
            'activateFromWeb' => true, 
            'mailer' => 'PHPMailer', 
            'phpmailer' => array( 
                'transport' => 'smtp', 
                'html' => true, 
                'properties' => array( 
                    'CharSet' => 'UTF-8', 
                    //'Host' => 'mail.example.com', // SMTP server 
                    'SMTPDebug' => false, 
                    //'Sender'=>'Support',// enables SMTP debug information (for testing) 
                    'SMTPAuth' => true, // enable SMTP authentication 
                    'SMTPSecure' => 'tls', // sets the prefix to the servier 
                    'Host' => 'smtp.gmail.com', 
                    'Username' => 'vikki.iilm@gmail.com', //gmail username 
                    'Password' => 'Icandothisalone1989', 
                    'Port' => '25', 
                ), 
                'msgOptions' => array( 
                    'fromName' => 'Registration System', 
                    'toName' => 'You doomed user', 
                ), 
               ), 
		//'loginView' => '//user/login' 
		), 
		'usergroup' => array( 
		    'usergroupTable' => 'usergroup', 
		    'usergroupMessageTable' => 'user_group_message', 
		), 
		'membership' => array( 
		    'membershipTable' => 'membership', 
		    'paymentTable' => 'payment', 
		), 
		'friendship' => array( 
		    'friendshipTable' => 'friendship', 
		), 
		'profile' => array( 
		    'privacySettingTable' => 'privacysetting', 
		 //   'profileFieldTable' => 'profile_field', 
		    'profileTable' => 'profile', 
		    'profileCommentTable' => 'profile_comment', 
		    'profileVisitTable' => 'profile_visit', 
		), 
		'role' => array( 
		    'roleTable' => 'role', 
		    'userRoleTable' => 'user_role', 
		    'actionTable' => 'action', 
		    'permissionTable' => 'permission', 
		), 
		'message' => array( 
		    'messageTable' => 'message', 
		), 
		'registration' => array(
		    'enableActivationConfirmation' =>'false',			
		),
//		'hybridauth' => array(
//		    'baseUrl' => 'http://'. $_SERVER['SERVER_NAME'] . '/hadrian/index.php/hybridauth', 
//		    'withYiiUser' => false, // Set to true if using yii-user
//		    "providers" => array ( 
//		        "openid" => array (
//		            "enabled" => false
//		        ),
//	 
//		        "yahoo" => array ( 
//		            "enabled" => false 
//		        ),
//	 
//		        "google" => array ( 
//		            "enabled" => false,
//		            "keys"    => array ( "id" => "", "secret" => "" ),
//		            "scope"   => ""
//		        ),
//	 
//		        "facebook" => array ( 
//		            "enabled" => true,
//		            "keys"    => array ( "id" => "209756659189960", "secret" => "45bc7556a2d00c389fd8aaab2401a525" ),
//		            "scope"   => "email,publish_stream", 
//		            "display" => "" 
//		        ),
//	 
//		        "twitter" => array ( 
//		            "enabled" => false,
//		            "keys"    => array ( "key" => "", "secret" => "" ) 
//		        )
//		    )
//        ),
		
	),

	// application components
	'components'=>array(
		 'bootstrap' => array( 
		    'class' => 'bootstrap.components.Bootstrap', 
		), 
		'User' => array( 
		    'class' => 'User', 
		), 
		'user' => array( 
		    'class' => 'application.modules.user.components.YumWebUser', 
		    'allowAutoLogin' => true, 
		    'loginUrl' => array('/user/user/login'), 
		), 
		'cache' => array( 
		    'class' => 'system.caching.CFileCache', 
		//'class' => 'packages.redis.ARedisCache', 
		),
		'session' => array(
			'sessionName' => 'SiteSession',
			'class' => 'CHttpSession',
			'autoStart' => true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                  //  'showScriptName' => false,
                    'caseSensitive'=>true, 
                    
			'rules'=>array(
                     //        ''=>'site/index',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => '', 	
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'vikki.iilm@gmail.com',
	),
);
