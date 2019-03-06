<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c0386d664fa7a877288abb099cd0418f33d242f82b61d6679d2963429e1d49fe extends Twig_Template
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
        $__internal_eb7b1843565ffe7af2e54894d3fef883f1a04569364db218fcfdcfb53999d445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7b1843565ffe7af2e54894d3fef883f1a04569364db218fcfdcfb53999d445->enter($__internal_eb7b1843565ffe7af2e54894d3fef883f1a04569364db218fcfdcfb53999d445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6a32733a31e47971269f713fb812b7f62c5b9888e29e5ce7667c34ad6be3017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a32733a31e47971269f713fb812b7f62c5b9888e29e5ce7667c34ad6be3017b->enter($__internal_6a32733a31e47971269f713fb812b7f62c5b9888e29e5ce7667c34ad6be3017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_eb7b1843565ffe7af2e54894d3fef883f1a04569364db218fcfdcfb53999d445->leave($__internal_eb7b1843565ffe7af2e54894d3fef883f1a04569364db218fcfdcfb53999d445_prof);

        
        $__internal_6a32733a31e47971269f713fb812b7f62c5b9888e29e5ce7667c34ad6be3017b->leave($__internal_6a32733a31e47971269f713fb812b7f62c5b9888e29e5ce7667c34ad6be3017b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
