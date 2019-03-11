<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_abfb7a4f2acc10fe1b38f6c4662c5b2a07afad841869ae036ae88079416d0eb4 extends Twig_Template
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
        $__internal_ad1e0e7c7a89361725653cd551ea103360eb831b5c3642074fead6b33716bc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1e0e7c7a89361725653cd551ea103360eb831b5c3642074fead6b33716bc49->enter($__internal_ad1e0e7c7a89361725653cd551ea103360eb831b5c3642074fead6b33716bc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5cda2af56127bda6dbb6cf5cb614b326640863570c4125f880adc94992a42d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cda2af56127bda6dbb6cf5cb614b326640863570c4125f880adc94992a42d63->enter($__internal_5cda2af56127bda6dbb6cf5cb614b326640863570c4125f880adc94992a42d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ad1e0e7c7a89361725653cd551ea103360eb831b5c3642074fead6b33716bc49->leave($__internal_ad1e0e7c7a89361725653cd551ea103360eb831b5c3642074fead6b33716bc49_prof);

        
        $__internal_5cda2af56127bda6dbb6cf5cb614b326640863570c4125f880adc94992a42d63->leave($__internal_5cda2af56127bda6dbb6cf5cb614b326640863570c4125f880adc94992a42d63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
