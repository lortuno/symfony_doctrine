<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5396fc6acaf85b8c3cf7b9c63ce8c3c648d1fb377533fbfe1d4afbb462e5b314 extends Twig_Template
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
        $__internal_bab2869888ff974a43f305730da5eeebe13c0b16400b1e8834f57d352a25a5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab2869888ff974a43f305730da5eeebe13c0b16400b1e8834f57d352a25a5c5->enter($__internal_bab2869888ff974a43f305730da5eeebe13c0b16400b1e8834f57d352a25a5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9bc0f094639eead1e2dc60236726e533b68798b8351556a024f32b7b1eded215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc0f094639eead1e2dc60236726e533b68798b8351556a024f32b7b1eded215->enter($__internal_9bc0f094639eead1e2dc60236726e533b68798b8351556a024f32b7b1eded215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bab2869888ff974a43f305730da5eeebe13c0b16400b1e8834f57d352a25a5c5->leave($__internal_bab2869888ff974a43f305730da5eeebe13c0b16400b1e8834f57d352a25a5c5_prof);

        
        $__internal_9bc0f094639eead1e2dc60236726e533b68798b8351556a024f32b7b1eded215->leave($__internal_9bc0f094639eead1e2dc60236726e533b68798b8351556a024f32b7b1eded215_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
