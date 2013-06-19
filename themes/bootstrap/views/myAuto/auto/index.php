<?php
/* @var $this AutoController */

$this->breadcrumbs=array(
	'Авто' => '/myAuto',
        $this->breadcrumbsTitle
);
?>
<h1><?php echo $this->pageHeader ?></h1>
<?php if (!$model) { ?>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Внимание!</h4>
  <p>У Вас нет добавленных автомобилей. <a href="/myAuto/auto/add">Добавить автомобиль</a></p>
</div>
<?php
} else {
?>
<table class="table table-hover">
    <tr>
        <td><a rel="tooltip" title="Название" rel=""><i class=" icon-font"></i></a></td>
        <td><a rel="tooltip" title="Марка"><i class="icon-star-empty"></i></a></td>
        <td><a rel="tooltip" title="Пробег"><i class="icon-road"></i></a></td>
        <td><a rel="tooltip" title="Показать другим пользователям информацию о расходах (анонимно)"><i class="icon-eye-open"></i></a></td>
        <td></td>
    </tr>
    <?php
    foreach ($model as $value) {
            ?>
            <tr id="tr-<?php echo $value->user_cars_id; ?>">
        <td><a href="/myAuto/fuel/<?php echo $value->user_cars_id; ?>" title="Перейти к истории расходов на топливо" rel="tooltip"><?php echo $value->name; ?></a></td>
        <td><?php echo $value->brand_cars->name; ?></td>
        <td><?php echo $value->mileage; ?></td>
        <td><?php echo ($value->visibility == 1 ? '<a rel="tooltip" title="Да"><i class="icon-ok-sign"></i></a>' : '<a rel="tooltip" title="Нет"><i class="icon-minus-sign"></i></a>'); ?></td>
        <td><nobr>
        <a href="/myAuto/auto/edit/<?php echo $value->user_cars_id; ?>" title="Редактировать данные о автомобиле" rel="tooltip"><i class="icon-pencil"></i></a>&nbsp;
        <a href="#" onclick="autoDelete(<?php echo $value->user_cars_id; ?>); return false;" title="Удалять данные о автомобиле" rel="tooltip"><i class="icon-remove"></i></a>
        </nobr></td>
        </tr>          
        <?php
        
        }
        echo '</table>';   
}