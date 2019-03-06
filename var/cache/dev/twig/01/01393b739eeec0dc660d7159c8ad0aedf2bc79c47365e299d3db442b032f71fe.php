<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a23c82ccf5a78af1ccdf674111135ae0a48d57bc3dffecabcf7bf4fd60ebc9e6 extends Twig_Template
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
        $__internal_0977e1490d7d68b4e3810a7c5d02ec66a94dcbb1d2d74bcb72d6611318db75a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0977e1490d7d68b4e3810a7c5d02ec66a94dcbb1d2d74bcb72d6611318db75a1->enter($__internal_0977e1490d7d68b4e3810a7c5d02ec66a94dcbb1d2d74bcb72d6611318db75a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0ece970dc9de03c69d90209994c8901c5146eca59698db01f7c5ec3f4b8d8be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ece970dc9de03c69d90209994c8901c5146eca59698db01f7c5ec3f4b8d8be3->enter($__internal_0ece970dc9de03c69d90209994c8901c5146eca59698db01f7c5ec3f4b8d8be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_0977e1490d7d68b4e3810a7c5d02ec66a94dcbb1d2d74bcb72d6611318db75a1->leave($__internal_0977e1490d7d68b4e3810a7c5d02ec66a94dcbb1d2d74bcb72d6611318db75a1_prof);

        
        $__internal_0ece970dc9de03c69d90209994c8901c5146eca59698db01f7c5ec3f4b8d8be3->leave($__internal_0ece970dc9de03c69d90209994c8901c5146eca59698db01f7c5ec3f4b8d8be3_prof);

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
", "@Twig/Exception/error.css.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
