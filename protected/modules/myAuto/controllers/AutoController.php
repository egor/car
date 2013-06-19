<?php

class AutoController extends Controller
{

    public function actionIndex()
    {
        $this->pageTitle = 'Мои автомобили';
        $this->pageHeader = 'Мои автомобили';
        $this->breadcrumbsTitle = 'Мои автомобили';
        $model = UserCars::model()->with('brand_cars')->findAll(array('condition' => '`user_id`="'.Yii::app()->user->uid.'"', 'order' => 't.name'));
        $this->render('index', array('model' => $model));
    }

    public function actionAdd()
    {
        $this->pageTitle = 'Добавление автомобиля';
        $this->pageHeader = 'Добавление автомобиля';
        $this->breadcrumbsTitle = 'Добавление автомобиля';
        $model = new UserCars;
        if (isset($_POST['UserCars'])) {
            $model->attributes = $_POST['UserCars'];
            $model->user_id = Yii::app()->user->uid;
            $model->date = time();
            if ($model->validate()) {
                $model->save();
                Yii::app()->user->setFlash('success', '<strong>Успех!</strong> Автомобиль успешно добавлен.');
                if (isset($_POST['yt1']) && !isset($_POST['yt2'])) {
                    Yii::app()->request->redirect('/myAuto/auto');
                } else {
                    Yii::app()->request->redirect('/myAuto/auto/edit/' . $model->user_cars_id);
                }
            } else {
                Yii::app()->user->setFlash('error', '<strong>Ошибка!</strong> Проверте поля еще раз.');
            }
        }
        $this->render('autoForm', array('model' => $model));
    }

    public function actionEdit($id)
    {
        $model = UserCars::model()->findByPk($id);
        $this->pageTitle = 'Редактирование автомобиля (' . $model->name . ')';
        $this->pageHeader = 'Редактирование автомобиля (' . $model->name . ')';
        $this->breadcrumbsTitle = 'Редактирование автомобиля (' . $model->name . ')';
        if (isset($_POST['UserCars']) && !isset($_POST['yt2'])) {
            $model->attributes = $_POST['UserCars'];
            if ($model->validate()) {
                $model->save();
                Yii::app()->user->setFlash('success', '<strong>Успех!</strong> Автомобиль успешно отредактирован.');
                if (isset($_POST['yt1'])) {
                    Yii::app()->request->redirect('/myAuto/auto');
                }
            } else {
                Yii::app()->user->setFlash('error', '<strong>Ошибка!</strong> Проверте поля еще раз.');
            }
        }
        $this->render('autoForm', array('model' => $model));
    }

}