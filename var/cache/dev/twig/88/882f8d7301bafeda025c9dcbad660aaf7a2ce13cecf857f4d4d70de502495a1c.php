<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_871239fbd0f1873dff8711f091fa38c22a9173fa1034105154ede77eb7f8401c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7fac25e9b342a99bf66dab80f8da2c3cc0917858bcfd3c2a6a9df7730a0851e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fac25e9b342a99bf66dab80f8da2c3cc0917858bcfd3c2a6a9df7730a0851e->enter($__internal_a7fac25e9b342a99bf66dab80f8da2c3cc0917858bcfd3c2a6a9df7730a0851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c00339fe03c72285f9666194dced65453faed394a9ab8176f9254045879be723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00339fe03c72285f9666194dced65453faed394a9ab8176f9254045879be723->enter($__internal_c00339fe03c72285f9666194dced65453faed394a9ab8176f9254045879be723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a7fac25e9b342a99bf66dab80f8da2c3cc0917858bcfd3c2a6a9df7730a0851e->leave($__internal_a7fac25e9b342a99bf66dab80f8da2c3cc0917858bcfd3c2a6a9df7730a0851e_prof);

        
        $__internal_c00339fe03c72285f9666194dced65453faed394a9ab8176f9254045879be723->leave($__internal_c00339fe03c72285f9666194dced65453faed394a9ab8176f9254045879be723_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2ab5b0a1a0e51e9481ad86219832c6a219f3c30aeeb734efee5ade4a072d49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ab5b0a1a0e51e9481ad86219832c6a219f3c30aeeb734efee5ade4a072d49e->enter($__internal_c2ab5b0a1a0e51e9481ad86219832c6a219f3c30aeeb734efee5ade4a072d49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1ae6b7a82aa046917848593b6693e7fa3118ae0714f9380a383d1e2cef63c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ae6b7a82aa046917848593b6693e7fa3118ae0714f9380a383d1e2cef63c15->enter($__internal_d1ae6b7a82aa046917848593b6693e7fa3118ae0714f9380a383d1e2cef63c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1ae6b7a82aa046917848593b6693e7fa3118ae0714f9380a383d1e2cef63c15->leave($__internal_d1ae6b7a82aa046917848593b6693e7fa3118ae0714f9380a383d1e2cef63c15_prof);

        
        $__internal_c2ab5b0a1a0e51e9481ad86219832c6a219f3c30aeeb734efee5ade4a072d49e->leave($__internal_c2ab5b0a1a0e51e9481ad86219832c6a219f3c30aeeb734efee5ade4a072d49e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
