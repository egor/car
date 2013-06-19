<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Главная', 'url'=>array('site/index')),
                array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'контакты', 'url'=>array('/site/contact')),
                array('label'=>'Войти', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Регистрация', 'url'=>array('site/registration'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

                            <div class="row-fluid">
                <div class="span3">   
                   
                   <?php $this->widget('UserLeftMenuWidget'); ?>
                    
                             
                    <div class="well sidebar-nav">

                        <p>Сегодня: <?php echo date('d.m.Y'); ?></p>
                            
                    </div>
                    <!--Sidebar content-->
                </div>
                <div class="span9">
<?php echo $content; ?>

                    <!--Body content-->
                </div>
            </div>
                
	<?php //echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by ALT.<br/>
		Будете красть идеи — переедем Вас катком.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
