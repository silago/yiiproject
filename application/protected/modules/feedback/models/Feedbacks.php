<?php

/**
 * This is the model class for table "slides".
 *
 * The followings are the available columns in table 'slides':
 * @property integer $id
 * @property string $file
 * @property integer $order
 */
class Feedbacks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	#public $id_file;
	 
	public function tableName()
	{
		return 'feedbacks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, text, theme', 'required'),
			#array('order', 'numerical', 'integerOnly'=>true),
			#array('file', 'length', 'max'=>255),
			#array('file', 'file','types'=>'jpg, gif, png'),
			#// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			#array('id, file, order', 'safe', 'on'=>'search'),
			#array('file', 'file', 'types'=>'jpg, gif, png', 'maxSize' => 1048576),
			#array('id_file', 'DImageValidator'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'theme' => 'Theme',
			'text' => 'Text',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slides the static model class
	 */

    
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
