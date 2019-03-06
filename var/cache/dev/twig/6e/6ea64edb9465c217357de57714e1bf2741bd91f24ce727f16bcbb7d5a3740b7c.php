<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6949a6ca67db07ba66e49ac1b686b564b93f6a7284b799e76d75d93f6c8e4767 extends Twig_Template
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
        $__internal_885cdff743fba750535216794097a75c174e0eb55b141cb7f23cc5727ac0e421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885cdff743fba750535216794097a75c174e0eb55b141cb7f23cc5727ac0e421->enter($__internal_885cdff743fba750535216794097a75c174e0eb55b141cb7f23cc5727ac0e421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_dae14fe59e79c88c134aad6bf1b8873e09054561fbcfbeddc57c45728fea9fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae14fe59e79c88c134aad6bf1b8873e09054561fbcfbeddc57c45728fea9fcd->enter($__internal_dae14fe59e79c88c134aad6bf1b8873e09054561fbcfbeddc57c45728fea9fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_885cdff743fba750535216794097a75c174e0eb55b141cb7f23cc5727ac0e421->leave($__internal_885cdff743fba750535216794097a75c174e0eb55b141cb7f23cc5727ac0e421_prof);

        
        $__internal_dae14fe59e79c88c134aad6bf1b8873e09054561fbcfbeddc57c45728fea9fcd->leave($__internal_dae14fe59e79c88c134aad6bf1b8873e09054561fbcfbeddc57c45728fea9fcd_prof);

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
", "@Twig/Exception/error.rdf.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
