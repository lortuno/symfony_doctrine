<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d0c0fc9244c3ba205e10d47d020972e672d1185e22fa3a854f241aaf05a49600 extends Twig_Template
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
        $__internal_23a9bac012758464efc0ef98ece1be7f3af6c24bc4c398c5319658ca0acb4f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a9bac012758464efc0ef98ece1be7f3af6c24bc4c398c5319658ca0acb4f99->enter($__internal_23a9bac012758464efc0ef98ece1be7f3af6c24bc4c398c5319658ca0acb4f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_5030ad4aed404938d7bb06b145f1d149c1a6650d9f2bb9eb9028b238d2f3a35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5030ad4aed404938d7bb06b145f1d149c1a6650d9f2bb9eb9028b238d2f3a35c->enter($__internal_5030ad4aed404938d7bb06b145f1d149c1a6650d9f2bb9eb9028b238d2f3a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_23a9bac012758464efc0ef98ece1be7f3af6c24bc4c398c5319658ca0acb4f99->leave($__internal_23a9bac012758464efc0ef98ece1be7f3af6c24bc4c398c5319658ca0acb4f99_prof);

        
        $__internal_5030ad4aed404938d7bb06b145f1d149c1a6650d9f2bb9eb9028b238d2f3a35c->leave($__internal_5030ad4aed404938d7bb06b145f1d149c1a6650d9f2bb9eb9028b238d2f3a35c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
