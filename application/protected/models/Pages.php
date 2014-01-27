<?php
/* author: silago ||  silago.nevermind@gmail.com 2014  */



/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property integer $owner
 * @property integer $order
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $html_template
 * @property string $html_title
 * @property string $html_description
 * @property string $htm_keywords
 */
class Pages extends CActiveRecord
{	
	public $children = array();
	#private $_children = array();
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner, order, title, slug, content', 'required'),
			array('owner, order', 'numerical', 'integerOnly'=>true),
			array('title, slug, html_template, html_title, html_description, htm_keywords', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner, order, title, slug, content, html_title, html_description, htm_keywords', 'safe', 'on'=>'search'),
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
		'owner'=>array(self::BELONGS_TO, 'Pages','id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'owner' => 'Owner',
			'order' => 'Order',
			'title' => 'Title',
			'slug' => 'Slug',
			'content' => 'Content',
			'html_template' => 'Html Template',
			'html_title' => 'Html Title',
			'html_description' => 'Html Description',
			'htm_keywords' => 'Htm Keywords',
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
		$criteria->compare('owner',$this->owner);
		$criteria->compare('order',$this->order);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('html_title',$this->html_title,true);
		$criteria->compare('html_description',$this->html_description,true);
		$criteria->compare('htm_keywords',$this->htm_keywords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function getTree($id=0,$prefix='')
	{
		$result = array();
		if ($id === 0) $result[0] = 'NULL';
		$tree =  self::model()->findAll('owner=:owner', array(':owner'=>$id));	
		foreach ($tree as &$row):
			$result[$row->id] = $row->title;
			$ch = self::model()->getTree($row->id);
			if (!empty($ch))$result[$row->title]  =  $ch;
		endforeach;
		return $result;	
	}
	

    /* Конечно же этот код нужно переписать слегка,
     * но пока что пусть будет таким.
     * Нужно добавить генерацию урлов, ибо это 
     * не лезет ни в какие ворота
     */

 	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
