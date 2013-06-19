<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'), array( 'components'=>array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=alt_car',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ),
        
        'loger' => array(
            'class'=>'system.db.CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=alt_car_loger',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ),
    ),
        
        )
);
?>