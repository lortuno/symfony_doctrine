<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6b62e5e1a8f301c66ce31d49b22e454e133b999f02dfb18995868a3af6155ebd extends Twig_Template
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
        $__internal_3d19b38330de44c3b2aa4b9ca98d5aca1bca606eb401c37f53f75b8ca5936971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d19b38330de44c3b2aa4b9ca98d5aca1bca606eb401c37f53f75b8ca5936971->enter($__internal_3d19b38330de44c3b2aa4b9ca98d5aca1bca606eb401c37f53f75b8ca5936971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5047e4a06e40521c66162519a89c6491a33888909f9fdcb3ca787e2b27db8adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5047e4a06e40521c66162519a89c6491a33888909f9fdcb3ca787e2b27db8adf->enter($__internal_5047e4a06e40521c66162519a89c6491a33888909f9fdcb3ca787e2b27db8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3d19b38330de44c3b2aa4b9ca98d5aca1bca606eb401c37f53f75b8ca5936971->leave($__internal_3d19b38330de44c3b2aa4b9ca98d5aca1bca606eb401c37f53f75b8ca5936971_prof);

        
        $__internal_5047e4a06e40521c66162519a89c6491a33888909f9fdcb3ca787e2b27db8adf->leave($__internal_5047e4a06e40521c66162519a89c6491a33888909f9fdcb3ca787e2b27db8adf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
