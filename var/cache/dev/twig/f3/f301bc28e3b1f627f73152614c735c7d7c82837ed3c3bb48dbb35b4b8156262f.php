<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d6a1f185d721555a2b8f5268968c7da370f91eda2b84a96130f894fdfba7941d extends Twig_Template
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
        $__internal_8b8e174a036157be8d186fc6b3881ec40e337019fd7ed71f94d172eaa9fc4ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e174a036157be8d186fc6b3881ec40e337019fd7ed71f94d172eaa9fc4ecf->enter($__internal_8b8e174a036157be8d186fc6b3881ec40e337019fd7ed71f94d172eaa9fc4ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2b222df5eec564589c91ded3de0807ad167092cb75049026141b3245b0f10653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b222df5eec564589c91ded3de0807ad167092cb75049026141b3245b0f10653->enter($__internal_2b222df5eec564589c91ded3de0807ad167092cb75049026141b3245b0f10653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8b8e174a036157be8d186fc6b3881ec40e337019fd7ed71f94d172eaa9fc4ecf->leave($__internal_8b8e174a036157be8d186fc6b3881ec40e337019fd7ed71f94d172eaa9fc4ecf_prof);

        
        $__internal_2b222df5eec564589c91ded3de0807ad167092cb75049026141b3245b0f10653->leave($__internal_2b222df5eec564589c91ded3de0807ad167092cb75049026141b3245b0f10653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
