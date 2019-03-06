<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7c8a8ab75162453a048f24bfb3d4fe2eff9ef99a279b6a5417ccbb21ce4b02eb extends Twig_Template
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
        $__internal_6728874ed1c0cc10dbf7f6e2b171bdb2ecc56c15374c67ff5a118c3cbbeb8595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6728874ed1c0cc10dbf7f6e2b171bdb2ecc56c15374c67ff5a118c3cbbeb8595->enter($__internal_6728874ed1c0cc10dbf7f6e2b171bdb2ecc56c15374c67ff5a118c3cbbeb8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6192f553ca718a14f0ecb40b48d276cc4b8a77178148fa83fbf4ef736f68158e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6192f553ca718a14f0ecb40b48d276cc4b8a77178148fa83fbf4ef736f68158e->enter($__internal_6192f553ca718a14f0ecb40b48d276cc4b8a77178148fa83fbf4ef736f68158e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6728874ed1c0cc10dbf7f6e2b171bdb2ecc56c15374c67ff5a118c3cbbeb8595->leave($__internal_6728874ed1c0cc10dbf7f6e2b171bdb2ecc56c15374c67ff5a118c3cbbeb8595_prof);

        
        $__internal_6192f553ca718a14f0ecb40b48d276cc4b8a77178148fa83fbf4ef736f68158e->leave($__internal_6192f553ca718a14f0ecb40b48d276cc4b8a77178148fa83fbf4ef736f68158e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
