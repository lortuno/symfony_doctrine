<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8053c757a9005c6ed9593ce0e01ec168b32720dd95a9342bf24dfad81e42d258 extends Twig_Template
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
        $__internal_b154adca65bd3dce1afa3ffc71411e76b54a5babd664d3ebe2e9ea8f64afbe26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b154adca65bd3dce1afa3ffc71411e76b54a5babd664d3ebe2e9ea8f64afbe26->enter($__internal_b154adca65bd3dce1afa3ffc71411e76b54a5babd664d3ebe2e9ea8f64afbe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c3783538275c6075d7b0ce76d3999d2f50297f4bdbf83e4b47e90e5d69e40a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3783538275c6075d7b0ce76d3999d2f50297f4bdbf83e4b47e90e5d69e40a7c->enter($__internal_c3783538275c6075d7b0ce76d3999d2f50297f4bdbf83e4b47e90e5d69e40a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b154adca65bd3dce1afa3ffc71411e76b54a5babd664d3ebe2e9ea8f64afbe26->leave($__internal_b154adca65bd3dce1afa3ffc71411e76b54a5babd664d3ebe2e9ea8f64afbe26_prof);

        
        $__internal_c3783538275c6075d7b0ce76d3999d2f50297f4bdbf83e4b47e90e5d69e40a7c->leave($__internal_c3783538275c6075d7b0ce76d3999d2f50297f4bdbf83e4b47e90e5d69e40a7c_prof);

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
", "@Twig/Exception/error.atom.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
