 <div style="padding: 8px 0;" class="well">
                        <?php
                        $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'list',
        'items' => array(
            
            array('label' => 'Личный кабинет'),
            //array('label'=>'Мои автомобили', 'icon' => 'road', 'url'=>array('site/index')),
            array('label' => 'Мои автомобили'),
            array('label'=>'Список', 'icon' => 'road', 'url'=>array('site/index')),
            array('label'=>'Добавить', 'icon' => 'plus', 'url'=>array('site/index')),
            array('label' => 'Расход топлива'),
            array('label'=>'Таврия', 'icon' => 'ok-circle', 'url'=>array('site/index')),
            array('label'=>'Mazda', 'icon' => 'ok-circle', 'url'=>array('site/index')),
            
            array('label' => 'Мой профиль'),
            array('label'=>'Редактировать', 'icon' => 'pencil', 'url'=>array('site/index')),
            
            array('label' => 'Помощь'),
            array('label'=>'Информация', 'icon' => 'info-sign', 'url'=>array('site/index')),
            
            
            
        ),
    ));
                        ?>
                    </div> 