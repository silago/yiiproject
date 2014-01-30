<?php

/* /views/pages/admin.twig */
class __TwigTemplate_e4d9cd3c936497f89750b40c4e176f5d087200542ddac34d557e5d6149916c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
/* @var \$this PagesController */
/* @var \$model Pages */

\$this->breadcrumbs=array(
\t'Pages'=>array('index'),
\t'Manage',
);

\$this->menu=array(
\tarray('label'=>'List Pages', 'url'=>array('index')),
\tarray('label'=>'Create Pages', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', \"
\$('.search-button').click(function(){
\t\$('.search-form').toggle();
\treturn false;
});
\$('.search-form form').submit(function(){
\t\$('#pages-grid').yiiGridView('update', {
\t\tdata: \$(this).serialize()
\t});
\treturn false;
});
\");
?>

<h1>Manage Pages</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class=\"search-form\" style=\"display:none\">
<?php \$this->renderPartial('_search',array(
\t'model'=>\$model,
)); ?>
</div><!-- search-form -->

<?php \$this->widget('zii.widgets.grid.CGridView', array(
\t'id'=>'pages-grid',
\t'dataProvider'=>\$model->search(),
\t'filter'=>\$model,
\t'columns'=>array(
\t\t'id',
\t\t'owner',
\t\t'order',
\t\t'title',
\t\t'slug',
\t\t'content',
\t\t/*
\t\t'html_title',
\t\t'html_description',
\t\t'htm_keywords',
\t\t*/
\t\tarray(
\t\t\t'class'=>'CButtonColumn',
\t\t),
\t),
)); ?>
";
    }

    public function getTemplateName()
    {
        return "/views/pages/admin.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
