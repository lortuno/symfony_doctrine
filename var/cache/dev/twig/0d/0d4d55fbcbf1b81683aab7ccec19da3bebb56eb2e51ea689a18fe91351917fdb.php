<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9e1e4a7ac8fd3900bb8c41251afe50c661c6622cb0d86b1aaed6732cd00b8d25 extends Twig_Template
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
        $__internal_de83ab1076dc78a8e7622a0ece96c904872c750da30ea7c1d5d85db1febc588c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de83ab1076dc78a8e7622a0ece96c904872c750da30ea7c1d5d85db1febc588c->enter($__internal_de83ab1076dc78a8e7622a0ece96c904872c750da30ea7c1d5d85db1febc588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e65a500ade6c1ee8814eeb4c7c2a39eb46f67a05bad19c08f82252f6bc56d6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65a500ade6c1ee8814eeb4c7c2a39eb46f67a05bad19c08f82252f6bc56d6bb->enter($__internal_e65a500ade6c1ee8814eeb4c7c2a39eb46f67a05bad19c08f82252f6bc56d6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_de83ab1076dc78a8e7622a0ece96c904872c750da30ea7c1d5d85db1febc588c->leave($__internal_de83ab1076dc78a8e7622a0ece96c904872c750da30ea7c1d5d85db1febc588c_prof);

        
        $__internal_e65a500ade6c1ee8814eeb4c7c2a39eb46f67a05bad19c08f82252f6bc56d6bb->leave($__internal_e65a500ade6c1ee8814eeb4c7c2a39eb46f67a05bad19c08f82252f6bc56d6bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
