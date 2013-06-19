<?php
/* @var $this AutoController */

$this->breadcrumbs=array(
	'Авто' => '/myAuto',
        'Мои автомобили' => '/myAuto/auto',
        $this->breadcrumbsTitle
);
?>
<h1><?php echo $this->pageHeader; ?></h1>

<small>Поля отмеченные <span class="required">*</span> обязательны  для заполнения</small>
<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'verticalForm',
    'htmlOptions' => array('class' => 'well'),
        )
);
echo $form->textFieldRow($model, 'name', array('class' => 'span12', 'rows' => 7));
if (isset($edit)) {
    echo $form->checkBoxRow($model, 'visibility', array('checked' => 'checked'));
} else {
    echo $form->checkBoxRow($model, 'visibility');
}
echo $form->dropDownListRow($model, 'brand_cars_id', CHtml::listData(BrandCars::model()->findAll(array('order' => 'name')), 'brand_cars_id', 'name'), array('class' => 'span12'));
echo $form->textFieldRow($model, 'year', array('class' => 'span12', 'rows' => 7));
echo $form->textFieldRow($model, 'mileage', array('class' => 'span12', 'rows' => 7));
echo $form->textFieldRow($model, 'state', array('class' => 'span12', 'rows' => 7));
echo $form->dropDownListRow($model, 'driving_style_id', CHtml::listData(DrivingStyle::model()->findAll(array('order' => 'position')), 'driving_style_id', 'name'), array('class' => 'span12'));
?>
<div class="form-actions" style="text-align: right;">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Сохранить')); ?>&nbsp;
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'info', 'label' => 'Сохранить и выйти')); ?>&nbsp;
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Отмена')); ?>
</div>
<?php
$this->endWidget();
?>