<?php

/**
 * This is the model class for table "sub_category".
 *
 * The followings are the available columns in table 'sub_category':
 * @property integer $id
 * @property integer $category_id
 * @property string $sub_category
 * @property string $lang
 * @property integer $parent_sub_category_id
 * @property integer $child_category_available
 * @property integer $is_enabled
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Details $id0
 */
class SubCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sub_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, sub_category, lang', 'required'),
			array('category_id, parent_sub_category_id, child_category_available, is_enabled', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, sub_category, lang, parent_sub_category_id, child_category_available, is_enabled', 'safe', 'on'=>'search'),
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
			'category' => array(self::HAS_ONE, 'Category', 'id'),
			'id0' => array(self::BELONGS_TO, 'Details', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_id' => 'Category',
			'sub_category' => 'Sub Category',
			'lang' => 'Lang',
			'parent_sub_category_id' => 'Parent Sub Category',
			'child_category_available' => 'Child Category Available',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('sub_category',$this->sub_category,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('parent_sub_category_id',$this->parent_sub_category_id);
		$criteria->compare('child_category_available',$this->child_category_available);
		$criteria->compare('is_enabled',$this->is_enabled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
