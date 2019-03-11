<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_53078ac37024f6ece1046eda0c0c5178be73750c9b16c159fa83e442e1b9c704 extends Twig_Template
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
        $__internal_19e39949441de9f1f4919979b1781a34a4e4f89a361bd74d79efbe0690ead429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e39949441de9f1f4919979b1781a34a4e4f89a361bd74d79efbe0690ead429->enter($__internal_19e39949441de9f1f4919979b1781a34a4e4f89a361bd74d79efbe0690ead429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f7fd7be33131cb4b3538195aa97a60196d00f61e9b286f23a32f7f70e128dfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fd7be33131cb4b3538195aa97a60196d00f61e9b286f23a32f7f70e128dfa4->enter($__internal_f7fd7be33131cb4b3538195aa97a60196d00f61e9b286f23a32f7f70e128dfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_19e39949441de9f1f4919979b1781a34a4e4f89a361bd74d79efbe0690ead429->leave($__internal_19e39949441de9f1f4919979b1781a34a4e4f89a361bd74d79efbe0690ead429_prof);

        
        $__internal_f7fd7be33131cb4b3538195aa97a60196d00f61e9b286f23a32f7f70e128dfa4->leave($__internal_f7fd7be33131cb4b3538195aa97a60196d00f61e9b286f23a32f7f70e128dfa4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
