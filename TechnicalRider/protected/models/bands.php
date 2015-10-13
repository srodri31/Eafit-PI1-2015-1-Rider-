<?php

/**
 * This is the model class for table "tband".
 *
 * The followings are the available columns in table 'tband':
 * @property integer $id_band
 * @property string $name_band
 * @property string $gender_band
 * @property string $desc_band
 * @property string $code_band
 */
class bands extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tband';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_band, gender_band, desc_band, code_band', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_band, name_band, gender_band, desc_band, code_band', 'safe', 'on'=>'search'),
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
			'id_band' => 'Id Band',
			'name_band' => 'Name Band',
			'gender_band' => 'Gender Band',
			'desc_band' => 'Desc Band',
			'code_band' => 'Code Band',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_band',$this->id_band);
		$criteria->compare('name_band',$this->name_band,true);
		$criteria->compare('gender_band',$this->gender_band,true);
		$criteria->compare('desc_band',$this->desc_band,true);
		$criteria->compare('code_band',$this->code_band,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return bands the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
