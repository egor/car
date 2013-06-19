<?php
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
    'theme' => 'metro',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Upline24',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.admin.modules.media.components.*',
        'application.vendors.phpexcel.PHPExcel',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        /*
          'gii'=>array(
          'class'=>'system.gii.GiiModule',
          'password'=>'Enter Your Password Here',
          // If removed, Gii defaults to localhost only. Edit carefully to taste.
          'ipFilters'=>array('127.0.0.1','::1'),
          ),
         */
        'gii' => array(
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
            'class' => 'system.gii.GiiModule',
            'password' => 'test',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'admin',
        'admin.photo',
        'media',
        'admin.media',
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'admin/media/photo/add/<lang:\w+>' => 'admin/media/photo/add',
                //'admin/uploadify/upload.php' => 'admin/uploadify/upload',
                'admin/CMSNews/<id:\d+>' => 'admin/CMSNews/detail',
                'admin/CMSNews/add/<lang:\w+>' => 'admin/CMSNews/add',
                'admin/CMSHelp/<id:\d+>' => 'admin/CMSHelp/detail',
                'admin/CMSHelp/edit/<id:\d+>' => 'admin/CMSHelp/edit',
                'admin/news/add/<lang:\w+>' => 'admin/news/add',
                'admin/pages/add/<lang:\w+>' => 'admin/pages/add',
                'admin/leaders/add/<lang:\w+>' => 'admin/leaders/add',
                'admin/horizontalMenu/add/<lang:\w+>' => 'admin/horizontalMenu/add',
                'admin/calendar/add/<lang:\w+>' => 'admin/calendar/add',
                'admin/shop/add/<lang:\w+>' => 'admin/shop/add',
                'admin/quotes/add/<lang:\w+>' => 'admin/quotes/add',
                //'<modules:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<modules>/<controller>/<action>',
                'admin/<controller:\w+>/<action:\w+>/<id:\d+>' => 'admin/<controller>/<action>',
                'admin/<controller:\w+>/<action:\w+>' => 'admin/<controller>/<action>',
                'admin/<modules:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => 'admin/<modules>/<controller>/<action>',
                'admin/<modules:\w+>/<controller:\w+>/<action:\w+>' => 'admin/<modules>/<controller>/<action>',
                
                'userLogin' => 'site/userLogin',
                'userLogout' => 'site/userLogout',
                'payment/<action:\w+>' => 'payment/<action>',
                //'enter' => 'site/enter',
                
                
                array(
                    'class' => 'application.components.CheckLanguage',
                    'connectionID' => 'db',
                ),

                
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

                '<modules:\w+>/<controller:\w+>/<id:\d+>' => '<modules>/<controller>/view',
                '<modules:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<modules>/<controller>/<action>',
                '<modules:\w+>/<controller:\w+>/<action:\w+>' => '<modules>/<controller>/<action>',

                
                '<language:\w+>/<modules:\w+>/<controller:\w+>/<id:\d+>' => '<modules>/<controller>/view',                
                '<language:\w+>/<modules:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<modules>/<controller>/<action>',
                '<language:\w+>/<modules:\w+>/<controller:\w+>/<action:\w+>/<lang:\w+>' => '<modules>/<controller>/<action>',
                '<language:\w+>/<modules:\w+>/<controller:\w+>/<action:\w+>' => '<modules>/<controller>/<action>',
                '<language:\w+>/<controller:\w+>' => '<controller>/index',
                '<language:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',                
                '<language:\w+>/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        

        /*
        
        */
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
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
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'egor.developer@gmail.com',
        'pasSalt' => 'p3k272If',
        'defaultLanguage' => 'ru',
        'siteLanguage' => array(
            'ru' => array(
                'name' => 'Русский',
                'work' => 1,
                'description'=>'русский',
            ),
            'en' => array(
                'name' => 'English',
                'work' => 1,
                'description'=>'английский',
            ),
            'ua' => array(
                'name' => 'Украинский',
                'work' => 0,
                'description'=>'украинский',
            ),
            'fr' => array(
                'name' => 'France',
                'work' => 0,
                'description'=>'французкий',
            ),
            'hu' => array(
                'name' => 'Magyar',
                'work' => 0,
                'description'=>'венгерский',
            ),
            'kk' => array(
                'name' => 'Қазақ',
                'work' => 0,
                'description'=>'казахский',
            ),
        ),
        'siteDateFormat' => array(
            'ru' => array(
                'month' => array(
                    'short' => array(
                        '01' => 'янв',
                        '02' => 'фев',
                        '03' => 'мрт',
                        '04' => 'апр',
                        '05' => 'мая',
                        '06' => 'июн',
                        '07' => 'июл',
                        '08' => 'авг',
                        '09' => 'сен',
                        '10' => 'окт',
                        '11' => 'нбр',
                        '12' => 'дек'
                    ),
                ),
            ),
            'en' => array(
                'month' => array(
                    'short' => array(
                        '01' => 'Jan',
                        '02' => 'Feb',
                        '03' => 'Mar',
                        '04' => 'Apr',
                        '05' => 'May',
                        '06' => 'Jun',
                        '07' => 'Jul',
                        '08' => 'Aug',
                        '09' => 'Sep',
                        '10' => 'Oct',
                        '11' => 'Nov',
                        '12' => 'Dec'
                    ),
                ),
            ),
        ),
        'siteLanguageDefault' => 'ru',        
        'multiAuth' => 0,
        'localIP' => '127.0.0.1',
        'updateMessage' => '<center>Ведутся технические работы. Приносим свои извинения за доставленные неудобства.<br />Conducting technical work. We apologize for any inconvenience.</center>',
        'developerKey' => 'ShowMeAll',
        'developerKeyExit' => 'HideMeAll',
        
        //флаги логирования
        'loger' => true,
        'logerAdmin' => true,
        'logerUser' => true,
        'logerRbk' => 1,
        'logerQiwi' => 1,
    ),
);