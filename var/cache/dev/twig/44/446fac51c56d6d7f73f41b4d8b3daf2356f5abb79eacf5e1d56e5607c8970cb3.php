<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a3cc80ceb69e4adfcc89e483902f7a608462f4d5254a8d4c337db0a2e3fec6f1 extends Twig_Template
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
        $__internal_bec99c29de380761054a2687d6cc38e7367fb786bc1ded6cc46adc81e16dfee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec99c29de380761054a2687d6cc38e7367fb786bc1ded6cc46adc81e16dfee5->enter($__internal_bec99c29de380761054a2687d6cc38e7367fb786bc1ded6cc46adc81e16dfee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_160d1ad770561fa46b083302b66100d7c778e70ead2faa49d097a9c9d521fb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160d1ad770561fa46b083302b66100d7c778e70ead2faa49d097a9c9d521fb06->enter($__internal_160d1ad770561fa46b083302b66100d7c778e70ead2faa49d097a9c9d521fb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bec99c29de380761054a2687d6cc38e7367fb786bc1ded6cc46adc81e16dfee5->leave($__internal_bec99c29de380761054a2687d6cc38e7367fb786bc1ded6cc46adc81e16dfee5_prof);

        
        $__internal_160d1ad770561fa46b083302b66100d7c778e70ead2faa49d097a9c9d521fb06->leave($__internal_160d1ad770561fa46b083302b66100d7c778e70ead2faa49d097a9c9d521fb06_prof);

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
", "@Framework/Form/search_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
