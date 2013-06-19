<?php

class ProfileController extends Controller
{

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionEdit()
    {
        $model = User::model()->findByPk(Yii::app()->user->uid);
        $this->pageTitle = 'Редактирование профиля';
        if (isset($_POST['User'])) {
            $password = $model->password;
            $model->attributes = $_POST['User'];
            if ($model->password == '') {
                $model->password = $password;
            } else {
                $model->password = md5($model->password);
            }
            if ($model->validate()) {
                $model->save();
                Yii::app()->user->setFlash('success', '<strong>Успех!</strong> Профиль успешно отредактирован.');
            } else {
                Yii::app()->user->setFlash('error', '<strong>Ошибка!</strong> Проверте поля еще раз.');
            }
        }
        $model->password = '';
        $this->render('edit', array('model' => $model));
    }
}