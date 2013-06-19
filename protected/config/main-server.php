<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array('components' => array(
                'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=',
                    'emulatePrepare' => true,
                    'username' => '',
                    'password' => '',
                    'charset' => 'utf8',
                ),
                    
                'loger' => array(
                    'class'=>'system.db.CDbConnection',
                    'connectionString' => 'mysql:host=localhost;dbname=',
                    'emulatePrepare' => true,
                    'username' => '',
                    'password' => '',
                    'charset' => 'utf8',
                ),
            ),
             
                )
);
?>