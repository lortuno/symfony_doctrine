<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_edc0386c6fa6c58dab44255c10f5b74b14a46fb008520028072bbbd1c6c3d119 extends Twig_Template
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
        $__internal_6a9cfce4ba455fa61ae0aea0c414ad377be3a5470d2f67b419a5b98ac1f9badb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9cfce4ba455fa61ae0aea0c414ad377be3a5470d2f67b419a5b98ac1f9badb->enter($__internal_6a9cfce4ba455fa61ae0aea0c414ad377be3a5470d2f67b419a5b98ac1f9badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_723dc8781e346ee93a4a6ecf6dd7f3b4c27d824ee8c12935ed1c8435bf088088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723dc8781e346ee93a4a6ecf6dd7f3b4c27d824ee8c12935ed1c8435bf088088->enter($__internal_723dc8781e346ee93a4a6ecf6dd7f3b4c27d824ee8c12935ed1c8435bf088088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6a9cfce4ba455fa61ae0aea0c414ad377be3a5470d2f67b419a5b98ac1f9badb->leave($__internal_6a9cfce4ba455fa61ae0aea0c414ad377be3a5470d2f67b419a5b98ac1f9badb_prof);

        
        $__internal_723dc8781e346ee93a4a6ecf6dd7f3b4c27d824ee8c12935ed1c8435bf088088->leave($__internal_723dc8781e346ee93a4a6ecf6dd7f3b4c27d824ee8c12935ed1c8435bf088088_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
