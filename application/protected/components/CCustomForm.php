<?php

class CCustomForm extends CActiveForm
{
    public function init()
    {
        parent::init();
    }


	public function dropDownList($data)
	{   
        $html='';
	    
        
        if (gettype($data)=='array')
        foreach($data as $id => $row):
            if ($id!=0){
            $html.="<option value='".$id."'>".$row['name']."</option>";
            if (!empty($row['children']))
            {
                $html.=$this->dropDownList($row['children']);
            }}
        endforeach;
        return $html; 
        //var_dump($data);
        
      //  die();
      //  exit(0);
    
    //return CHtml::activeDropDownList($model,$attribute,$data,$htmlOptions);
	}

}

?>
