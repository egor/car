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
        $this->render('userLeftMenuWidget');
    }
}
?>