<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3db0d3dd5fb868862852bfa9f536014606d86ba3fcf67ab5bd65fca2a86860fc extends Twig_Template
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
        $__internal_ef1f89c17392d8299ebe0d313b1a31ce9912a5a4918026b68d2956869d6bc244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1f89c17392d8299ebe0d313b1a31ce9912a5a4918026b68d2956869d6bc244->enter($__internal_ef1f89c17392d8299ebe0d313b1a31ce9912a5a4918026b68d2956869d6bc244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8b1848df2007cbb9e30680db6c7d5c8e2a1425089ca4319f97d3c133573a6532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1848df2007cbb9e30680db6c7d5c8e2a1425089ca4319f97d3c133573a6532->enter($__internal_8b1848df2007cbb9e30680db6c7d5c8e2a1425089ca4319f97d3c133573a6532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ef1f89c17392d8299ebe0d313b1a31ce9912a5a4918026b68d2956869d6bc244->leave($__internal_ef1f89c17392d8299ebe0d313b1a31ce9912a5a4918026b68d2956869d6bc244_prof);

        
        $__internal_8b1848df2007cbb9e30680db6c7d5c8e2a1425089ca4319f97d3c133573a6532->leave($__internal_8b1848df2007cbb9e30680db6c7d5c8e2a1425089ca4319f97d3c133573a6532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
