<?php
/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property integer $owner
 * @property string $pubDate
 * @property string $image
 * @property string $title
 * @property string $preview
 * @property string $content
 * @property string $html_title
 * @property string $html_description
 * @property string $html_keywords
 * @property string $html_template
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			array('owner', 'numerical', 'integerOnly'=>true),
			array('title, html_title, html_description, html_keywords, html_template', 'length', 'max'=>255),
			array('preview, pubDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner, pubDate, title, preview, content, html_title, html_description, html_keywords, html_template', 'safe', 'on'=>'search'),
			# array('pubDate','default',
            #  'value'=>new CDbExpression('NOW()'),
            #  'setOnEmpty'=>false,'on'=>'insert')	
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
			'id' => 'ID',
			'owner' => 'Владелец',
			'pubDate' => 'Дата создания',
			'title' => 'Заголовок',
			'preview' => 'Краткое описание',
            'image'   => 'Изображение',
			'content' => 'Содержание',
            'html_title' => 'HTML Заголовок',
			'html_description' => 'HTML Описание',
			'html_keywords' => 'HTML Ключевые слова',
			'html_template' => 'HTML Шаблон',
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
		$criteria->compare('pubDate',$this->pubDate,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('preview',$this->preview,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('html_title',$this->html_title,true);
		$criteria->compare('html_description',$this->html_description,true);
		$criteria->compare('html_keywords',$this->html_keywords,true);
		$criteria->compare('html_template',$this->html_template,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	    public static function getParentAsArray($id){
    $result = array();
    #return $result;
    $parentId = -1;
    $stop = "0";
    
    
    $item = false;
    while ($parentId !== $stop && $parentId!=''){
        $item = self::model()->find('id=:id',array(':id'=>$id));
        $parentId = $item->owner;
        $id = $item->id;
        $result[]= array('id'=>$item->id,'name'=>$item->title,'url'=>'/application/news/read/'.$item->slug);
    }
    return $result; 

    }


	public function beforeSave() {
    #var_dump($this);
    #die();
    #exit(0);
    #if ($this->isNewRecord)
    #    $this->pubDate = new CDbExpression('NOW()'); 
    
   # $this->pubDate=strtotime($this->pubDate);
    
    return parent::beforeSave();
	} 
	 
    public function behaviors(){
        return array(
            'SlugBehavior' => array(
            'class' => 'application.models.behaviors.SlugBehavior',
            'slug_col' => 'slug',
            'title_col' => 'title',
            #'max_slug_chars' => 125,
            'overwrite' => false
            )
        );
    }
    
    

    
                






	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
