<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0587dfdd12547dc1ecd143dfd8b204c0e0542537e1d370d0f965d3838005e51c extends Twig_Template
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
        $__internal_3597b3fd7343bb1be454d4a42267af10d4c43b4ba98a2e71477642d05bdcfb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3597b3fd7343bb1be454d4a42267af10d4c43b4ba98a2e71477642d05bdcfb93->enter($__internal_3597b3fd7343bb1be454d4a42267af10d4c43b4ba98a2e71477642d05bdcfb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_277b57fce29df9f7743316d5dd039c038b07f6f328fc25a14ed77d9503e5c481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277b57fce29df9f7743316d5dd039c038b07f6f328fc25a14ed77d9503e5c481->enter($__internal_277b57fce29df9f7743316d5dd039c038b07f6f328fc25a14ed77d9503e5c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3597b3fd7343bb1be454d4a42267af10d4c43b4ba98a2e71477642d05bdcfb93->leave($__internal_3597b3fd7343bb1be454d4a42267af10d4c43b4ba98a2e71477642d05bdcfb93_prof);

        
        $__internal_277b57fce29df9f7743316d5dd039c038b07f6f328fc25a14ed77d9503e5c481->leave($__internal_277b57fce29df9f7743316d5dd039c038b07f6f328fc25a14ed77d9503e5c481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
