<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d6ae9fc8aa07b83d4a6fc63e7a1addbad6d647680dd9b400ce573fb26f103f0 extends Twig_Template
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
        $__internal_ccba01b316626b31985fec8854b7cfc824d41e485841f6f60d409850b95d4d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccba01b316626b31985fec8854b7cfc824d41e485841f6f60d409850b95d4d78->enter($__internal_ccba01b316626b31985fec8854b7cfc824d41e485841f6f60d409850b95d4d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d58a30fdee023122be1bed0d9f5384d099cfaedb79f38c13c9c15cf9f4ca490e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58a30fdee023122be1bed0d9f5384d099cfaedb79f38c13c9c15cf9f4ca490e->enter($__internal_d58a30fdee023122be1bed0d9f5384d099cfaedb79f38c13c9c15cf9f4ca490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ccba01b316626b31985fec8854b7cfc824d41e485841f6f60d409850b95d4d78->leave($__internal_ccba01b316626b31985fec8854b7cfc824d41e485841f6f60d409850b95d4d78_prof);

        
        $__internal_d58a30fdee023122be1bed0d9f5384d099cfaedb79f38c13c9c15cf9f4ca490e->leave($__internal_d58a30fdee023122be1bed0d9f5384d099cfaedb79f38c13c9c15cf9f4ca490e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
