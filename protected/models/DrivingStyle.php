<?php

/**
 * This is the model class for table "driving_style".
 *
 * The followings are the available columns in table 'driving_style':
 * @property string $driving_style_id
 * @property string $name
 * @property string $position
 * @property integer $visibility
 */
class DrivingStyle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DrivingStyle the static model class
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
		return 'driving_style';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, position, visibility', 'required'),
			array('visibility', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('position', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('driving_style_id, name, position, visibility', 'safe', 'on'=>'search'),
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
			'driving_style_id' => 'Driving Style',
			'name' => 'Name',
			'position' => 'Position',
			'visibility' => 'Visibility',
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

		$criteria->compare('driving_style_id',$this->driving_style_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('visibility',$this->visibility);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}