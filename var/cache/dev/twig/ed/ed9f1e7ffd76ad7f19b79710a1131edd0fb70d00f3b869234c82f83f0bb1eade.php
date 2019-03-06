<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b185ca0a0aeafae7cb84c0b2f3973efd7be627e292b42e01a3850001d0c97f9f extends Twig_Template
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
        $__internal_b0019ffd4f801c9ad31dc17c59b8ce46861b8e55462320f7c58286b163c4f06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0019ffd4f801c9ad31dc17c59b8ce46861b8e55462320f7c58286b163c4f06d->enter($__internal_b0019ffd4f801c9ad31dc17c59b8ce46861b8e55462320f7c58286b163c4f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e6369d32fedd5f3b4d251bf4a817881ef9e3f43333cf0518d4cdee4a62fa78e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6369d32fedd5f3b4d251bf4a817881ef9e3f43333cf0518d4cdee4a62fa78e9->enter($__internal_e6369d32fedd5f3b4d251bf4a817881ef9e3f43333cf0518d4cdee4a62fa78e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b0019ffd4f801c9ad31dc17c59b8ce46861b8e55462320f7c58286b163c4f06d->leave($__internal_b0019ffd4f801c9ad31dc17c59b8ce46861b8e55462320f7c58286b163c4f06d_prof);

        
        $__internal_e6369d32fedd5f3b4d251bf4a817881ef9e3f43333cf0518d4cdee4a62fa78e9->leave($__internal_e6369d32fedd5f3b4d251bf4a817881ef9e3f43333cf0518d4cdee4a62fa78e9_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
