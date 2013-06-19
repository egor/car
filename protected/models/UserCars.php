<?php

/**
 * This is the model class for table "user_cars".
 *
 * The followings are the available columns in table 'user_cars':
 * @property string $user_cars_id
 * @property string $brand_cars_id
 * @property string $model_cars_id
 * @property string $user_id
 * @property string $driving_style_id
 * @property string $year
 * @property string $mileage
 * @property string $state
 * @property integer $visibility
 * @property string $name
 * @property string $date
 */
class UserCars extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserCars the static model class
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
		return 'user_cars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('brand_cars_id, model_cars_id, user_id, driving_style_id, year, mileage, state, visibility, name, date', 'required'),
                    array('brand_cars_id, model_cars_id, user_id, driving_style_id, year, mileage, state, visibility, name, date', 'safe'),
                    array('brand_cars_id, user_id, name, date', 'required'),
			array('visibility', 'numerical', 'integerOnly'=>true),
			array('brand_cars_id, model_cars_id, user_id, driving_style_id, year, mileage, state, date', 'length', 'max'=>10),
			array('name', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_cars_id, brand_cars_id, model_cars_id, user_id, driving_style_id, year, mileage, state, visibility, name, date', 'safe', 'on'=>'search'),
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
                    'brand_cars'=>array(self::BELONGS_TO, 'BrandCars', 'brand_cars_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_cars_id' => 'User Cars',
			'brand_cars_id' => 'Марка автомобиля',
			'model_cars_id' => 'Модель автомобиля',
			'user_id' => 'User',
			'driving_style_id' => 'Стиль вождения',
			'year' => 'Год выпуска',
			'mileage' => 'Пробег',
			'state' => 'Состояние',
			'visibility' => 'Показать другим пользователям информацию о расходах (анонимно)',
			'name' => 'Название (для Вашего удобства)',
			'date' => 'Date',
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

		$criteria->compare('user_cars_id',$this->user_cars_id,true);
		$criteria->compare('brand_cars_id',$this->brand_cars_id,true);
		$criteria->compare('model_cars_id',$this->model_cars_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('driving_style_id',$this->driving_style_id,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('mileage',$this->mileage,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('visibility',$this->visibility);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}