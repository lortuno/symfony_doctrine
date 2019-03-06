<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bd79c9bd9943053bdcf800f010bbe58486be7147d8b171ec8a45863f3500bdc8 extends Twig_Template
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
        $__internal_084621627319542950cbd50cd9fac3a20e5565fd676d7230aa699ef0df3870b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084621627319542950cbd50cd9fac3a20e5565fd676d7230aa699ef0df3870b6->enter($__internal_084621627319542950cbd50cd9fac3a20e5565fd676d7230aa699ef0df3870b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ee56202def9531b792aebec24f23a0fae107610563fee96e0721427e423bf772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee56202def9531b792aebec24f23a0fae107610563fee96e0721427e423bf772->enter($__internal_ee56202def9531b792aebec24f23a0fae107610563fee96e0721427e423bf772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_084621627319542950cbd50cd9fac3a20e5565fd676d7230aa699ef0df3870b6->leave($__internal_084621627319542950cbd50cd9fac3a20e5565fd676d7230aa699ef0df3870b6_prof);

        
        $__internal_ee56202def9531b792aebec24f23a0fae107610563fee96e0721427e423bf772->leave($__internal_ee56202def9531b792aebec24f23a0fae107610563fee96e0721427e423bf772_prof);

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
", "@Twig/Exception/error.txt.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
