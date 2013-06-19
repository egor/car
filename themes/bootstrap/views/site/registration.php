<?php
/* @var $this UserController */
$this->breadcrumbs = array(
    'Регистрация',
);
?>
<h1>Регистрация</h1>
<small>Поля отмеченные <span class="required">*</span> обязательны  для заполнения</small>
<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'verticalForm',
    'htmlOptions' => array('class' => 'well'),
        )
);
echo $form->textFieldRow($model, 'name', array('class' => 'span12', 'rows' => 7));
echo $form->textFieldRow($model, 'email', array('class' => 'span12', 'rows' => 7));
echo $form->textFieldRow($model, 'password', array('class' => 'span12', 'rows' => 7));

?>
<div class="form-actions" style="text-align: right;">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Регистрация')); ?>
</div>
<?php
$this->endWidget();
?>