<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $user_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $status
 * @property string $role
 * @property integer $date
 * @property integer $visiblity
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    
                                array('name', 'required', 'on' => 'registration', 'message' => 'Введите Ваше имя.'),
            array('email', 'required', 'on' => 'registration', 'message' => 'Введите Ваш e-mail.'),
            array('email', 'email', 'on' => 'registration', 'message' => 'E-mail введен не корректно.'),
            array('email', 'unique', 'on' => 'registration', 'message' => 'Пользователь с таким e-mail уже зарегистрирован.'),
            
            array('password', 'required', 'on' => 'registration', 'message' => 'Введите пароль'),
            array('password', 'length', 'min' => '5', 'on' => 'registration', 'message' => 'Пароль должен быть не мение 5-ти символов.'),

                    
			//array('name, email, password, status, role, date, visiblity', 'required'),
                        array('name, email, password, status, role, date, visiblity', 'safe'),
                        array('name, email, password, status, role, date', 'required'),
			array('status, date, visiblity', 'numerical', 'integerOnly'=>true),
			array('name, password', 'length', 'max'=>255),
			array('email', 'length', 'max'=>50),
			array('role', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, name, email, password, status, role, date, visiblity', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'name' => 'Имя',
			'email' => 'Email',
			'password' => 'Пароль',
			'status' => 'Status',
			'role' => 'Role',
			'date' => 'Date',
			'visiblity' => 'Visiblity',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('date',$this->date);
		$criteria->compare('visiblity',$this->visiblity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}