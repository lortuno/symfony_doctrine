<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ecec91319098d9eb329c65bf2620d61dc2d99e739e35f7f3791039d9f590a80f extends Twig_Template
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
        $__internal_b97a06bc9af7e22ea51842fae968b3b288bdfa6926c2087f3dcb7fac009f11b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97a06bc9af7e22ea51842fae968b3b288bdfa6926c2087f3dcb7fac009f11b7->enter($__internal_b97a06bc9af7e22ea51842fae968b3b288bdfa6926c2087f3dcb7fac009f11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_150ebdd2b131d5b20a176f2a20778ba33317e4d8c8393b60fde20decf59d1249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150ebdd2b131d5b20a176f2a20778ba33317e4d8c8393b60fde20decf59d1249->enter($__internal_150ebdd2b131d5b20a176f2a20778ba33317e4d8c8393b60fde20decf59d1249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_b97a06bc9af7e22ea51842fae968b3b288bdfa6926c2087f3dcb7fac009f11b7->leave($__internal_b97a06bc9af7e22ea51842fae968b3b288bdfa6926c2087f3dcb7fac009f11b7_prof);

        
        $__internal_150ebdd2b131d5b20a176f2a20778ba33317e4d8c8393b60fde20decf59d1249->leave($__internal_150ebdd2b131d5b20a176f2a20778ba33317e4d8c8393b60fde20decf59d1249_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
