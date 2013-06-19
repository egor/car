<?php
/* @var $this ProfileController */

$this->breadcrumbs=array(
	'Авто' => '/myAuto',
        'Мой профиль' => '/myAuto/profile',
        'Редактирование профиля'
);
?>
<h1>Редактирование профиля</h1>
<small>Поля отмеченные <span class="required">*</span> обязательны  для заполнения</small>
<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'verticalForm',
    'htmlOptions' => array('class' => 'well'),
        )
);
echo $form->textFieldRow($model, 'name', array('class' => 'span12', 'rows' => 7));
echo $form->textFieldRow($model, 'password', array('class' => 'span12', 'rows' => 7));
?>
<small>Оставте поле "Пароль" пустым, если Вы не хотите менять пароль</small>
<div class="form-actions" style="text-align: right;">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Сохранить')); ?>
</div>
<?php
$this->endWidget();
?>