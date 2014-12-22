<?php

/**
 * This is the model class for table "details".
 *
 * The followings are the available columns in table 'details':
 * @property integer $id
 * @property string $description
 * @property string $lang
 * @property integer $sub_category_id
 * @property integer $detail_type
 * @property integer $is_enabled
 *
 * The followings are the available model relations:
 * @property SubCategory $subCategory
 */
class Details extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, lang, sub_category_id', 'required'),
			array('sub_category_id, detail_type, is_enabled', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, lang, sub_category_id, detail_type, is_enabled', 'safe', 'on'=>'search'),
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
			'subCategory' => array(self::HAS_ONE, 'SubCategory', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'lang' => 'Lang',
			'sub_category_id' => 'Sub Category',
			'detail_type' => 'Detail Type',
			'is_enabled' => 'Is Enabled',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('sub_category_id',$this->sub_category_id);
		$criteria->compare('detail_type',$this->detail_type);
		$criteria->compare('is_enabled',$this->is_enabled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Details the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
