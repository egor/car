<?php
/**
 * UserLeftMenu Вывод меню с лева
 * 
 * @package MyAuto
 * @category menu
 * @author Egor Rihnov <egor.developer@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013, Egor Rihnov
 */
class UserLeftMenuWidget extends CWidget
{
    /**
     * Вывод меню с лева
     * 
     * @return render userLeftMenu
     */
    public function init()
    {        
        $model = UserCars::model()->findAll(array('condition'=> '`user_id`="'.Yii::app()->user->uid.'"', 'order'=>'name'));
        $autoList[] = array('label' => 'Расход топлива');
        foreach ($model as $value) {
        $autoList[] = array('label'=>$value->name, 'icon' => 'ok-circle', 'url'=>array('/myAuto/fuel/'.$value->user_cars_id));
            
        }
        $this->render('userLeftMenuWidget', array ('autoList'=>$autoList));
    }
}
?>