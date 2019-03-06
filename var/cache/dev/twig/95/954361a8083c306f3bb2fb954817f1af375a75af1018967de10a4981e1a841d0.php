<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a6254439f0356a0e045d1ac76c90837efb0da3ebf26f8177ce4097f8839407ea extends Twig_Template
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
        $__internal_233ef63e532bc0c9be3c83624bd658321a1f7b1cfc847898f296dfaf314e1e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233ef63e532bc0c9be3c83624bd658321a1f7b1cfc847898f296dfaf314e1e84->enter($__internal_233ef63e532bc0c9be3c83624bd658321a1f7b1cfc847898f296dfaf314e1e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_eb32c7208c593fccde9ba35978992e6c10a272f2290ce914dafda06130018699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb32c7208c593fccde9ba35978992e6c10a272f2290ce914dafda06130018699->enter($__internal_eb32c7208c593fccde9ba35978992e6c10a272f2290ce914dafda06130018699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_233ef63e532bc0c9be3c83624bd658321a1f7b1cfc847898f296dfaf314e1e84->leave($__internal_233ef63e532bc0c9be3c83624bd658321a1f7b1cfc847898f296dfaf314e1e84_prof);

        
        $__internal_eb32c7208c593fccde9ba35978992e6c10a272f2290ce914dafda06130018699->leave($__internal_eb32c7208c593fccde9ba35978992e6c10a272f2290ce914dafda06130018699_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
