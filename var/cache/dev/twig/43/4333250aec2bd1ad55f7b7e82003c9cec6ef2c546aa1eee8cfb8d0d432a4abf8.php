<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0bbd053ca0b79308a6fed8e123d5b585c8a9174c22e492dca523a8b11c40e66f extends Twig_Template
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
        $__internal_64a628db8795a2a68cf367e06172a3d157e4effd16d77693f9e5f0aa672bc484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a628db8795a2a68cf367e06172a3d157e4effd16d77693f9e5f0aa672bc484->enter($__internal_64a628db8795a2a68cf367e06172a3d157e4effd16d77693f9e5f0aa672bc484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_88fd2f841bfd7f8ece18fc3944637712f4716a178443d27c3f9c894e637dd85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd2f841bfd7f8ece18fc3944637712f4716a178443d27c3f9c894e637dd85c->enter($__internal_88fd2f841bfd7f8ece18fc3944637712f4716a178443d27c3f9c894e637dd85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_64a628db8795a2a68cf367e06172a3d157e4effd16d77693f9e5f0aa672bc484->leave($__internal_64a628db8795a2a68cf367e06172a3d157e4effd16d77693f9e5f0aa672bc484_prof);

        
        $__internal_88fd2f841bfd7f8ece18fc3944637712f4716a178443d27c3f9c894e637dd85c->leave($__internal_88fd2f841bfd7f8ece18fc3944637712f4716a178443d27c3f9c894e637dd85c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
